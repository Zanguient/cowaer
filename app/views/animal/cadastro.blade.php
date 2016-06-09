
<div class="box-content">
	
{{Form::open(array('id' => 'cadastro','files' => true))}}
		<fieldset>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-4">
						<label>*{{trans('geral.nro')}}</label>
						<div class="input-group">
							<input type="hidden" name="cod_lote" id="cod_l">
					      <input type="text" class="form-control required" readonly="readonly" id="nome_lote">
					      <span class="input-group-btn">
					        <button class="btn btn-success" data-toggle="modal" data-target="#modal_lote" id="open-modal" type="button"><i class="fa fa-search fa-fw"></i></button>
					      </span>
					    </div><!-- /input-group -->
					</div>

					<div class="col-sm-4">
						<label>*{{trans('geral.piquete')}}</label>
						<input type="text" class="form-control required" readonly="readonly" id="nome_piquete">
					</div>

					<div class="col-sm-4">
						<label>*{{trans('geral.retiro')}}</label>
						<input type="text" class="form-control required" readonly="readonly" id="nome_retiro">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-4">
						<label>*{{trans('geral.fazenda')}}</label>
						<input type="text" class="form-control required" readonly="readonly" id="nome_fazenda">
					</div>

					
					<div class="col-sm-4">
						<label>*{{trans('geral.proprietario')}}</label>
						<input type="text" class="form-control required" readonly="readonly" id="nome_criador">
					</div>
				</div>
			</div>
		</fieldset>

		<fieldset>
			<div class="form-group">
				<div class="col-sm-4">
					<label>*{{trans('geral.categoria_inicial')}}</label>
					<select name="cod_cat_inicial" id="cod_cat_inicial">
					  <option value=""></option>
					</select>
				</div>

				<div class="col-sm-4">
					<label>*{{trans('geral.categoria')}}</label>
					<select name="cod_cat_atual" id="cod_cat_atual">
					  <option value=""></option>
					</select>
				</div>

				<div class="col-sm-4">
					<label>*{{trans('geral.pelagem')}}</label>
					<select name="cod_pelagem" id="cod_pelagem">
					  <option value=""></option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-4">
					<label>*{{trans('geral.raca')}}</label>
					<select name="cod_raca" id="cod_raca">
					  <option value=""></option>
					</select>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<div class="col-sm-4">
					<label>{{trans('geral.laboratorio')}}</label>
					<select name="cod_laboratorio" id="cod_laboratorio">
					  <option value=""></option>
					</select>
				</div>
				<div class="form-group">
				<div class="col-sm-3">
					<div class='btn btn-primary btn-xs btn-file'> <i class='fa fa-paperclip'></i> {{trans('geral.add_anexo')}}<input  type='file' name='exame_path' maxlength="70" accept="application/pdf" class='file anexo'></div>
				</div>
				<div class="col-sm-4">
					<span class="span_anexo"></span>
				</div>
			</div>		
		</fieldset>
		<fieldset>
			<legend>{{trans('geral.receptora')}}</legend>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-3">
						<label>*{{trans('geral.receptora')}}</label>
						<div class="input-group">
							<input type="hidden" name="cod_receptora" id="cod_receptora">
					      <input type="text" class="form-control required" readonly="readonly" id="nome_receptora">
					      <span class="input-group-btn">
					        <button class="btn btn-success" data-toggle="modal" data-target="#modal_receptora" id="open-modal" type="button"><i class="fa fa-search fa-fw"></i></button>
					      </span>
					    </div><!-- /input-group -->
					</div>
					<div class="col-sm-3">
						<label>{{trans('geral.raca')}}</label>
						<input type="text" class="form-control required" readonly="readonly" id="rec_raca">
					</div>
					<div class="col-sm-3">
						<label>{{trans('geral.categoria')}}</label>
						<input type="text" class="form-control required" readonly="readonly" id="rec_categoria">
					</div>
					<div class="col-sm-3">
						<label>{{trans('geral.rgn')}}</label>
						<input type="text" class="form-control required" readonly="readonly" id="rec_rgn">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-3">
						<label>{{trans('geral.rgd')}}</label>
						<input type="text" class="form-control required" readonly="readonly" id="rec_rgd">
					</div>
				</div>
			</div>
		</fieldset>
		<fieldset>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-4">
						<label>*{{trans('geral.nome')}}</label>
						<input type="text" class="form-control required" name="nome"  maxlength="30" placeholder="{{trans('geral.nome')}}" title="{{trans('geral.nome')}}">
					</div>
					<div class="col-sm-4">
						<label>*{{trans('geral.rgn')}}</label>
						<input type="text" class="form-control required" name="rgn"  maxlength="15" placeholder="{{trans('geral.rgn')}}" title="{{trans('geral.nome')}}">
					</div>
					<div class="col-sm-4">
						<label>*{{trans('geral.rgd')}}</label>
						<input type="text" class="form-control required" name="rgn_definitivo"  maxlength="20" placeholder="{{trans('geral.rgd')}}" title="{{trans('geral.rgd')}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-4">
						<label>*{{trans('geral.peso_nascimento')}}</label>
						<input type="text" class="form-control float required" name="peso_nascimento"  placeholder="{{trans('geral.peso_nascimento')}}" title="{{trans('geral.peso_nascimento')}}">
					</div>
					<div class="col-sm-4">
						<label>*{{trans('geral.peso_atual')}}</label>
						<input type="text" class="form-control float required" name="peso_atual"  placeholder="{{trans('geral.peso_atual')}}" title="{{trans('geral.peso_atual')}}">
					</div>
					<div class="col-sm-4">
						<label>*{{trans('geral.data_nascimento')}}</label>
						<input type="text" class="form-control" id="data_nascimento" placeholder="{{trans('geral.data_nascimento')}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-4">
						<label>*{{trans('geral.cdc_origem')}}</label>
						<input type="text" class="form-control required" name="cdc_origem" maxlength="20" placeholder="{{trans('geral.cdc_origem')}}" title="{{trans('geral.cdc_origem')}}">
					</div>
					<div class="col-sm-4">
						<label>*{{trans('geral.cdn_origem')}}</label>
						<input type="text" class="form-control required" name="cdn_origem" maxlength="20" placeholder="{{trans('geral.cdn_origem')}}" title="{{trans('geral.cdn_origem')}}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<div class="col-sm-12">
						<label>{{trans('geral.observacoes')}}</label>
						<textarea class="form-control" rows="3" name="observacoes"></textarea>
					</div>
				</div>
			</div>
		</fieldset>
		
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


