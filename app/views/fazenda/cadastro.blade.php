<div class="box-content">
	<h4 class="page-header">{{trans('geral.header_usuario')}}</h4>
{{Form::open(array('class' => 'form-horizontal ','id' => 'cadastro'))}}
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.fazenda')}}</label>
			<div class="col-sm-10">
				<input type="text" class="form-control required" name="nome" maxlength="40" placeholder="{{trans('geral.nome')}}" title="{{trans('geral.nome')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.endereco')}}</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="endereco"  maxlength="70" placeholder="{{trans('geral.endereco')}}" title="{{trans('geral.endereco')}}">
			</div>
			<label class="col-sm-1 control-label">{{trans('geral.bairro')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="bairro"  maxlength="20" placeholder="{{trans('geral.bairro')}}" title="{{trans('geral.bairro')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.cep')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="cep"  maxlength="12" placeholder="{{trans('geral.cep')}}" title="{{trans('geral.cep')}}">
			</div>
			<label class="col-sm-2 control-label">{{trans('geral.cidade')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="cidade"  maxlength="50" placeholder="{{trans('geral.cidade')}}" title="{{trans('geral.cidade')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.telefone')}} 1</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="telefone1"  maxlength="20" placeholder="{{trans('geral.telefone')}} 1" title="{{trans('geral.telefone')}} 1">
			</div>
			<label class="col-sm-2 control-label">{{trans('geral.telefone')}} 2</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="telefone2"  maxlength="20" placeholder="{{trans('geral.telefone')}} 2" title="{{trans('geral.telefone')}} 2">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.ie')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="inscricao_estadual"  maxlength="20" placeholder="{{trans('geral.ie')}}" title="{{trans('geral.ie')}}">
			</div>
			<label class="col-sm-2 control-label">{{trans('geral.area')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control float" name="area"  placeholder="{{trans('geral.area')}}" title="{{trans('geral.area')}}">
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-2">
				<button type="button" id="cancelar" class="btn btn-default btn-label-left">
				<span><i class="fa fa-times"></i></span>
					{{trans('geral.button_cancelar')}}
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" id="salvar" class="btn btn-success btn-label-left">
				<span><i class="fa fa-check"></i></span>
					{{trans('geral.button_salvar')}}
				</button>
			</div>
		</div>
	{{Form::close()}}
</div>

<script src="{{url('js/fazenda/cadastro.js')}}" type="text/javascript" charset="utf-8"></script>



