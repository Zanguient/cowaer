$(document).ready(function() {

	$("#fechar").hide();

	$("#editar").on("click",function(){
		$("#fechar").show();
		$("#editar").hide();

		$(".info").hide();
		$("input[name=nome]").attr("type","text");
		$("input[name=login]").attr("type","text");
		$("input[name=senha]").attr("type","password");
		$("input[name=confirmacao]").attr("type","password");
		$("#div-1").removeClass('hide');
		$("#div-2").removeClass('hide');
		$("#div-3").removeClass('hide');
	});

	$("#fechar").on("click",function(){
		$("#editar").show();
		$("#fechar").hide();
		$(".info").show();
		$("#perfil input").attr("type","hidden");
		$("#div-1").addClass('hide');
		$("#div-2").addClass('hide');
		$("#div-3").addClass('hide');

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


/*------------------------------------------------------------------------
|	Validador do formulario de edição
|------------------------------------------------------------------------*/
$('#perfil').bootstrapValidator({
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
				identical: {
					field: 'confirmacao',
					message: ""
				}
			}
		},
		confirmacao: {
			validators: {
				identical: {
					field: 'senha',
					message: pt_br.msg_erro_confirmacao_diferente
				}
			}
		}
	}
});



WinMove();
/*------------------------------------------------------------------------
|	A função abaixo verifica a cada vez que o 
|	documento HTML e carregado se foi enviado
|	uma mensagem do servidor de erro ou de
|	alguma operação feita
|------------------------------------------------------------------------*/
		setTimeout(function(){
			alerta();
		},1000);

});