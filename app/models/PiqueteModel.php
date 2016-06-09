<?php 
/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Piquete
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 20/03/2016
*	
*/
class PiqueteModel extends Eloquent{

	protected $table = 'piquetes';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');
}