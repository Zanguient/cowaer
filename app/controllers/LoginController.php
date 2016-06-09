<?php 

/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Controlador Login
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 12/02/2016
*	
*/
class LoginController extends BaseController
{

	/*
	* Index do sistema com tela de login
	* Tipo: GET
	*/
	public function index()
	{
		return View::make('login.login');
	}

	/*
	* Autenticador do usuario
	* Lê login e senha do formulário
	* Tipo: POST
	*/
	public function autenticar()
	{
		$dados = Input::all();
		

		$join = DB::table("rel_funcionario_fazenda")
		->join("funcionarios","rel_funcionario_fazenda.cod_funcionario","=","funcionarios.cod")
		->join("fazendas","fazendas.cod","=","rel_funcionario_fazenda.cod_fazenda")
		->where('funcionarios.login',$dados['login'])
		->where('funcionarios.senha',sha1($dados['senha']))
		->select("funcionarios.cod","fazendas.cod_criador",
			"funcionarios.nome","funcionarios.foto_url","funcionarios.nivel")
		->get();
		
		if(count($join) > 0)
		{
			$funcionario = $join[0];
			Session::put('cod_criador',$funcionario->cod_criador);
			Session::put('cod_user',$funcionario->cod);
			$explode = explode(" ",$funcionario->nome);
			$nome = $explode[0];
			if(count($explode) > 1)
				$nome .= " ".$explode[1];

			Session::put('nome_user',$nome);
			Session::put('nivel_user',$funcionario->nivel);
			Session::put('foto_url',$funcionario->foto_url);
			
			return Redirect::to('panel-control/dashboard');
		}
		else
		{
			$msg = "2#".Lang::get("geral.msg_error_login");
			Session::flash("msg",$msg);
			return Redirect::back();
		}		
	}


}