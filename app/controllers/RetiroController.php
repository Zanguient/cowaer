<?php 
/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Retiros
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 03/03/2016
*       
*/
class RetiroController extends BaseController{


 	public function getIndex()
	{
		Session::put('flag',4);
		return View::make('retiro.retiro');
	}

	/*******************************************
	*  Ação que retorna a View de Cadastro para 
	*  Tab.
	********************************************/
	public function getCadastro()
	{
		return View::make('retiro.cadastro');
	}

	/*******************************************
	*  Ação para Cadastro de Retiros do Sistema
	********************************************/
	public function postCadastro()
	{
		$dados = Input::all();
		
		$retiro = new RetiroModel($dados);
		$status = $retiro->save();

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
		return View::make('retiro.pesquisa');
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

		
		$recordsTotal = count(RetiroModel::get());

		if($limit == -1)
			$limit = $recordsTotal;
		
		$filtred = DB::table("retiros")
		->join("fazendas","fazendas.cod","=","retiros.cod_fazenda")
		->join("funcionarios","funcionarios.cod","=","retiros.cod_funcionario")
		->where(function($query)use($dados){
			if($dados["filtro"] != "retiros.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where(function($query)use($dados){
			if($dados["cod_fazenda"] == "")
			{
				$dados["cod_fazenda"] = 0;
			}
			$query->where("fazendas.cod",$dados["cod_fazenda"]);
		})
		->select("retiros.cod","retiros.nome","funcionarios.nome as responsavel")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->get();
		
		$recordsFiltered = count($filtred);
		
		$retiros = DB::table("retiros")
		->join("fazendas","fazendas.cod","=","retiros.cod_fazenda")
		->join("funcionarios","funcionarios.cod","=","retiros.cod_funcionario")
		->where(function($query)use($dados){
			if($dados["filtro"] != "retiros.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where(function($query)use($dados){
			if($dados["cod_fazenda"] == "")
			{
				$dados["cod_fazenda"] = 0;
			}

			$query->where("fazendas.cod",$dados["cod_fazenda"]);
		})
		->select("retiros.cod","retiros.nome","funcionarios.nome as responsavel")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->take($limit)
		->skip($start)
		->get();

		$json = [];
		$json["draw"] = intval($dados["draw"]);
		$json["recordsTotal"] = $recordsTotal;
		$json["recordsFiltered"] = $recordsFiltered;
		$json["aaData"] = array();

		foreach ($retiros as $key => $value) {
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

		$retiro = DB::table("retiros")
		->join("funcionarios","funcionarios.cod","=","retiros.cod_funcionario")
		->join("fazendas","retiros.cod_fazenda","=","fazendas.cod")
		->select("retiros.cod","retiros.cod_funcionario","retiros.cod_fazenda","retiros.nome")
		->where("retiros.cod",$codigo)
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
		
		
		$result = DB::table('retiros')
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
		
		$exist = DB::table("piquetes")
		->where("cod_retiro",$id)
		->get();
		if(count($exist) > 0)
		{
			return 0;
		}

		DB::table('retiros')->where('cod',$id)->delete();

		return 1;
	}

	/*******************************************
	*  Ação que lista todos os retiros
	********************************************/
	public function getListar()
	{
		if(Input::has("cod_fazenda"))
		$cod_fazenda = Input::get("cod_fazenda");

		$retiros = DB::table("retiros")
		->join("fazendas","retiros.cod_fazenda","=","fazendas.cod")
		->where("fazendas.cod_criador",Session::get("cod_criador"))
		->where(function($query)use($cod_fazenda){

			if(isset($cod_fazenda))
			{
				$query->where("retiros.cod_fazenda","=",$cod_fazenda);
			}

		})
		->select("retiros.cod as cod_retiro","fazendas.cod as cod_fazenda",
			"fazendas.nome as fazenda","retiros.nome as retiro")
		->orderBy('retiros.nome',"asc")
		->get();

		return json_encode($retiros);
	}
}