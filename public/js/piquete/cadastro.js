$(document).ready(function() {

/*Carrega os retiros e fazendas na tabela do modal*/
loadViewTable();


$('#cadastro').bootstrapValidator({
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

$("#cod_pastagem").select2Pastagens();
var s2p = $("#cod_pastagem").select2();

$("#salvar").on('click', function(event) {
	
	/* valida o formulario para: Campos vazios ou senhas diferentes*/
	if($("#cadastro .required").validation())
	{
		alertErro(pt_br.campos_vazios);
		return false;
	}
	if(s2p.val() == "" || $("#cod_retiro").val() == "")
	{
		alertErro(pt_br.campos_vazios);
		return false;
	}
	
	var dados = new FormData(document.querySelector("#cadastro"));

	$.ajax({
		type: "POST",
        contentType: false,
        url : pt_br.absolute_url+"/panel-control/piquete/cadastro",
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
	    	alertSucesso(pt_br.msg_cadastro_sucesso);
	    	clearFormulario();
    	}
    	else if(parseInt(res,10) == 0)
    	{
    		alertErro(pt_br.msg_erro);
    	}

    });
});
/*------------------------------------------------------------------------
|	Seleciona o retiro na tabela
|------------------------------------------------------------------------*/
$(document).off("click","#tabela_visao tr").on("click","#tabela_visao tr",function(){
	
	$("#tabela_visao tr").each(function(){
		if($(this).hasClass('text-primary'))
		{
			$(this).removeClass('text-primary');

		}
	});

	$(this).addClass('text-primary');
	$(this).find("input[type=radio]").prop("checked",true);
	$("#cod_retiro").val($(this).find("input[type=radio]").val());
	$("#input_retiro").val($(this).children('td:eq(1)').text());

});



$("#cancelar").on("click",function(){
	clearFormulario();
});

function clearFormulario()
{
	$("#cadastro input").each(function(){
		$(this).val("");
	});
	s2p.select2("val","");
	
}

/*------------------------------------------------------------------------
|	Carrega os retiros e fazendas na tabela do modal
|------------------------------------------------------------------------*/
function loadViewTable() {
	
	$.ajax({
		type: "GET",
        url : pt_br.absolute_url+"/panel-control/retiro/listar",
        dataType: 'json'
    }).done(function(json){
    	
    	$.each(json,function(i,item){
    		linha = "<tr>";
    		linha +="<td><input type='radio' name='cod_retiro' value="+item.cod_retiro+"></td>";
    		linha += "<td>"+item.retiro+"</td>";
    		linha += "<td>"+item.fazenda+"</td>";
    		linha += "</tr>";

    		$("#tabela_visao").append(linha);
    	});

    });	
}

});

