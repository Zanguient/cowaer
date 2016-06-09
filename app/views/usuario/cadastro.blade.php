<div class="box-content">
	<h4 class="page-header">{{trans('geral.header_usuario')}}</h4>
{{Form::open(array('class' => 'form-horizontal ','id' => 'cadastro','files' => true))}}
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.nome')}}</label>
			<div class="col-sm-8">
				<input type="text" class="form-control required" name="nome" maxlength="40" placeholder="{{trans('geral.nome')}}" title="{{trans('geral.nome')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.login')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control required" name="login" maxlength="15" placeholder="{{trans('geral.login')}}" title="{{trans('geral.login')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.senha')}}</label>
			<div class="col-sm-4">
				<input type="password" class="form-control required" name="senha" placeholder="{{trans('geral.senha')}}" title="{{trans('geral.senha')}}">
			</div>
			<div class="col-sm-2">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="mostrar_senha">{{trans('geral.mostrar_senha')}}
						<i class="fa fa-square-o small"></i>
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.confirmacao')}}</label>
			<div class="col-sm-4">
				<input type="password" class="form-control required" name="confirmacao" placeholder="{{trans('geral.confirmacao')}}" title="{{trans('geral.confirmacao')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.cargo')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="cargo" maxlength="20" placeholder="{{trans('geral.cargo')}}" title="{{trans('geral.cargo')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.email')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control" name="email"  placeholder="{{trans('geral.email')}}" title="{{trans('geral.email')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.nivel')}}</label>
			<div class="col-sm-4">
				<select class="form-control" name="nivel" title="Nivel de Acesso">
				  <option value="1">{{trans('geral.nivel_admin')}}</option>
				  <option value="2">{{trans('geral.nivel_empregado')}}</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<img style='max-width: 100px; max-height: 100px;' id="fusuario"/><br><br>
				<div class='btn btn-primary btn-xs btn-file'> <i class='fa fa-camera'></i> {{trans('geral.add_foto')}}<input  type='file' name='foto' class='file imagem'></div>
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

<script src="{{url('js/usuario/cadastro.js')}}" type="text/javascript" charset="utf-8"></script>



