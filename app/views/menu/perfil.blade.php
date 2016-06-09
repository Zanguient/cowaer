@extends('template')

@section('title')   {{trans('geral.titulo_perfil')}}    @stop
@section('content')
<style type="text/css" media="screen">
	.info{font-weight: normal!important;}
</style>
<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="{{url('panel-control/dashboard')}}">{{trans('geral.breadcrumb_home')}}</a></li>
			<li><a href="#">{{trans('geral.titulo_perfil')}}</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-user"></i>
					<span>{{trans('geral.titulo_perfil')}}</span>
				</div>
				<div class="box-icons pull-right">
					<a href="#editar" id="editar">
						<i class="fa fa-pencil"></i>
					</a>
					<a href="#fechar" id="fechar">
						<i class="fa fa-undo"></i>
					</a>
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a href="{{url('panel-control/ajuda#geral')}}">
						<i class="fa fa-question-circle"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
	<h4 class="page-header">{{trans('geral.subtitulo_perfil')}}</h4>
	<p>{{trans('geral.infos')}}</p>
{{Form::open(array('url'=>'panel-control/perfil','class' => 'form-horizontal ','id' => 'perfil',))}}
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.nome')}}</label>
			<div class="col-sm-8">
				<label class="info control-label">{{((isset($dados)) ? $dados["nome"]:'')}}</label>
				<input type="hidden" class="form-control required" name="nome" value="{{((isset($dados)) ? $dados['nome']:'')}}" title="Nome">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.login')}}</label>
			<div class="col-sm-4">
				<label class="info control-label">{{((isset($dados)) ? $dados["login"]:'')}}</label>
				<input type="hidden" class="form-control required" name="login" value="{{((isset($dados)) ? $dados['login']:'')}}" title="Login">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.senha')}}</label>
			<div class="col-sm-4">
				<label class="info control-label">{{((isset($dados)) ? $dados["senha"]:'')}}</label>
				<input type="hidden" class="form-control" name="senha" placeholder="{{trans('geral.senha')}}" title="Senha">
			</div>
			<div class="col-sm-2 hide" id="div-1">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="mostrar_senha">{{trans('geral.mostrar_senha')}}
						<i class="fa fa-square-o small"></i>
					</label>
				</div>
			</div>
		</div>
		<div class="form-group hide" id="div-2">
			<label class="col-sm-2 control-label">*{{trans('geral.confirmacao')}}</label>
			<div class="col-sm-4">
				<input type="hidden" class="form-control" name="confirmacao" placeholder="{{trans('geral.confirmacao')}}" title="Confirmação de Senha">
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="form-group hide" id="div-3">
			<div class="col-sm-offset-2 col-sm-2">
				<button type="submit" id="salvar" class="btn btn-primary btn-label-left">
				<span><i class="fa fa-check"></i></span>
					{{trans('geral.button_salvar')}}
				</button>
			</div>
		</div>
	{{Form::close()}}
</div>
		</div>
	</div>

<div style="height: 40px;"></div>
<script src="{{url('plugins/bootstrapvalidator/bootstrapValidator.min.js')}}"></script>
<script src="{{url('js/utilidades.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('js/menu/perfil.js')}}" type="text/javascript"></script>
@stop