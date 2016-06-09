<?php 
/**
*       TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*       
*       Controlador de Categoria Animal
*
*       @author: Jean Fabrício <jeanufu21@gmail.com>
*       @since 26/03/2016
*       
*/
class CategoriaAnimalController extends BaseController{


	public function getListar()
	{
		$categorias = CategoriaAnimalModel::
		orderBy("nome","asc")
		->get();

		return json_encode($categorias);
	}


}