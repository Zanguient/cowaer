<?php 
/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Animal
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 26/03/2016
*       
*/
class AnimalController extends BaseController{


 	public function getIndex()
	{
		Session::put('flag',7);
		return View::make('animal.animal');
	}

	/*******************************************
	*  Ação que retorna a View de Cadastro para 
	*  Tab.
	********************************************/
	public function getCadastro()
	{
		return View::make('animal.cadastro');
	}

	/*******************************************
	*  Ação para Cadastro de Retiros do Sistema
	********************************************/
	public function postCadastro()
	{
		$dados = Input::all();
		$dados["cod_cat_atual"] = $dados["cod_cat_inicial"];
		$file = Input::file('exame_path');
		unset($dados["exame_path"]);
		
		if($file != null)
		{
			// salva a foto
			$extension = $file->getClientOriginalExtension();

			$path = "../app/uploads/exames/".Session::get("cod_criador")."/";
			
			if(!is_dir($path))
			{
				
				if(!mkdir($path,0777,true)) return 0;
			}
			$filename = date('Y-m-d-H-i-s').".".$extension;
			$nome_foto = $path.$filename;
			$file->move($path,$filename);
		}

		if(isset($nome_foto))
			$dados["exame_path"] = "../".$nome_foto;

		$animal = new AnimalModel($dados);
		$status = $animal->save();

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
		return View::make('animal.pesquisa');
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

		$res = DB::table("animais_join")
		->where("cod_criador",Session::get("cod_criador"))
		->get();

		$recordsTotal = count($res);

		if($limit == -1)
			$limit = $recordsTotal;
		
		$filtred = DB::table("animais_join")
		->leftJoin("animais","animais_join.cod_receptora","=","animais.cod")
		->where(function($query)use($dados){
			$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
				
		})
		->where("cod_criador",Session::get("cod_criador"))
		->select("cod_animal","animal","animais_join.rgn","animais_join.rgn_definitivo","animais_join.cdc_origem","animais_join.cdn_origem"
			,"animais.nome as receptora","categoria_atual","raca")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->get();
		
		$recordsFiltered = count($filtred);
		
		$animais = DB::table("animais_join")
		->leftJoin("animais","animais_join.cod_receptora","=","animais.cod")
		->where(function($query)use($dados){
			
			$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
				
		})
		->where("cod_criador",Session::get("cod_criador"))
		->select("cod_animal","animal","animais_join.rgn","animais_join.rgn_definitivo","animais_join.cdc_origem","animais_join.cdn_origem"
			,"animais.nome as receptora","categoria_atual","raca")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->take($limit)
		->skip($start)
		->get();
		
		$json = [];
		$json["draw"] = intval($dados["draw"]);
		$json["recordsTotal"] = $recordsTotal;
		$json["recordsFiltered"] = $recordsFiltered;
		$json["aaData"] = array();

		foreach ($animais as $key => $value) {
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
	*  Ação que lista todos os animais disponiveis
	********************************************/
	public function getListar()
	{
		$dados = Input::all();
		
		$animais = DB::table("animais_join")
		->where(function($query)use($dados){
			if($dados != null)
			{
				if($dados["filtro"] != "retiros.cod")
					$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
				else if($dados["valor_buscado"] != "")
					$query->where($dados["filtro"],$dados["valor_buscado"]);	
			}
		})
		->where("cod_criador",Session::get("cod_criador"))
		->get();

		return json_encode($animais);
	}


}