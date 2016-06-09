<?php 
/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Raças
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 26/03/2016
*       
*/
class RacaController extends BaseController{

	public function getListar()
	{
		$racas = RacaModel::
		orderBy("nome","asc")
		->get();

		return json_encode($racas);
	}
}