<!-- ============================================================== -->
<!-- Modal para selecionar os dados do lote para cadastrar o animal -->
<!-- ============================================================== -->

<div class="modal fade" id="modal_lote" tabindex="-1" role="dialog" aria-labelledby="modal_lote">
  <div class="modal-dialog devoops-modal modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{trans('geral.titulo_lote')}}</h4>
      </div>
      <div class="modal-body">
      	{{Form::open(array('class'=>'form-horizontal','id'=>"pesquisa_lote"))}}
			<div class="form-group">
				<div class="col-md-3">
					<select class="form-control" name ="filtro">
					  <option value="lotes.nome">{{trans('geral.nro')}}</option>
					  <option value="piquetes.nome">{{trans('geral.piquete')}}</option>
					  <option value="retiros.nome">{{trans('geral.retiro')}}</option>
					  <option value="fazendas.nome">{{trans('geral.fazenda')}}</option>
					</select>
				</div>
				<div class="input-group col-md-5">
			      <input type="text" class="form-control required" name="valor_buscado" id="input_lote" placeholder="Buscar por...">
			      <span class="input-group-btn">
			        <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			      </span>

			    </div><!-- /input-group -->
			</div>
		{{Form::close()}}

      	<div class="table-responsive table-scroller">
	      	<table class="table table-striped table-hover" >
	        	<thead>
	        		<tr>
	        			<th></th>
	        			<th>{{trans('geral.nro')}}</th>
	        			<th>{{trans('geral.piquete')}}</th>
	        			<th>{{trans('geral.retiro')}}</th>
						<th>{{trans('geral.fazenda')}}</th>
						<th>{{trans('geral.proprietario')}}</th>
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


<!-- ===========================================  -->
<!-- Modal para selecionar a receptora do animal  -->
<!-- ===========================================  -->

<div class="modal fade" id="modal_receptora" tabindex="-1" role="dialog" aria-labelledby="modal_receptora">
  <div class="modal-dialog devoops-modal modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{trans('geral.receptora')}}</h4>
      </div>
      <div class="modal-body">
      	{{Form::open(array('class'=>'form-horizontal','id'=>"pesquisa_receptora"))}}
			<div class="form-group">
				<div class="col-md-3">
					<select class="form-control" name ="filtro">
					  <option value="animal">{{trans('geral.nome')}}</option>
					  <option value="raca">{{trans('geral.raca')}}</option>
					  <option value="categoria_atual">{{trans('geral.categoria')}}</option>
					  <option value="rgn">{{trans('geral.rgn')}}</option>
					  <option value="rgn_definitivo">{{trans('geral.rgd')}}</option>
					</select>
				</div>
				<div class="input-group col-md-5">
			      <input type="text" class="form-control required" name="valor_buscado" id="input_receptora" placeholder="Buscar por...">
			      <span class="input-group-btn">
			        <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			      </span>

			    </div><!-- /input-group -->
			</div>
		{{Form::close()}}

      	<div class="table-responsive table-scroller">
	      	<table class="table table-striped table-hover" >
	        	<thead>
	        		<tr>
	        			<th></th>
	        			<th>{{trans('geral.nome')}}</th>
	        			<th>{{trans('geral.raca')}}</th>
	        			<th>{{trans('geral.categoria')}}</th>
	        			<th>{{trans('geral.rgn')}}</th>
	        			<th>{{trans('geral.rgd')}}</th>
	        		</tr>
	        	</thead>
	        	<tbody id="tabela_receptora">

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


<script src="{{url('js/animal/cadastro.js')}}" type="text/javascript" charset="utf-8"></script>