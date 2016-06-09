<?php 

/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Retiros
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 03/03/2016
*	
*/
class RetiroModel extends Eloquent{


	protected $table = 'retiros';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');
}