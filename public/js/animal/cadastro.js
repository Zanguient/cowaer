$(document).ready(function() {

/*Carrega os lotes na tabela do modal*/
loadViewTable();
loadViewAnimalTable();

datepickerBuilder("#data_nascimento");
$("#data_nascimento").val(today());

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
		peso_nascimento: {
			validators: {
				notEmpty: {
					message: pt_br.msg_erro_nome
				},
				digits: {
					message: pt_br.msg_numeros
				}
			}
		},
		peso_atual: {
			validators: {
				notEmpty: {
					message: pt_br.msg_erro_nome
				},
				digits: {
					message: pt_br.msg_numeros
				}
			}
		},
		cdc_origem: {
			validators: {
				notEmpty: {
					message: pt_br.msg_erro_nome
				}
			}
		},
		cdn_origem: {
			validators: {
				notEmpty: {
					message: pt_br.msg_erro_nome
				}
			}
		}

	}
});

$("#cod_cat_inicial").select2CategoriaAnimal();
var s2ci = $("#cod_cat_inicial").select2();

$("#cod_cat_atual").select2CategoriaAnimal();
var s2cat = $("#cod_cat_atual").select2();

$("#cod_pelagem").select2Pelagens();
var s2pl = $("#cod_pelagem").select2();

$("#cod_laboratorio").select2Laboratorios();
var s2lab = $("#cod_laboratorio").select2();

$("#cod_raca").select2Racas();
var s2rc = $("#cod_raca").select2();


