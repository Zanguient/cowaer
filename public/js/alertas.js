
/**************************************************************************
*
*	AlertSucesso cria uma alerta de sucesso para o usuario
* @param MSG A mensagem a ser exibida
*
***************************************************************************/
function alertSucesso(msg)
{
	$("div[role=alert]").remove();
	var alert = "<div class='alert alert-success hide' role='alert'>"+
    			"<span class='sr-only'>Error:</span>"+
				"</div>";
	$("body").prepend(alert);
	$("div[role=alert] p").remove();
	$("div[role=alert]").hide().removeClass("hide");
	$("div[role=alert]").fadeIn("slow")
	.delay(1500).fadeOut("slow");
	if(msg != null)
	{
		var p = "<p class='text-center'>"+msg+"</p>";
		$("div[role=alert]").append(p);
	}
}

/**************************************************************************
*
*	AlertError cria uma alerta de erro para o usuario
* @param MSG A mensagem a ser exibida
*
***************************************************************************/
function alertErro(msg)
{
	$("div[role=alert]").remove();
	var alert = "<div class='alert alert-danger hide' role='alert'>"+
				"<span class='sr-only'>Error:</span>"+
				"</div>";
	$("body").prepend(alert);
	$("div[role=alert] p").remove();
	$("div[role=alert]").hide().removeClass("hide");
	$("div[role=alert]").fadeIn("slow")
	.delay(1500).fadeOut("slow");
	if(msg != null)
	{
		var p = "<p class='text-center'>"+msg+"</p>";
		$("div[role=alert]").append(p);
	}
}
/**************************************************************************
*
*	AlertInfo cria uma alerta de informação para o usuario
* @param MSG A mensagem a ser exibida
*
***************************************************************************/

function alertInfo(msg)
{
	$("div[role=alert]").remove();
	var alert = "<div class='alert alert-info hide' role='alert'>"+
    			"<span class='sr-only'>Error:</span>"+
				"</div>";
	$("body").prepend(alert);
	$("div[role=alert] p").remove();
	$("div[role=alert]").hide().removeClass("hide");
	$("div[role=alert]").fadeIn("slow")
	.delay(1500).fadeOut("slow");
	if(msg != null)
	{
		var p = "<p class='text-center'>"+msg+"</p>";
		$("div[role=alert]").append(p);
	}
}
/**************************************************************************
*
*	AlertWarning cria uma alerta de atenção para o usuario
* @param MSG A mensagem a ser exibida
*
***************************************************************************/
function alertWarning(msg)
{
	$("div[role=alert]").remove();
	var alert = "<div class='alert alert-warning hide' role='alert'>"+
    			"<span class='sr-only'>Error:</span>"+
				"</div>";
	$("body").prepend(alert);
	$("div[role=alert] p").remove();
	$("div[role=alert]").hide().removeClass("hide");
	$("div[role=alert]").fadeIn("slow")
	.delay(1500).fadeOut("slow");
	if(msg != null)
	{
		var p = "<p class='text-center'>"+msg+"</p>";
		$("div[role=alert]").append(p);
	}
}

/*
*	Função alerta constroi o alerta de acordo
*	com o tipo de mensagem retornado pelo php
*	por isso é importante ao chamar a view
*	e passar a mensagem informar o tipo da 
*	mensagem na propria string como exemplo:
*
*		1# Sucesso no Cadastro
*		2# Erro no Cadastro
*		3# Info: Pode entrar Agora
*		4# Atenção dados incosistentes
**/
function alerta()
{
	if($("#msg").length > 0)
	{
		str = $("#msg").attr('message');
		var tipo = str.split("#")[0];
		var msg = str.split("#")[1];
		if(tipo == 1)
		{
			alertSucesso(msg);
			
		}
		else if(tipo == 2)
		{
			alertErro(msg);
			
		}
		else if(tipo == 3)
		{
			alertWarning(msg);
			
		}
		else if(tipo == 4)
		{
			alertInfo(msg);
			
		}
		
	}

}






