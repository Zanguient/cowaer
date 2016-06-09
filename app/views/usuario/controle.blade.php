<link rel="stylesheet" type="text/css" href="{{url('plugins/datatables/css/dataTables.bootstrap.min.css')}}">
<style type="text/css" media="screen">
	table{width:100%!important;}
	.dataTables_scrollHeadInner{width: 100%!important;}
</style>
<div class="row">
	
	<div class="col-xs-12">
		<div class="box-content no-padding">
			{{Form::open(array('id'=>"fb_pesquisa"))}}
					<h4 class="page-header">{{trans('geral.header_controle')}}</h4>
					<div class="form-group">
						<label class="col-sm-2 control-label">*{{trans('geral.funcionario')}}</label>
						<div class="col-sm-3">
							<select  name="cod_funcionario" id="slf">
							  <option value=""></option>
							</select>
						</div>
						<label class="col-sm-1 control-label">*{{trans('geral.fazenda')}}</label>
						<div class="col-sm-4">
							<select  name="cod_fazenda" id="slfz">
							  <option value=""></option>
							</select>
						</div>
						<button type="button" class="btn btn-success" id="ct_salvar">{{trans('geral.button_salvar')}}</button>
					</div><br><br>
					<hr>
					<div class="form-group">
						<div class="col-md-3">
							<select class="form-control" id="filtro">
							  <option value="funcionarios.nome">{{trans('geral.funcionario')}}</option>
							  <option value="fazendas.nome">{{trans('geral.fazenda')}}</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-3">
							
						</div>
					</div>
					<div class="form-group">
						<div class="input-group col-md-5">
					      <input type="text" class="form-control required" id="valor_buscado" placeholder="Buscar por...">
					      <span class="input-group-btn">
					        <button class="btn btn-primary" type="button" id="btn_pesquisar"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					      </span>

					    </div><!-- /input-group -->
					</div>

				{{Form::close()}}
			<div class="table-responsive">
				<table class="table table-bordered table-striped table-hover" id="tabela_control">
					<thead>
						<tr class="active">
							<th>{{trans('geral.codigo')}}</th>
							<th>{{trans('geral.codigo')}}</th>
							<th>{{trans('geral.nome')}}</th>
							<th>{{trans('geral.fazenda')}}</th>
							<th>{{trans('geral.acao')}}</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
					
				</table>
			</div>
		</div>
	</div>	
</div>

<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="editar">
  <div class="modal-dialog devoops-modal" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{trans('geral.titulo_modal')}} <span id="titulo_modal"><span></h4>
      </div>
      <div class="modal-body">
        {{Form::open(array('class' => 'form-horizontal ','id' => 'edicao','files' => true))}}
			
			<div class="form-group">
				<input type="hidden" id="edit_cod" name="cod" />
				<label class="col-sm-2 control-label">*{{trans('geral.nome')}}</label>
				<div class="col-sm-8">
					<input type="text" class="form-control required" name="nome" maxlength="40" placeholder="{{trans('geral.nome')}}" title="{{trans('geral.nome')}}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">*{{trans('geral.login')}}</label>
				<div class="col-sm-6">
					<input type="text" class="form-control required" name="login" maxlength="15" placeholder="{{trans('geral.login')}}" title="{{trans('geral.login')}}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">{{trans('geral.senha')}}</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" name="senha" placeholder="{{trans('geral.senha')}}" title="{{trans('geral.senha')}}">
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
				<label class="col-sm-2 control-label">{{trans('geral.cargo')}}</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="cargo" maxlength="20" placeholder="{{trans('geral.cargo')}}" title="{{trans('geral.cargo')}}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">{{trans('geral.email')}}</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" name="email"  placeholder="{{trans('geral.email')}}" title="{{trans('geral.email')}}">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">{{trans('geral.nivel')}}</label>
				<div class="col-sm-6">
					<select class="form-control" name="nivel" title="Nivel de Acesso">
					  <option value="1">{{trans('geral.nivel_admin')}}</option>
					  <option value="2">{{trans('geral.nivel_empregado')}}</option>
					</select>
				</div>
			</div>
			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<img style='max-width: 100px; max-height: 100px;' id="foto_edicao"/><br><br>
				<input type="hidden" name="antiga_foto" id="antiga_foto">
				<div class='btn btn-primary btn-xs btn-file'> <i class='fa fa-camera'></i> {{trans('geral.add_foto')}}<input  type='file' name='foto' class='file imagem'></div>
			</div>
		</div>
		{{Form::close()}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('geral.button_cancelar')}}</button>
        <button type="button" class="btn btn-primary" id="salvar_edicao">{{trans('geral.button_salvar')}}</button>
      </div>
    </div>
  </div>
</div>
<script src="{{url('plugins/datatables/js/jquery.dataTables.js')}}"></script>
<script src="{{url('plugins/datatables/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{url('js/usuario/controle.js')}}"></script>
