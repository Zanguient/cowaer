<?php 

/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Pastagens
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 19/03/2016
*	
*/
class PastagemModel extends Eloquent{

	protected $table = 'pastagens';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');
}