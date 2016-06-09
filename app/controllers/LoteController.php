<?php 
/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Lotes
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 23/03/2016
*       
*/
class LoteController extends BaseController{




 	public function getIndex()
	{
		Session::put('flag',6);
		return View::make('lote.lote');
	}

	/*******************************************
	*  Ação que retorna a View de Cadastro para 
	*  Tab.
	********************************************/
	public function getCadastro()
	{
		return View::make('lote.cadastro');
	}

	/*******************************************
	*  Ação para Cadastro de Retiros do Sistema
	********************************************/
	public function postCadastro()
	{
		$dados = Input::all();
		
		$lote = new LoteModel($dados);
		$status = $lote->save();

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
		return View::make('lote.pesquisa');
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

		$res = DB::table("lotes")
		->join("piquetes","lotes.cod_piquete","=","piquetes.cod")
		->join("retiros","piquetes.cod_retiro","=","retiros.cod")
		->join("fazendas","retiros.cod_fazenda","=","fazendas.cod")
		->join("pastagens","piquetes.cod_pastagem","=","pastagens.cod")
		->where("fazendas.cod_criador",Session::get("cod_criador"))
		->get();

		$recordsTotal = count($res);

		if($limit == -1)
			$limit = $recordsTotal;
		
		$filtred = DB::table("lotes")
		->join("piquetes","lotes.cod_piquete","=","piquetes.cod")
		->join("retiros","piquetes.cod_retiro","=","retiros.cod")
		->join("fazendas","retiros.cod_fazenda","=","fazendas.cod")
		->join("pastagens","piquetes.cod_pastagem","=","pastagens.cod")
		->where(function($query)use($dados){
			if($dados["filtro"] != "retiros.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where("fazendas.cod_criador",Session::get("cod_criador"))
		->select("lotes.cod","lotes.nome as lote","piquetes.nome as piquete",
			"retiros.nome as retiro","fazendas.nome as fazenda")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->groupBy("fazendas.cod","retiros.cod","piquetes.cod","lotes.cod")
		->get();
		
		$recordsFiltered = count($filtred);
		
		$lotes = DB::table("lotes")
		->join("piquetes","lotes.cod_piquete","=","piquetes.cod")
		->join("retiros","piquetes.cod_retiro","=","retiros.cod")
		->join("fazendas","retiros.cod_fazenda","=","fazendas.cod")
		->join("pastagens","piquetes.cod_pastagem","=","pastagens.cod")
		->where(function($query)use($dados){
			if($dados["filtro"] != "retiros.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where("fazendas.cod_criador",Session::get("cod_criador"))
		->select("lotes.cod","lotes.nome as lote","piquetes.nome as piquete",
			"retiros.nome as retiro","fazendas.nome as fazenda")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->groupBy("fazendas.cod","retiros.cod","piquetes.cod","lotes.cod")
		->take($limit)
		->skip($start)
		->get();

		$json = [];
		$json["draw"] = intval($dados["draw"]);
		$json["recordsTotal"] = $recordsTotal;
		$json["recordsFiltered"] = $recordsFiltered;
		$json["aaData"] = array();

		foreach ($lotes as $key => $value) {
			$value = (array)$value;

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

		$piquete = DB::table("lotes")
		->join("piquetes","lotes.cod_piquete","=","piquetes.cod")
		->select("lotes.cod","lotes.nome","lotes.cod_piquete")
		->where("lotes.cod",$codigo)
		->get();

		return json_encode($piquete);
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
		
		$result = DB::table('lotes')
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

		$exist = DB::table("animais")
		->where("cod_lote",$id)
		->get();
		if(count($exist) > 0)
		{
			return 0;
		}
		
		DB::table('lotes')->where('cod',$id)->delete();

		return 1;
	}

	/*******************************************
	*  Ação que lista todos os lotes
	********************************************/
	public function getListar()
	{
		$dados = Input::all();

		$lotes = DB::table("lotes")
		->join("piquetes","lotes.cod_piquete","=","piquetes.cod")
		->join("retiros","piquetes.cod_retiro","=","retiros.cod")
		->join("fazendas","retiros.cod_fazenda","=","fazendas.cod")
		->join("clientes","fazendas.cod_criador","=","clientes.cod")
		->where(function($query)use($dados){
			
			if($dados != null)
			{
				if($dados["filtro"] != "retiros.cod")
					$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
				else if($dados["valor_buscado"] != "")
					$query->where($dados["filtro"],$dados["valor_buscado"]);	
			}
		})
		->where("fazendas.cod_criador",Session::get("cod_criador"))
		->select("lotes.cod as cod_lote","lotes.nome as lote",
			"piquetes.cod as cod_piquete","piquetes.nome as piquete",
			"retiros.cod as cod_retiro","retiros.nome as retiro",
			"fazendas.cod as cod_fazenda","fazendas.nome as fazenda",
			"clientes.cod as cod_cliente","clientes.nome as cliente")
		->groupBy("clientes.cod","fazendas.cod","retiros.cod","piquetes.cod","lotes.cod")
		->orderBy("fazendas.nome","asc")
		->get();
		
		return json_encode($lotes);
	}

}