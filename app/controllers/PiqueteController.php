<?php 
/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Piquetes
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 19/03/2016
*       
*/
class PiqueteController extends BaseController{



 	public function getIndex()
	{
		Session::put('flag',5);
		return View::make('piquete.piquete');
	}

	/*******************************************
	*  Ação que retorna a View de Cadastro para 
	*  Tab.
	********************************************/
	public function getCadastro()
	{
		return View::make('piquete.cadastro');
	}

	/*******************************************
	*  Ação para Cadastro de Retiros do Sistema
	********************************************/
	public function postCadastro()
	{
		$dados = Input::all();
		
		$piquete = new PiqueteModel($dados);
		$status = $piquete->save();

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
		return View::make('piquete.pesquisa');
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

		$res = DB::table("piquetes")
		->join("retiros","piquetes.cod_retiro","=","retiros.cod")
		->join("fazendas","retiros.cod_fazenda","=","fazendas.cod")
		->join("pastagens","piquetes.cod_pastagem","=","pastagens.cod")
		->where("fazendas.cod_criador",Session::get("cod_criador"))
		->where(function($query)use($dados){
			if($dados["cod_retiro"] == "")
			{
				$dados["cod_retiro"] = 0;
			}
			$query->where("piquetes.cod_retiro",$dados["cod_retiro"]);
		})
		->get();

		$recordsTotal = count($res);

		if($limit == -1)
			$limit = $recordsTotal;
		
		$filtred = DB::table("piquetes")
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
		->where(function($query)use($dados){
			if($dados["cod_retiro"] == "")
			{
				$dados["cod_retiro"] = 0;
			}
			$query->where("piquetes.cod_retiro",$dados["cod_retiro"]);
		})
		->select("piquetes.cod","piquetes.nome as piquete","piquetes.area",
			"retiros.nome as retiro","fazendas.nome as fazenda","pastagens.tipo as pastagem")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->groupBy("fazendas.cod","retiros.cod","piquetes.cod","pastagens.tipo")
		->get();
		
		$recordsFiltered = count($filtred);
		
		$piquetes = DB::table("piquetes")
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
		->where(function($query)use($dados){
			if($dados["cod_retiro"] == "")
			{
				$dados["cod_retiro"] = 0;
			}
			$query->where("piquetes.cod_retiro",$dados["cod_retiro"]);
		})
		->select("piquetes.cod","piquetes.nome as piquete","piquetes.area",
			"retiros.nome as retiro","fazendas.nome as fazenda","pastagens.tipo as pastagem")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->groupBy("fazendas.cod","retiros.cod","piquetes.cod","pastagens.tipo")
		->take($limit)
		->skip($start)
		->get();

		$json = [];
		$json["draw"] = intval($dados["draw"]);
		$json["recordsTotal"] = $recordsTotal;
		$json["recordsFiltered"] = $recordsFiltered;
		$json["aaData"] = array();

		foreach ($piquetes as $key => $value) {
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

		$retiro = DB::table("piquetes")
		->join("retiros","piquetes.cod_retiro","=","retiros.cod")
		->select("piquetes.cod","piquetes.nome","piquetes.area",
			"piquetes.cod_retiro","piquetes.cod_pastagem")
		->where("piquetes.cod",$codigo)
		->get();

		return json_encode($retiro);
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
		
		$result = DB::table('piquetes')
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

		$exist = DB::table("lotes")
		->where("cod_piquete",$id)
		->get();
		if(count($exist) > 0)
		{
			return 0;
		}
		
		DB::table('piquetes')->where('cod',$id)->delete();

		return 1;
	}

	/*******************************************
	*  Ação que lista todos os piquetes
	********************************************/
	public function getListar()
	{
		$piquetes = DB::table("piquetes")
		->join("retiros","piquetes.cod_retiro","=","retiros.cod")
		->join("fazendas","retiros.cod_fazenda","=","fazendas.cod")
		->where("fazendas.cod_criador",Session::get("cod_criador"))
		->select("piquetes.cod as cod_piquete","piquetes.nome as piquete",
			"fazendas.nome as fazenda","retiros.nome as retiro")
		->orderBy('piquetes.nome',"asc")
		->get();

		return json_encode($piquetes);
	}
		

}