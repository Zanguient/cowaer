<?php 
/**
*	TECHMOB - Empresa Júnior da Faculdade de Computação - UFU 
*	
*	Modelo Relacao Funcionario X Fazenda
*
*	@author: Jean Fabrício <jeanufu21@gmail.com>
*	@since 26/02/2016
*	
*/
class RelFazendaFuncionarioModel extends Eloquent{

	protected $table = 'rel_funcionario_fazenda';
	public  $timestamps = false;
	protected $primaryKey = array('cod_funcionario','cod_fazenda');
	

	public static function saveMultipleKeys($nota = array())
	{
		 return DB::table('rel_funcionario_fazenda')->insert($nota);
	}
}