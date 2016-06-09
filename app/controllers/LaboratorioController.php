<?php 

/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Laboratorio
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 26/03/2016
*       
*/
class LaboratorioController extends BaseController{


	public function getListar()
	{
		$labs = LaboratorioModel::
		orderBy("nome","asc")
		->get();

		return json_encode($labs);
	}
}