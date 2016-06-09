<?php 
/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Controlador Dashboard
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 12/02/2016
*	
*/
class DashboardController extends BaseController
{

	public function getIndex()
	{

		return Redirect::to('panel-control/dashboard');
	}

	/*********************************************************************
	 * Acao que recupera os dados para os gráficos e tabelas no dashboard
	 *********************************************************************/
	public function getDashboard()
	{	
		Session::put('flag',1);

		// $d = date("Y-m-d");
		// $pdias = PedidosModel::where("data",$d)->get();
		// $pmes = DB::select("SELECT * FROM `pedidos` WHERE MONTH(data) LIKE MONTH('{$d}')");
		// $ppp = DB::table("item_pedido")
		// ->join("pratos","item_pedido.cod_prato","=","pratos.cod")
		// ->select(DB::raw("count(cod_prato) as qtd_prato,cod_prato,nome"))
		// ->groupBy("item_pedido.cod_prato")
		// ->get();

		// $prato_mais_pedido = "";
		// $aux = 0;
		// foreach ($ppp as $key => $value) {
		// 	if($aux < $value->qtd_prato)
		// 	{
		// 		$aux = $value->qtd_prato;
		// 		$prato_mais_pedido = $value->nome;
		// 	}
		// }
		// $qtd_pdias = count($pdias);
		// $qtd_pmes = count($pmes);

		// $table_clientes = DB::select(
		// "SELECT count(pedidos.cod) as qtd_pedidos,max(pedidos.data) as ultimo_pedido,clientes.nome FROM `pedidos` 
		// inner join clientes on pedidos.cod_cliente = clientes.cod
		// group by pedidos.cod_cliente 
		// order by qtd_pedidos desc limit 10");


		// $dados = 
		// [
		// 	"qtd_pdias" => $qtd_pdias,
		// 	"qtd_pmes" => $qtd_pmes,
		// 	"ppp" => $prato_mais_pedido,
		// 	"tclientes" => $table_clientes
		// ];
		return View::make("dashboard")/*->with($dados)*/;
	}
	/***********************************************************************
	* Acao que retorna a view do Perfil junto com os dados do usuario logado
	************************************************************************/
	public function getPerfil()
	{
		$funcionarios = FuncionariosModel::where('cod',Session::get('cod_user'))
		->get();
		if(isset($funcionarios[0]))
			$funcionarios = $funcionarios[0];
		$dados = 
		[
			'dados' => $funcionarios
		];
		return View::make("menu.perfil")->with($dados);
	}
	/**
	*	Acao que faz a ediçao dos dados do perfil do usuario.
	*/
	public function postPerfil()
	{
		$dados = Input::all();
		unset($dados["_token"]);
		unset($dados["confirmacao"]);
		if(!Session::has('cod_user'))
			return 0;
		$codigo = Session::get('cod_user');
		if(isset($dados["senha"]))
			$dados["senha"] = sha1($dados["senha"]);

		$result = DB::table('funcionarios')
        ->where('cod', $codigo)
        ->update($dados);
        
        if($result)
			$msg = "1#".Lang::get('geral.msg_perfil_atualizado_sucesso');
		else
			$msg = "2#".Lang::get('geral.msg_erro');

		Session::flash("msg",$msg);
		return Redirect::back();
	}
	/********************************************
	* Acao que faz o logout do usuario
	*******************************************/
	public function getLogout()
	{
		Session::forget('cod_user');
		Session::forget('nome_user');
		Session::forget('tipo_user');

		return Redirect::to("/");
	}
	/************************************************
	* Acao que retorna os dados do grafico de pedidos
	*************************************************/
	public function getGraficopedidos()
	{
		
		$pedidos = DB::select(
			"SELECT count(cod) as total, DATE_FORMAT(data, '%Y-%m') as data 
			FROM `pedidos` 
			where year(data) = year(now())
			group by month(data);");

		return json_encode($pedidos);

	}
	/********************************************************
	* Acao que retorna os dados do grafico de pedidos via App
	**********************************************************/
	public function getGraficoapp()
	{
		
		$pedidos = DB::select(
			"SELECT count(cod) as total, DATE_FORMAT(data, '%Y-%m') as data 
			FROM `pedidos` 
			where year(data) = year(now()) and origem = 2 
			group by month(data);");
		return json_encode($pedidos);
	}
	/***********************************************
	* Acao que retorna os dados do grafico de pratos
	************************************************/
	public function getGraficopratos()
	{
		
		$pratos = DB::select(
			"SELECT pratos.nome as prato, DATE_FORMAT(pedidos.data, '%Y-%m') as data ,count(pratos.cod) as total_pratos 
			FROM pedidos inner join `item_pedido` 
			on pedidos.cod = item_pedido.cod_pedido 
			inner join pratos on pratos.cod = item_pedido.cod_prato 
			where month(pedidos.data) = month(now())
			and year(pedidos.data) = year(now())
			group by pratos.cod , month(pedidos.data) 
			order by data asc 
			limit 5");

		$db = DB::select(
			"SELECT count(pratos.cod) as total_pratos 
			FROM pedidos 
			inner join `item_pedido` on pedidos.cod = item_pedido.cod_pedido 
			inner join pratos on pratos.cod = item_pedido.cod_prato 
			where month(pedidos.data) = month(now())
			and year(pedidos.data) = year(now())
			limit 5");

		$tp =  $db[0]->total_pratos;
		
		$donut = array();

		foreach ($pratos as $key => $value) {
			$tmp = array();

			$tmp["value"] = number_format((float)((intval($value->total_pratos) / intval($tp)) * 100), 2, '.', '');
			$tmp["label"] = $value->prato;
			$tmp["formatted"] = number_format((float)((intval($value->total_pratos) / intval($tp)) * 100), 2, '.', '');
			$tmp["formatted"] .= "%";
			array_push($donut,$tmp);
		}

		return json_encode($donut);

	}
	/********************************************************
	* Acao que retorna os dados do grafico de novos clientes
	*********************************************************/
	public function getGraficonovosclientes()
	{
		$db1 = DB::select(
			"SELECT count(cod) as quantidade, DATE_FORMAT(data, '%Y-%m') as data
			FROM `clientes` 
            where year(data) = year(now())
			group by month(data);");
		
		$dados = array();
		
		foreach ($db1 as $key => $value) {
			
			$tmp = array();
			$tmp["data"] = $value->data;
			$tmp["a"] = $value->quantidade;
			
			array_push($dados, $tmp);

		}
		

		return json_encode($dados);
	}

}