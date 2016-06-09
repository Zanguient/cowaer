<?php 
/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Pelagem
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 26/03/2016
*       
*/
class PelagemController extends BaseController{


	public function getListar()
	{
		$pelagens = PelagemModel::
		orderBy("tipo","asc")
		->get();

		return json_encode($pelagens);
	}
}