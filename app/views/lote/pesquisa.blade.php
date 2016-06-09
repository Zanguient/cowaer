<link rel="stylesheet" type="text/css" href="{{url('plugins/datatables/css/dataTables.bootstrap.min.css')}}">
<style type="text/css" media="screen">
	table{width:100%!important;}
	.dataTables_scrollHeadInner{width: 100%!important;}
</style>
<div class="row">
	
	<div class="col-xs-12">
		<div class="box-content no-padding">
			{{Form::open(array('class'=>'form-horizontal','id'=>"fb_pesquisa"))}}
				<div class="form-group">
					<div class="col-md-2">
				    	<div class="dropdown">
						  <button class="btn btn-default dropdown-toggle" type="button" id="menuexportar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						    <i class="fa fa-share-square"></i> {{trans('geral.exportar')}}
						    <span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="menuexportar">
						    <li><a href="{{url('panel-control/bebidas/pdf')}}" target="_blank"><i class="fa fa-file-pdf-o"></i> PDF</a></li>
						    <li><a href="#" id="export_excel"><i class="fa fa-file-excel-o"></i> Excel</a></li>
						  </ul>
						</div>
				    </div>
					<div class="col-md-3">
						<select class="form-control" id="filtro">
						  <option value="lotes.nome">{{trans('geral.nro')}}</option>
						  <option value="piquetes.nome">{{trans('geral.piquete')}}</option>
						  <option value="retiros.nome">{{trans('geral.retiro')}}</option>
						  <option value="fazendas.nome">{{trans('geral.fazenda')}}</option>
						</select>
					</div>
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
							<th>{{trans('geral.nro')}}</th>
							<th>{{trans('geral.piquete')}}</th>
							<th>{{trans('geral.retiro')}}</th>
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
				<label class="col-sm-2 control-label">*{{trans('geral.piquete')}}</label>
				<div class="col-sm-10">
					<select name="cod_piquete" id="ed_cod_piquete">
					  <option value=""></option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">*{{trans('geral.nro')}}</label>
				<div class="col-sm-6">
					<input type="text" class="form-control required" name="nome" maxlength="20" placeholder="{{trans('geral.nro')}}" title="{{trans('geral.nro')}}">
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
<script src="{{url('js/lote/pesquisa.js')}}"></script>
