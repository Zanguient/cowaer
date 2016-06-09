<?php 
/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Animal
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 27/03/2016
*	
*/
class AnimalModel extends Eloquent{

	protected $table = 'animais';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');

}