<?php 
/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Raça
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 26/03/2016
*	
*/
class RacaModel extends Eloquent{

	protected $table = 'racas';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');

}