<?php 
/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Pelagem
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 26/03/2016
*	
*/
class PelagemModel extends Eloquent{

	protected $table = 'pelagens';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');


}