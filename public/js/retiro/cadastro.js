$(document).ready(function() {
/*------------------------------------------------------------------------
|	Valida o formulario de cadastro
|------------------------------------------------------------------------*/
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

/*------------------------------------------------------------------------
|	Plugin Select2 para carregar e preencher os dados
|------------------------------------------------------------------------*/
$("#cod_fazenda").select2Fazenda();
var s2f = $("#cod_fazenda").select2();
var s2fu = $("#cod_funcionario");

s2f.on("change",function(e){
	valor = $(this).val();
	s2fu.empty();
	$("#cod_funcionario").select2UsuariosPorFazenda(valor);

});

/*------------------------------------------------------------------------
|	Função salvar um novo registro 
|------------------------------------------------------------------------*/
$("#salvar").on('click', function(event) {
	
	/* valida o formulario para: Campos vazios ou senhas diferentes*/
	if($("#cadastro .required").validation())
	{
		alertErro(pt_br.campos_vazios);
		return false;
	}
	if(s2f.val() == "")
	{
		alertErro(pt_br.campos_vazios);
		return false;
	}
	
	var dados = new FormData(document.querySelector("#cadastro"));

	$.ajax({
		type: "POST",
        contentType: false,
        url : pt_br.absolute_url+"/panel-control/retiro/cadastro",
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

$("#cancelar").on("click",function(){
	clearFormulario();
});

function clearFormulario()
{
	$("#cadastro input").each(function(){
		$(this).val("");
	});
	s2f.val("");
	s2fu.val("");
}

});