$("#salvar").on('click', function(event) {
	
	
	if($("#cadastro .required").validation())
	{
		alertErro(pt_br.campos_vazios);
		return false;
	}
	if(s2ci.val() == "" || s2cat.val() == "" || s2pl.val() == "" ||
	   s2rc.val() == "")
	{
		alertErro(pt_br.campos_vazios);
		return false;
	}
	
	var dados = new FormData(document.querySelector("#cadastro"));

	$.ajax({
		type: "POST",
        contentType: false,
        url : pt_br.absolute_url+"/panel-control/animal/cadastro",
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
|	Seleciona o lote na tabela
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

	$("#cod_l").val(parseInt($(this).find("input[type=radio]").val(),10));
	$("#nome_lote").val($(this).children('td:eq(1)').text());
	
	$("#nome_criador").val($(this).children("td:eq(5)").text());	
	$("#nome_piquete").val($(this).children('td:eq(2)').text());
	$("#nome_retiro").val($(this).children('td:eq(3)').text());
	$("#nome_fazenda").val($(this).children('td:eq(4)').text());

});


/*------------------------------------------------------------------------
|	Seleciona o lote na tabela
|------------------------------------------------------------------------*/
$(document).off("click","#tabela_receptora tr").on("click","#tabela_receptora tr",function(){
	
	$("#tabela_receptora tr").each(function(){
		if($(this).hasClass('text-primary'))
		{
			$(this).removeClass('text-primary');

		}
	});

	$(this).addClass('text-primary');
	$(this).find("input[type=radio]").prop("checked",true);

	$("#cod_receptora").val(parseInt($(this).find("input[type=radio]").val(),10));
	$("#nome_receptora").val($(this).children('td:eq(1)').text());
	
	$("#rec_raca").val($(this).children("td:eq(2)").text());	
	
	$("#rec_categoria").val($(this).children('td:eq(3)').text());

	$("#rec_rgn").val($(this).children('td:eq(4)').text());

	$("#rec_rgd").val($(this).children('td:eq(5)').text());

});


$("#input_lote").on("keyup",function(){

	var dados = $("#pesquisa_lote").serializeArray();

	$.ajax({
		type: "GET",
        url : pt_br.absolute_url+"/panel-control/lote/listar",
        data: dados,
        dataType: 'json'
    }).done(function(json){
    	$("#tabela_visao").empty();

    	$.each(json,function(i,item){
    		linha = "<tr>";
    		linha +="<td><input type='radio' name='cod_lote' value="+item.cod_lote+"></td>";
    		linha += "<td>"+item.lote+"</td>";
    		linha += "<td id="+item.cod_piquete+">"+item.piquete+"</td>";
    		linha += "<td id="+item.cod_retiro+">"+item.retiro+"</td>";
    		linha += "<td id="+item.cod_fazenda+">"+item.fazenda+"</td>";
    		linha += "<td id="+item.cod_cliente+">"+item.cliente+"</td>";
    		linha += "</tr>";

    		$("#tabela_visao").append(linha);
    	});

    });	
});


$("#input_receptora").on("keyup",function(){

	var dados = $("#pesquisa_receptora").serializeArray();

	$.ajax({
		type: "GET",
        url : pt_br.absolute_url+"/panel-control/animal/listar",
        data: dados,
        dataType: 'json'
    }).done(function(json){
    	$("#tabela_receptora").empty();

    	$.each(json,function(i,item){
    		linha = "<tr>";
    		linha +="<td><input type='radio' name='cod_animal' value="+item.cod_animal+"></td>";
    		linha += "<td>"+item.animal+"</td>";
    		linha += "<td>"+item.raca+"</td>";
    		linha += "<td>"+item.categoria_atual+"</td>";
    		linha += "<td>"+item.rgn+"</td>";
    		linha += "<td>"+item.rgn_definitivo+"</td>";
    		linha += "</tr>";

    		$("#tabela_receptora").append(linha);
    	});

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
	$("#data_nascimento").val(today());
	$("#cadastro textarea").val("");
	s2ci.select2("val","");
	s2cat.select2("val","");
	s2pl.select2("val","");
	s2rc.select2("val","");
	s2lab.select2("val","");
	

	
}

$(".anexo").on("change",function(){
	span = $(this).parents("div").find(".span_anexo");
	array = $(this).val().split("\\");
	url = array[array.length-1];
	span.text(url);
    
});

/*------------------------------------------------------------------------
|	Carrega os lotes na tabela do modal
|------------------------------------------------------------------------*/
function loadViewTable() {
	
	$.ajax({
		type: "GET",
        url : pt_br.absolute_url+"/panel-control/lote/listar",
        dataType: 'json'
    }).done(function(json){
    	
    	$.each(json,function(i,item){
    		linha = "<tr>";
    		linha +="<td><input type='radio' name='cod_lote' value="+item.cod_lote+"></td>";
    		linha += "<td>"+item.lote+"</td>";
    		linha += "<td id="+item.cod_piquete+">"+item.piquete+"</td>";
    		linha += "<td id="+item.cod_retiro+">"+item.retiro+"</td>";
    		linha += "<td id="+item.cod_fazenda+">"+item.fazenda+"</td>";
    		linha += "<td id="+item.cod_cliente+">"+item.cliente+"</td>";
    		linha += "</tr>";

    		$("#tabela_visao").append(linha);
    	});

    });	
}


/*------------------------------------------------------------------------
|	Carrega os animais na tabela do modal
|------------------------------------------------------------------------*/
function loadViewAnimalTable() {
	
	$.ajax({
		type: "GET",
        url : pt_br.absolute_url+"/panel-control/animal/listar",
        dataType: 'json'
    }).done(function(json){
    	
    	$.each(json,function(i,item){
    		linha = "<tr>";
    		linha +="<td><input type='radio' name='cod_animal' value="+item.cod_animal+"></td>";
    		linha += "<td>"+item.animal+"</td>";
    		linha += "<td>"+item.raca+"</td>";
    		linha += "<td>"+item.categoria_atual+"</td>";
    		linha += "<td>"+item.rgn+"</td>";
    		linha += "<td>"+item.rgn_definitivo+"</td>";
    		linha += "</tr>";

    		$("#tabela_receptora").append(linha);
    	});

    });	
}

});

