<?php 

/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Funcionarios
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 24/02/2016
*	
*/
class FuncionariosModel extends Eloquent
{
	protected $table = 'funcionarios';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');
}