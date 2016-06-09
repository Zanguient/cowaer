$(document).ready(function() {

	
	
	var	actions_buttons = '<a href="#remover" class="rem"><i class="fa fa-trash" data-toggle="tooltip" data-placement="left" title="'+pt_br.tooltip_deletar+'"></i></a>';		    					 

	var dataTable = $('#tabela_control').DataTable( {
			"lengthMenu": [[10,25,50, -1], [10,25,50, "Todos"]],// modifica qtd de resultados por pagina
			"aaSorting": [[ 0, "asc" ]],// indice da coluna para a ordenação no init da DataTable
			"scrollX": true,
			"sDom":'<"top"l>rt<"bottom"ip><"clear">',
			"oLanguage": {
				"sSearch": pt_br.sSearch,
				"sLengthMenu": '_MENU_',
				"sZeroRecords": pt_br.sZeroRecords,
				"sInfo": pt_br.sInfo,
				"sInfoEmpty":pt_br.sInfoEmpty,
				"sInfoFiltered":pt_br.sInfoFiltered,
				"sProcessing":pt_br.sProcessing

			},
			"bProcessing": true,// mostra o icone de processando...
			"bServerSide": true,// faz com que o processamento seja do lado do servidor
			// Ajax propriedades
			"ajax":{
				"url":pt_br.absolute_url+"/panel-control/usuario/pesquisarelacao",
				"type":"POST",
				"data":function(d){
				d.valor_buscado = $("#valor_buscado").val();
				d.filtro = $("#filtro").val();
			},
			},
			// Colunas propriedades
			"columns": [
				{ "name": "cod","width":"7%" },
				{ "name": "cod_fazenda","width":"12%" },
			    { "name": "funcionario", },
			    { "name": "fazenda", },
			    {
			    	"data":null,
			    	"orderable":      false,
			    	"defaultContent":actions_buttons
			    }
			  ],

			  "columnDefs": [ {
			      "targets": 1,  		/* Oculta a coluna do codigo da fazenda*/
			      "visible": false
			  }],
			  "createdRow": function ( row, data, index ) {
                $(row).attr("cod_fazenda",data[1]);		/* adiciona os atributos a linha*/
                $(row).attr("cod_funcionario",data[0]);     
              }
	});


$('#valor_buscado').on("keyup",function(e) {
    
    	dataTable.draw();
});

$("#slfz").select2Fazenda();
var s2f = $("#slfz").select2();
$("#slf").select2Usuarios();
var s2fu = $("#slf").select2();

/*------------------------------------------------------------------------
|	FUNÇÃO DE CADASTRO DE FUNCIONARIOS PARA UMA FAZENDA
|------------------------------------------------------------------------*/

$("#ct_salvar").off("click").on("click",function(){


	$.ajax({
		type: "POST",
	    url: pt_br.absolute_url+"/panel-control/usuario/controle",
	    data: {cod_funcionario:s2fu.val(),cod_fazenda:s2f.val()}
    }).done(function(res){
    	
    	if(parseInt(res,10) == 1)
    	{
    		dataTable.draw();
    		alertSucesso(pt_br.msg_cadastro_sucesso);
    	}
    	else if(parseInt(res,10) == 2)
    	{
    		alertErro(pt_br.msg_erro_existe);
    	}
    	else if(parseInt(res,10) == 0)
    	{
    		alertErro(pt_br.msg_erro);
    	}

    });

});

/*------------------------------------------------------------------------
|	FUNÇÃO DE CONFIRMAÇÃO DE EXCLUSÃO
|------------------------------------------------------------------------*/

$(document).off("click",".rem").on("click",".rem",function(){

	if(!confirm(pt_br.cofirmacao_deletar))
		return false;

	var cod_fazenda = parseInt($(this).parents("tr").attr("cod_fazenda"),10);
	var id = parseInt($(this).parents("tr").attr("cod_funcionario"),10);
	
	$.ajax({
		type: "GET",
	    url: pt_br.absolute_url+"/panel-control/usuario/deletarelacao",
	    data: {id:id,cod_fazenda:cod_fazenda}
    }).done(function(res){
    	if(parseInt(res,10) == 1)
    	{
    		dataTable.draw();
    		alertSucesso(pt_br.msg_exclusao_sucesso);
    	}
    	else if(parseInt(res,10) == 2)
    	{
    		alertErro(pt_br.msg_erro_autodelete);
    	}

    });

});

});


