<?php 
/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Fazenda
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 24/02/2016
*	
*/
class FazendaModel extends Eloquent{

	protected $table = 'fazendas';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');
}