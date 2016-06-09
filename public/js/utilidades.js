/**************************************************************************
*
*	Validation faz uma validação de todos os seletores equivalentes ao seletor 
* 	passado no parametro.

* @param seletor O seletor a ser percorrido para fazer a validação
* @return true se existe pelo menos um campo vazio
*		  false se todos os campos estão preenchidos
*
***************************************************************************/
$.fn.extend({
 validation: function()
{	
	var erro = false;
	// variavel de codição do erro
	 $(this).each(function(){

			if($(this).val() == "")
			{
				if($(this).parents("div .form-group").hasClass("has-success"))
				{
					
					$(this).parents("div .form-group").removeClass("has-success");
					$(this).parents("div .form-group").addClass("has-error");
				}
				else 
					$(this).parents("div .form-group").addClass("has-error");
				erro = true;
			}
			else
			{
				if($(this).parents("div .form-group").hasClass("has-error"))
				{
					
					$(this).parents("div .form-group").removeClass("has-error");
					$(this).parents("div .form-group").addClass("has-success");
				}
				else
					$(this).parents("div .form-group").addClass("has-success");
			}

			});

	 if(erro) return true;
	 else return false;
}

});

/**************************************************************************
*
*	 Recupera todas as fazendas do criador especificado
* 	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2Fazenda: function()
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/fazenda/listar",function(json)
	{
		$.each(json,function(i,item){
			var op = "<option value="+json[i].cod+">"+json[i].nome.toUpperCase()+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/**************************************************************************
*
*	 Recupera todos os funcionarios de uma fazenda especifica
*  	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2UsuariosPorFazenda: function(cod_fazenda)
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/usuario/listarporfazenda?cod_fazenda="+cod_fazenda,function(json)
	{
		$.each(json,function(i,item){
			split = json[i].nome.split(" ");
			if(split.length > 1)
			{
				nome = split[0];
				sobre = split[1];
				nome += " "+sobre;
			}
			else nome = json[i].nome;
			var op = "<option value="+json[i].cod+">"+nome.toUpperCase()+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/**************************************************************************
*
*	 Recupera todos os funcionarios de uma fazenda especifica
*  	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2Usuarios: function()
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/usuario/listar",function(json)
	{
		$.each(json,function(i,item){
			split = json[i].nome.split(" ");
			if(split.length > 1)
			{
				nome = split[0];
				sobre = split[1];
				nome += " "+sobre;
			}
			else nome = json[i].nome;
			var op = "<option value="+json[i].cod+">"+nome.toUpperCase()+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/**************************************************************************
*
*	 Recupera todas as pastagens disponíveis no sistema
* 	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2Pastagens: function()
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/pastagem/listar",function(json)
	{
		$.each(json,function(i,item){
			var op = "<option value="+json[i].cod+">"+json[i].tipo.toUpperCase()+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/**************************************************************************
*
*	 Recupera todos os retiros disponíveis no sistema
* 	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2Retiros: function(cod_fazenda)
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/retiro/listar?cod_fazenda="+cod_fazenda,function(json)
	{
		$.each(json,function(i,item){
			var str = json[i].retiro.toUpperCase() + " - " + json[i].fazenda.toUpperCase();
			var op = "<option value="+json[i].cod_retiro+">"+str+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/**************************************************************************
*
*	 Recupera todos os piquetes disponíveis no sistema
* 	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2Piquetes: function()
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/piquete/listar",function(json)
	{
		$.each(json,function(i,item){
			var str = json[i].piquete.toUpperCase() + " - " + json[i].retiro.toUpperCase() + " - " + json[i].fazenda.toUpperCase();
			var op = "<option value="+json[i].cod_piquete+">"+str+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/**************************************************************************
*
*	 Recupera todos as categorias de animais disponíveis no sistema
* 	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2CategoriaAnimal: function()
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/categoria-animal/listar",function(json)
	{
		$.each(json,function(i,item){
			
			var op = "<option value="+json[i].cod+">"+json[i].nome.toUpperCase()+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/**************************************************************************
*
*	 Recupera todos as pelagens de animais disponíveis no sistema
* 	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2Pelagens: function()
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/pelagem/listar",function(json)
	{
		$.each(json,function(i,item){
			
			var op = "<option value="+json[i].cod+">"+json[i].tipo.toUpperCase()+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/**************************************************************************
*
*	 Recupera todos as raças de animais disponíveis no sistema
* 	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2Racas: function()
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/raca/listar",function(json)
	{
		$.each(json,function(i,item){
			
			var op = "<option value="+json[i].cod+">"+json[i].nome.toUpperCase()+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/**************************************************************************
*
*	 Recupera todos os laboratorios disponíveis no sistema
* 	 @param Seletor
* 	 @return false
*
***************************************************************************/
$.fn.extend({
select2Laboratorios: function()
{
	var seletor = $(this);

	$.getJSON(pt_br.absolute_url+"/panel-control/laboratorio/listar",function(json)
	{
		$.each(json,function(i,item){
			
			var op = "<option value="+json[i].cod+">"+json[i].nome.toUpperCase()+"</option>";
			seletor.append(op);
			
		});
	});
	return false;
}
});

/* ------------------------------------------------------------------ 
|	Formata o input para aceitar apenas valores float
------------------------------------------------------------------*/
$(document).on("keyup",".float",function(){
	 var expre = /[^0-9.]/g;

    // REMOVE OS CARACTERES DA EXPRESSAO ACIMA
    if ($(this).val().match(expre))
        $(this).val($(this).val().replace(expre,''));
		
});


/* ------------------------------------------------------------------ 
|	Formata o input para aceitar apenas valores float
------------------------------------------------------------------*/
$(document).on("keyup",".integer",function(){
	 var expre = /[^0-9]/g;

    // REMOVE OS CARACTERES DA EXPRESSAO ACIMA
    if ($(this).val().match(expre))
        $(this).val($(this).val().replace(expre,''));
		
});

function today()
{
	var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!

    var yyyy = today.getFullYear();
    if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 
    var today = dd+'/'+mm+'/'+yyyy;
    return today;
}

function getHorario()
{
	d = new Date();
	datetext = d.toTimeString();
	time = datetext.split(' ')[0];
	

	return time;
}