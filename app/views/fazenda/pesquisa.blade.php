<link rel="stylesheet" type="text/css" href="{{url('plugins/datatables/css/dataTables.bootstrap.min.css')}}">
<style type="text/css" media="screen">
	table{width:100%!important;}
	.dataTables_scrollHeadInner{width: 100%!important;}
</style>
<div class="row">
	
	<div class="col-xs-12">
		<div class="box-content no-padding">
			{{Form::open(array('id'=>"fb_pesquisa"))}}
					<div class="form-group">
						<div class="col-md-2">
					    	<div class="dropdown">
							  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							    <i class="fa fa-share-square"></i> {{trans('geral.exportar')}}
							    <span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							    <li><a href="{{url('panel-control/bebidas/pdf')}}" target="_blank"><i class="fa fa-file-pdf-o"></i> PDF</a></li>
							    <li><a href="#" id="export_excel"><i class="fa fa-file-excel-o"></i> Excel</a></li>
							  </ul>
							</div>
					    </div>
						<div class="col-md-3">
							<select class="form-control" id="filtro">
							  <option value="fazendas.nome">{{trans('geral.fazenda')}}</option>
							  <option value="fazendas.cod">{{trans('geral.codigo')}}</option>
							  <option value="fazendas.cidade">{{trans('geral.cidade')}}</option>
							</select>
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
				<table class="table table-bordered table-striped table-hover" id="tabela_dados">
					<thead>
						<tr class="active">
							<th>{{trans('geral.codigo')}}</th>
							<th>{{trans('geral.fazenda')}}</th>
							<th>{{trans('geral.cidade')}}</th>
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
  <div class="modal-dialog devoops-modal modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{trans('geral.titulo_modal')}} <span id="titulo_modal"><span></h4>
      </div>
      <div class="modal-body">
        {{Form::open(array('class' => 'form-horizontal ','id' => 'edicao'))}}
		<div class="form-group">
			<input type="hidden" id="edit_cod" name="cod">
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
<script src="{{url('js/fazenda/pesquisa.js')}}"></script>

