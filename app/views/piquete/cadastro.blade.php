
<div class="box-content">
	<h4 class="page-header">{{trans('geral.header_piquete')}}</h4>
{{Form::open(array('class' => 'form-horizontal ','id' => 'cadastro','files' => true))}}
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.retiro')}}</label>
			<div class="col-sm-4">
				<div class="input-group">
					<input type="hidden" name="cod_retiro" id="cod_retiro">
			      <input type="text" class="form-control required" readonly="readonly" id="input_retiro">
			      <span class="input-group-btn">
			        <button class="btn btn-success" data-toggle="modal" data-target="#modal_retiro" id="open-modal" type="button"><i class="fa fa-search fa-fw"></i></button>
			      </span>
			    </div><!-- /input-group -->
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.pastagem')}}</label>
			<div class="col-sm-4">
				<select name="cod_pastagem" id="cod_pastagem">
				  <option value=""></option>
				</select>
			</div>
			<div class="col-sm-6">
				<a href="{{url('panel-control/pastagem/solicitar')}}" title="{{trans('geral.link_solicitar_pastagem')}}">
					<small class="text-info"><i class="fa fa-plus-circle"></i> {{trans('geral.link_solicitar_pastagem')}}</small>
				</a>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.nome')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control required" name="nome" maxlength="20" placeholder="{{trans('geral.nome')}}" title="{{trans('geral.nome')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.area')}}</label>
			<div class="col-sm-2">
				<div class="input-group">
				  <input type="text" class="form-control float" name="area">
				  <span class="input-group-addon">Ha</span>
				</div>

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

<!-- Modal -->
<div class="modal fade" id="modal_retiro" tabindex="-1" role="dialog" aria-labelledby="modal_retiro">
  <div class="modal-dialog devoops-modal modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{trans('geral.titulo_retiro')}}</h4>
      </div>
      <div class="modal-body">
      	<div class="table-responsive table-scroller">
	      	<table class="table table-striped table-hover" >
	        	<thead>
	        		<tr>
	        			<th></th>
	        			<th>{{trans('geral.retiro')}}</th>
	        			<th>{{trans('geral.fazenda')}}</th>
	        		</tr>
	        	</thead>
	        	<tbody id="tabela_visao">
	        	</tbody>
	        </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">{{trans('geral.button_fechar')}}</button>
      </div>
    </div>
  </div>
</div>


<script src="{{url('js/piquete/cadastro.js')}}" type="text/javascript" charset="utf-8"></script>