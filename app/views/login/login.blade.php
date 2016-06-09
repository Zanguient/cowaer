<!DOCTYPE html>
<html lang="pt-br">
	<head>
    <meta charset="utf-8">
    <title>Cowaer</title>
    <meta name="description" content="Sistema de Controle e Gestão de Rebanhos Bovinos">
    <meta name="author" content="Jean Fabrício">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('favicon.ico')}}">
    <link href="{{url('plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('css/alertas.css')}}" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <style type="text/css" media="screen">
    	body{background: #518d3a url(./img/devoops_pattern_b10.png) 0 0 repeat!important;}
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
        <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->
    <script src="{{url('plugins/jquery/jquery-v1.11.3.min.js')}}" type="text/javascript" ></script>
    <script src="{{url('plugins/bootstrap/bootstrap.js')}}" type="text/javascript" ></script>
    <script src="{{url('js/alertas.js')}}" type="text/javascript" ></script>
  </head>
<body>
<!-- ALERTA DE MENSAGEM -->
<!-- Alert favor seguir esse padrao e importar a folha de estilo -->
<!-- 
  * Abaixo esta a caixa de alert que tras as mensagens de validação tanto
  * do jquery quanto do php por tras do servidor, se a variavel $msg existir
  * então a mensagem e passada ao atributo message pelo qual via jquery
  * eu remonto dentro do paragrafo                                    -->
@if(Session::has('msg'))
    <div class="panel-alert" id="msg" message="{{Session::get('msg')}}"></div>
@else
<div class="panel-alert" id="msg"></div>
@endif
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<br><br>
			<div class="col-md-offset-3">
				<img src="{{'img/appicon.png'}}" alt="Logo DuCheff" width="200">
			</div>
			<div class="box">

				<div class="box-content">

					<div class="text-center">
						<h3 class="page-header">{{trans('geral.bem_vindo')}}</h3>
					</div>
					{{Form::open(array('url' => 'auth'))}}
					<div class="form-group">
						<label class="control-label">{{trans('geral.login')}}</label>
						<input type="text" class="form-control" name="login" />
					</div>
					<div class="form-group">
						<label class="control-label">{{trans('geral.senha')}}</label>
						<input type="password" class="form-control" name="senha" />
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-success">{{trans('geral.button_entrar')}}</button>
					</div>
					{{Form::close()}}
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){

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

</script>
</body>
</html>
