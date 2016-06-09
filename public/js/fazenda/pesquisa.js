$(document).ready(function() {

	var actions_buttons ='<a class="view"><i class="fa fa-eye" data-toggle="tooltip" data-placement="left" title="'+pt_br.tooltip_ver+'"></i></a> ';
		actions_buttons += '<a data-toggle="modal" data-target="#edit" class="editar"><i class="fa fa-edit" data-toggle="tooltip" data-placement="left" title="'+pt_br.tooltip_editar+'"></i></a> ';
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
				"url":pt_br.absolute_url+"/panel-control/fazenda/pesquisa",
				"type":"POST",
				"data":function(d){
				d.valor_buscado = $("#valor_buscado").val();
				d.filtro = $("#filtro").val();
			},
			},
			// Colunas propriedades
			"columns": [
				{ "name": "cod","width":"7%" },
			    { "name": "nome" },
			    { "name": "cidade" },
			    {
			    	"data":null,
			    	"orderable":false,
			    	"defaultContent":actions_buttons
			    }
			  ]
	});


$('#valor_buscado').on("keyup",function(e) {
    
    	dataTable.draw();
});
 // Array de ids das linhas que irão mostrar os detalhes
    var detailRows = [];
 
    $('#tabela_dados tbody').off("click",".view").on( 'click', '.view', function () {

        var tr = $(this).closest('tr');
        var row = dataTable.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 		var fonticon = $(this).children('i');
 		
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            tr.removeClass('text-primary');
            fonticon.removeClass('fa fa-eye-slash');
           	fonticon.addClass('fa fa-eye');
            row.child.hide(200);
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            tr.addClass('text-primary');
            fonticon.removeClass('fa fa-eye');
            fonticon.addClass('fa fa-eye-slash');
            
           var codigo = parseInt(tr.children("td:eq(0)").text(),10);

            $.ajax({

		    type: "GET",
		    url : pt_br.absolute_url+"/panel-control/fazenda/editar",
		    data : {codigo:codigo},
		    dataType: 'json'
		    }).done(function(res){
		    	row.child(format(res[0])).show(200);
 
	            // Add to the 'open' array
	            if ( idx === -1 ) {
	                detailRows.push( tr.attr('id') );
	            }

		    });
            
        }
    });
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dataTable.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );
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

/*------------------------------------------------------------------------
|	Carrega informações via ajax para edição
|------------------------------------------------------------------------*/
$(document).off("click",".editar").on("click",".editar",function(){

	
	var codigo = parseInt($(this).parents("tr").children("td:eq(0)").text(),10);

	$.ajax({

    type: "GET",
    url : pt_br.absolute_url+"/panel-control/fazenda/editar",
    data : {codigo:codigo},
    dataType: 'json'
    }).done(function(res){
    	$("#titulo_modal").html("<b style='color:#d15e5e;'>"+res[0].nome.toUpperCase()+"</b>");
    	$("#edit_cod").val(codigo);
    	$("input[name=nome]").val(res[0].nome);
    	$("input[name=endereco]").val(res[0].endereco);
    	$("input[name=bairro]").val(res[0].bairro);
    	$("input[name=cep]").val(res[0].cep);
    	$("input[name=cidade]").val(res[0].cidade);
    	$("input[name=telefone1]").val(res[0].telefone1);
    	$("input[name=telefone2]").val(res[0].telefone2);
    	$("input[name=inscricao_estadual]").val(res[0].inscricao_estadual);
    	$("input[name=area]").val(res[0].area);
    	
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
	

		var dados = new FormData(document.querySelector("#edicao"));

		$.ajax({
			type: "POST",
	        contentType: false,
	        url : pt_br.absolute_url+"/panel-control/fazenda/editar",
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
	    url: pt_br.absolute_url+"/panel-control/fazenda/deletar",
	    data: {id:id}
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
    	else if(parseInt(res,10) == 0)
    	{
    		alertErro(pt_br.msg_erro_relacao_funcionario);
    	}

    });

});

});

// Função que formata os dados para mostrar no detalhes da tabela
function format(f){

	string = '';
	string += "<b>"+pt_br.format_field_endereco+"</b>"+' '+((f.endereco == null) ? '':f.endereco)+'<br>';
    string += "<b>"+pt_br.format_field_bairro+"</b>"+' '+((f.bairro == null) ? '':f.bairro)+'<br>';
    string += "<b>"+pt_br.format_field_cep+"</b>"+' '+((f.cep == null) ? '':f.cep)+'<br>';
    string += "<b>"+pt_br.format_field_telefones+"</b>"+' '+((f.telefone1 == null) ? '':f.telefone1)+((f.telefone2 == null) ? '':f.telefone2)+'<br>';
    string += "<b>"+pt_br.format_field_ie+"</b>"+' '+((f.inscricao_estadual == null) ? '':f.inscricao_estadual)+'<br>';
    string += "<b>"+pt_br.format_field_area+"</b>"+' '+((f.area == null) ? '':f.area)+'<br>';
    
    return string;

}

