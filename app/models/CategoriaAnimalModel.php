<?php 

/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Categoria Animal
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 26/03/2016
*	
*/
class CategoriaAnimalModel extends Eloquent{

	protected $table = 'categoria_animal';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');
}