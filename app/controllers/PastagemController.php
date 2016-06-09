<?php 

/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Pastagens
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 19/03/2016
*       
*/
class PastagemController extends BaseController{

	/*******************************************
	*  Recupera todas as Pastagens
	********************************************/
	public function getListar()
	{
		$pastagens = PastagemModel::get();

		return json_encode($pastagens);	
	}



}