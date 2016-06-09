<?php 
/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Usuarios
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 24/02/2016
*       
*/
 class UsuarioController extends BaseController{


 	public function getIndex()
	{
		Session::put('flag',3);
		return View::make('usuario.usuario');
	}

	/*******************************************
	*  Ação que retorna a View de Cadastro para 
	*  Tab.
	********************************************/
	public function getCadastro()
	{
		return View::make('usuario.cadastro');
	}

	/*******************************************
	*  Ação para Cadastro de Usuarios do Sistema
	********************************************/
	public function postCadastro()
	{
		$dados = Input::all();
		$file = Input::file('foto');
		unset($dados["foto"]);
		
		if($file != null)
		{
			// salva a foto
			$extension = $file->getClientOriginalExtension();

			$path = "../app/uploads/usuarios/";
			
			if(!is_dir($path))
			{
				
				if(!mkdir($path,0777,true)) return 0;
			}
			$filename = date('Y-m-d-H-i-s').".".$extension;
			$nome_foto = $path.$filename;
			$file->move($path,$filename);
		}

		if(isset($nome_foto))
			$dados["foto_url"] = "../".$nome_foto;
		unset($dados["confirmacao"]);
		
		$dados["senha"] = sha1($dados["senha"]);
		$dados["cod_criador"] = Session::get('cod_criador');

		$funcionario = new FuncionariosModel($dados);
		$status = $funcionario->save();

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
		return View::make('usuario.pesquisa');
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

		$count = DB::table("funcionarios")
		->where("cod_criador",Session::get('cod_criador'))
		->get();

		$recordsTotal = count($count);

		if($limit == -1)
			$limit = $recordsTotal;
		
		$filtred = DB::table("funcionarios")
		->where(function($query)use($dados){
			if($dados["filtro"] != "funcionarios.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where("cod_criador",Session::get('cod_criador'))
		->select("funcionarios.cod","funcionarios.nome as funcionario","funcionarios.nivel",
			"funcionarios.login")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->get();
		
		$recordsFiltered = count($filtred);
		
		$funcionarios = DB::table("funcionarios")
		->where(function($query)use($dados){
			if($dados["filtro"] != "funcionarios.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where("cod_criador",Session::get('cod_criador'))
		->select("funcionarios.cod","funcionarios.nome as funcionario","funcionarios.nivel",
			"funcionarios.login")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->take($limit)
		->skip($start)
		->get();

		$json = [];
		$json["draw"] = intval($dados["draw"]);
		$json["recordsTotal"] = $recordsTotal;
		$json["recordsFiltered"] = $recordsFiltered;
		$json["aaData"] = array();

		foreach ($funcionarios as $key => $value) {
			$value = (array)$value;

			if($value["nivel"] == 1)
				$value["nivel"] = Lang::get('geral.nivel_admin');
			else if($value["nivel"] == 2)
				$value["nivel"] = Lang::get('geral.nivel_empregado');
			

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

		$funcionario = DB::table("rel_funcionario_fazenda")
		->join("funcionarios","funcionarios.cod","=","rel_funcionario_fazenda.cod_funcionario")
		->select("funcionarios.cod","funcionarios.email","funcionarios.cargo",
			"funcionarios.nome","funcionarios.login","rel_funcionario_fazenda.cod_fazenda"
			,"funcionarios.nivel","funcionarios.foto_url")
		->where("funcionarios.cod",$codigo)
		->get();

		return json_encode($funcionario);
	}

	/*******************************************
	*  Ação que faz a edição dos dados
	********************************************/
	public function postEditar()
	{
		
		$dados = Input::all();
		$file = Input::file("foto");
		unset($dados["_token"]);
		$codigo = $dados["cod"];
		unset($dados["cod"]);
		if(isset($dados["senha"]))
			$dados["senha"] = sha1($dados["senha"]);
		unset($dados["foto"]);
		$antiga_foto = $dados["antiga_foto"];
		unset($dados["antiga_foto"]);
		if($file != null)
		{
			if($antiga_foto != null && file_exists(app_path()."/".substr($antiga_foto, 9)))
				unlink(app_path()."/".substr($antiga_foto, 9));

			// salva a foto da bebida
			$extension = $file->getClientOriginalExtension();

			$path = "../app/uploads/usuarios/";
			
			if(!is_dir($path))
			{
				
				if(!mkdir($path,0777,true)) return 0;
			}
			$filename = date('Y-m-d-H-i-s').".".$extension;
			$nome_foto = $path.$filename;
			$file->move($path,$filename);
		}
		
		if(isset($nome_foto))
			$dados["foto_url"] = "../".$nome_foto;

		

		$result = DB::table('funcionarios')
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
		if($id == Session::get('cod_user'))
			return 2;
		
		$exist = DB::table("rel_funcionario_fazenda")
		->where("cod_funcionario",$id)
		->get();
		if(count($exist) > 0)
		{
			return 0;
		}

		DB::table('funcionarios')->where('cod',$id)->delete();

		return 1;
	}

	/*******************************************
	*  Ação que faz a controle de relacionamento
	*  entre funcionario e fazenda
	********************************************/
	public function getControle()
	{
		return View::make('usuario.controle');
	}

	/*******************************************
	*  Ação que faz a controle de relacionamento
	*  entre funcionario e fazenda
	********************************************/
	public function postControle()
	{
		$cod_funcionario = Input::get("cod_funcionario");

		$cod_fazenda = Input::get("cod_fazenda");

		$exist = DB::table("rel_funcionario_fazenda")
		->where("cod_funcionario",$cod_funcionario)
		->where("cod_fazenda",$cod_fazenda)
		->get();
		if(count($exist) > 0)
			return 2;

		$rel = ['cod_funcionario' => $cod_funcionario, 'cod_fazenda' => $cod_fazenda];

		$status = RelFazendaFuncionarioModel::saveMultipleKeys($rel);

		if($status)
			return 1;
		else
			return 0;


	}

	/*******************************************
	*  Ação que faz a controle de relacionamento
	*  entre funcionario e fazenda
	********************************************/
	public function postPesquisarelacao()
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

		$count = DB::table("rel_funcionario_fazenda")
		->join("funcionarios","rel_funcionario_fazenda.cod_funcionario","=","funcionarios.cod")
		->join("fazendas","rel_funcionario_fazenda.cod_fazenda","=","fazendas.cod")
		->where("funcionarios.cod_criador",Session::get('cod_criador'))
		->get();

		$recordsTotal = count($count);

		if($limit == -1)
			$limit = $recordsTotal;
		
		$filtred = DB::table("rel_funcionario_fazenda")
		->join("funcionarios","rel_funcionario_fazenda.cod_funcionario","=","funcionarios.cod")
		->join("fazendas","rel_funcionario_fazenda.cod_fazenda","=","fazendas.cod")
		->where(function($query)use($dados){
			if($dados["filtro"] != "funcionarios.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where("funcionarios.cod_criador",Session::get('cod_criador'))
		->select("funcionarios.cod","fazendas.cod as cod_fazenda","funcionarios.nome as funcionario","fazendas.nome as fazenda")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->get();
		
		$recordsFiltered = count($filtred);
		
		$funcionarios = DB::table("rel_funcionario_fazenda")
		->join("funcionarios","rel_funcionario_fazenda.cod_funcionario","=","funcionarios.cod")
		->join("fazendas","rel_funcionario_fazenda.cod_fazenda","=","fazendas.cod")
		->where(function($query)use($dados){
			if($dados["filtro"] != "funcionarios.cod")
				$query->where($dados["filtro"],"LIKE","%".$dados["valor_buscado"]."%");
			else if($dados["valor_buscado"] != "")
				$query->where($dados["filtro"],$dados["valor_buscado"]);
				
		})
		->where("funcionarios.cod_criador",Session::get('cod_criador'))
		->select("funcionarios.cod","fazendas.cod as cod_fazenda","funcionarios.nome as funcionario","fazendas.nome as fazenda")
		->orderBy($columns[$orderIndex]["name"],$order["dir"])
		->take($limit)
		->skip($start)
		->get();

		$json = [];
		$json["draw"] = intval($dados["draw"]);
		$json["recordsTotal"] = $recordsTotal;
		$json["recordsFiltered"] = $recordsFiltered;
		$json["aaData"] = array();

		foreach ($funcionarios as $key => $value) {
			$value = (array)$value;

			array_push($json["aaData"], array_values($value));
		}
		return json_encode($json);
	}

	/*******************************************
	*  Ação que faz a exclusão dos dados
	********************************************/
	public function getDeletarelacao()
	{
		$id = Input::get("id");
		$cod_fazenda = Input::get("cod_fazenda");
		
		return DB::table('rel_funcionario_fazenda')
		->where('cod_funcionario',$id)
		->where('cod_fazenda',$cod_fazenda)
		->delete();
		
	}


	public function getListar()
	{
		$usuarios = $funcionario = FuncionariosModel::
		where("cod_criador",Session::get("cod_criador"))
		->orderBy("nome","asc")
		->get();

		return json_encode($usuarios);
		
	}
	public function getListarporfazenda()
	{
		$cod_fazenda = Input::get("cod_fazenda");

		$usuarios = $funcionario = DB::table("rel_funcionario_fazenda")
		->join("funcionarios","funcionarios.cod","=","rel_funcionario_fazenda.cod_funcionario")
		->where("rel_funcionario_fazenda.cod_fazenda",$cod_fazenda)
		->orderBy("funcionarios.nome","asc")
		->get();

		return json_encode($usuarios);
		
	}

 }