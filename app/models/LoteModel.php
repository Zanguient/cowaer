<?php 
/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Lotes
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 23/03/2016
*	
*/
class LoteModel extends Eloquent{

	protected $table = 'lotes';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');
	
}