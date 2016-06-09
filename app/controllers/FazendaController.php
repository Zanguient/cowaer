<?php 
/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Fazenda
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 24/02/2016
*       
*/
class FazendaController extends BaseController{


	
 	public function getIndex()
	{
		Session::put('flag',2);
		return View::make('fazenda.fazenda');
	}

	/*******************************************
	*  Ação que retorna a View de Cadastro para 
	*  Tab.
	********************************************/
	public function getCadastro()
	{
		return View::make('fazenda.cadastro');
	}

	/*******************************************
	*  Ação para Cadastro de Usuarios do Sistema
	********************************************/
	public function postCadastro()
	{
		$dados = Input::all();
		if(Session::has("cod_criador")) 
			$dados["cod_criador"] = Session::get("cod_criador");

		$fazenda = new FazendaModel($dados);
		$status = $fazenda->save();

		if($status)
			return 1;
		else
			return 0;
	}

	/*******************************************
	*  Ação que retorna a View de Pesquisa para 
	*  Tab.
	********************************************/
	public function getPesquisa()
	{
		return View::make('fazenda.pesquisa');
	}

	/*******************************************
	*  Ação que faz a busca dos dados via Ajax utilizando
	*  o Plugin DataTables
	********************************************/
	public function postPesquisa()
	{
		$dados = Input::all();

		if(isset($dados["columns"]))
			$columns = $dados["columns"];
		if(isset($dados["order"]))
		{
			$order = $dados["order"];
			$order = $order[0];
			$orderIndex = intval($order["column"]);
		}
		
		if(isset($dados["search"]))
			$search = $dados["search"];
			$limit = intval($dados["length"]);
			$start = intval($dados["start"]);

		$recordsTotal = count(FazendaModel::get());

		if($limit == -1)
			$limit = $recordsTotal;
		
		$filtred = FazendaModel::
		where(function($query)use($dados){
			if($dados["filtro"] != "fazendas.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where("cod_criador",Session::get('cod_criador'))
		->select("fazendas.cod","fazendas.nome","fazendas.cidade")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->get();
		
		$recordsFiltered = count($filtred);
		
		$fazendas = FazendaModel::
		where(function($query)use($dados){
			if($dados["filtro"] != "fazendas.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where("cod_criador",Session::get('cod_criador'))
		->select("fazendas.cod","fazendas.nome","fazendas.cidade")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->take($limit)
		->skip($start)
		->get();

		$json = [];
		$json["draw"] = intval($dados["draw"]);
		$json["recordsTotal"] = $recordsTotal;
		$json["recordsFiltered"] = $recordsFiltered;
		$json["aaData"] = array();

		foreach ($fazendas->toArray() as $key => $value) {
			array_push($json["aaData"], array_values($value));
		}
		return json_encode($json);
	}

	/*******************************************
	*  Ação de solicitação Ajax que auto preenche
	*  os dados para edição
	********************************************/
	public function getEditar()
	{

		$codigo = Input::get('codigo');

		$fazenda = FazendaModel::
		where("cod",$codigo)
		->get();

		return json_encode($fazenda);
	}

	/*******************************************
	*  Ação que faz a edição dos dados
	********************************************/
	public function postEditar()
	{
		
		$dados = Input::all();
		
		unset($dados["_token"]);
		$codigo = $dados["cod"];
		unset($dados["cod"]);
		
		$result = DB::table('fazendas')
        ->where('cod', $codigo)
        ->update($dados);
        

        if($result)
			return 1;
		else
			return 0;
	}

	/*******************************************
	*  Ação que faz a exclusão dos dados
	********************************************/
	public function getDeletar()
	{
		$id = Input::get("id");
		
		$exist = DB::table("rel_funcionario_fazenda")
		->where("cod_fazenda",$id)
		->get();
		if(count($exist) > 0)
		{
			return 0;
		}

		DB::table('fazendas')->where('cod',$id)->delete();

		return 1;
	}

	/*******************************************
	*  Ação que retorna os dados para o select2
	********************************************/
	public function getListar()
	{
		if(!Session::has("cod_criador"))
			return null;
		
		$cod_criador = Session::get("cod_criador");
		
		$fazendas = FazendaModel::where("cod_criador",$cod_criador)
		->get();

		return json_encode($fazendas);
	}
}