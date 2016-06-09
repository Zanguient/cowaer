<?php 
/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Laboratorios
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 26/03/2016
*	
*/
class LaboratorioModel extends Eloquent{

	protected $table = 'laboratorios';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');
}