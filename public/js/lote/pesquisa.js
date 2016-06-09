$(document).ready(function() {

	
	
	var	actions_buttons = '<a data-toggle="modal" data-target="#edit" class="editar"><i class="fa fa-edit" data-toggle="tooltip" data-placement="left" title="'+pt_br.tooltip_editar+'"></i></a> ';
		actions_buttons += '<a href="#deletar" class="del"><i class="fa fa-trash" data-toggle="tooltip" data-placement="left" title="'+pt_br.tooltip_deletar+'"></i></a>';		    					 

	var dataTable = $('#tabela_dados').DataTable( {
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
				"url":pt_br.absolute_url+"/panel-control/lote/pesquisa",
				"type":"POST",
				"data":function(d){
				d.valor_buscado = $("#valor_buscado").val();
				d.filtro = $("#filtro").val();
			},
			},
			// Colunas propriedades
			"columns": [
				{ "name": "cod","width":"7%" },
			    { "name": "lote"},
			    { "name": "piquete"},
			    { "name": "retiro"},
			    { "name": "fazenda" },
			    {
			    	"data":null,
			    	"orderable":      false,
			    	"defaultContent":actions_buttons
			    }
			  ]
	});

$('#valor_buscado').on("keyup",function(e) {
    
    	dataTable.draw();
});
/*------------------------------------------------------------------------
|	Validador do formulario de edição
|------------------------------------------------------------------------*/
$('#edicao').bootstrapValidator({
	message: '',
	fields: {
		nome: {
			validators: {
				notEmpty: {
					message: pt_br.msg_erro_nome
				},
				stringLength: {
					min: 6,
					message: pt_br.msg_erro_nome_minimo_caractere
				}
			}
		}
	}
});

$("#ed_cod_piquete").select2Piquetes();
var s2p = $("#ed_cod_piquete").select2({
	minimumResultsForSearch: -1
});


/*------------------------------------------------------------------------
|	Carrega informações via ajax para edição
|------------------------------------------------------------------------*/
$(document).off("click",".editar").on("click",".editar",function(){

	var codigo = parseInt($(this).parents("tr").children("td:eq(0)").text(),10);
	$.ajax({

    type: "GET",
    url : pt_br.absolute_url+"/panel-control/lote/editar",
    data : {codigo:codigo},
    dataType: 'json'
    }).done(function(res){
    	$("#titulo_modal").html("<b style='color:#d15e5e;'>"+res[0].nome.toUpperCase()+"</b>");
    	$("#edit_cod").val(codigo);
    	s2p.select2("val",res[0].cod_piquete);
    	$("input[name=nome]").val(res[0].nome);
    	$("#editar").modal("show");
    });


});

/*------------------------------------------------------------------------
|	Função de salvar edição
|------------------------------------------------------------------------*/
$("#salvar_edicao").off("click").on("click",function(){

	/* valida o formulario para: Campos vazios ou senhas diferentes*/
	if($("#edicao .required").validation())
	{
		alertErro(pt_br.campos_vazios);
		return false;
	}
	if((s2p.val() == null || s2p.val() == ""))
	{
		alertErro(pt_br.campos_vazios);
		return false;	
	}
	
		var dados = new FormData(document.querySelector("#edicao"));

		$.ajax({
			type: "POST",
	        contentType: false,
	        url : pt_br.absolute_url+"/panel-control/lote/editar",
	        enctype: 'multipart/form-data',
	        data : dados,
	        processData:false,
	        beforeSend: function() {
	         $('#ajaxLoading').fadeIn(350);
		    },
		    complete: function() {
		         $('#ajaxLoading').fadeOut(350);
		     }
	    }).done(function(res){
    	
	    	if(parseInt(res,10) == 1)
	    	{
	    		$("#editar").modal("hide");
	    		dataTable.draw();
	    		alertSucesso(pt_br.msg_alteracao_sucesso);
	    	}
	    	else
	    	{
	    		alertErro(pt_br.msg_erro);
	    	}

	    });

});
/*------------------------------------------------------------------------
|	FUNÇÃO DE CONFIRMAÇÃO DE EXCLUSÃO
|------------------------------------------------------------------------*/

$(document).off("click",".del").on("click",".del",function(){

	if(!confirm(pt_br.cofirmacao_deletar))
		return false;

	var id = parseInt($(this).parents("tr").children("td:eq(0)").text(),10);
	$.ajax({
		type: "GET",
	    url: pt_br.absolute_url+"/panel-control/lote/deletar",
	    data: {id:id}
    }).done(function(res){
    	
    	if(parseInt(res,10) == 1)
    	{
    		dataTable.draw();
    		alertSucesso(pt_br.msg_exclusao_sucesso);
    	}
    	else if(parseInt(res,10) == 0)
    	{
    		alertErro(pt_br.msg_erro_relacao_animal);
    	}

    });

});

});



