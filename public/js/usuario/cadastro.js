$(document).ready(function() {

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
		},
		login: {
			validators: {
				notEmpty: {
					message: pt_br.msg_erro_login
				},
				stringLength: {
					max: 15,
					message: pt_br.msg_erro_login_maximo_caractere
				}
			}
		},
		senha: {
			validators: {
				notEmpty: {
					message: pt_br.msg_erro_senha
				},
				identical: {
					field: 'confirmacao',
					message: ""
				}
			}
		},
		confirmacao: {
			validators: {
				notEmpty: {
					message: pt_br.msg_erro_confirmacao
				},
				identical: {
					field: 'senha',
					message: pt_br.msg_erro_confirmacao_diferente
				}
			}
		}
	}
});


$("#mostrar_senha").on('click', function(event) {

	if($(this).is(":checked"))
	{
		$("input[name=senha]").attr("type","text");
		$("input[name=confirmacao]").attr("type","text");
	}
	else
	{
		$("input[name=senha]").attr("type","password");
		$("input[name=confirmacao]").attr("type","password");
	}
});

$("#salvar").on('click', function(event) {
	
	/* valida o formulario para: Campos vazios ou senhas diferentes*/
	if($("#cadastro .required").validation())
	{
		alertErro(pt_br.campos_vazios);
		return false;
	}
	
	if($("input[name=senha]").val() != $("input[name=confirmacao]").val())
	{
		alertErro(pt_br.msg_erro_confirmacao_diferente);
		return false;
	}
	var dados = new FormData(document.querySelector("#cadastro"));

	$.ajax({
		type: "POST",
        contentType: false,
        url : pt_br.absolute_url+"/panel-control/usuario/cadastro",
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

/* ------------------------------------------------------------------ 
|	Função para carregar a Imagem
------------------------------------------------------------------*/
function readURL(input,img) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            img.attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".imagem").on("change",function(){
	img = $(this).parents("div").find("img");
	array = $(this).val().split("\\");
	alt = array[array.length-1];
	img.attr("alt",alt);
    readURL(this,img);
});
function clearFormulario()
{
	$("#cadastro input").each(function(){
		$(this).val("");
	});
	$("#fusuario").attr("src","").attr("alt","");
}

});

