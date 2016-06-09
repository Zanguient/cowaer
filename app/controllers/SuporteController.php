<?php 

/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador da Area de Suporte
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 12/02/2016
*       
*/
class SuporteController extends BaseController{

	public function getIndex()
	{
		
		return View::make("suporte.suporte");
	}

}