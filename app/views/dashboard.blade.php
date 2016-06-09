@extends('template')
@section('title')   {{trans('geral.titulo_dash')}}  @stop
@section('content')
<link rel="stylesheet" type="text/css" href="{{url('plugins/fullcalendar/fullcalendar.css')}}">
<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="{{url('panel-control/dashboard')}}">{{trans('geral.breadcrumb_home')}}</a></li>
			<li><a href="#">{{trans('geral.titulo_dash')}}</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<!--Start Dashboard 1-->
<div id="dashboard-header" class="row">
	<div class="col-xs-3 col-sm-3">
		<h3>{{strtoupper(Session::get('nome_user'))}}</h3>
	</div>
</div>

<div class="row">
<div class="col-md-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-paper-plane fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><h3>{{((isset($qtd_pdias)) ? $qtd_pdias:'0')}}</h3></div>
                        <div>{{trans('geral.pedidos_dia')}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-paper-plane fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><h3>{{((isset($qtd_pmes)) ? $qtd_pmes:'0')}}</h3></div>
                        <div>{{trans('geral.pedidos_mes')}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-2">
                        <i class="fa fa-cutlery fa-3x"></i>
                    </div>
                    <div class="col-xs-10 text-right">
                        <div class="huge"><b>{{((isset($ppp)) ? $ppp:'')}}</b></div>
                        <div>{{trans('geral.prato_mais_pedido')}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End Dashboard 1-->
<!--Start Dashboard 2-->
<div class="row-fluid">
	<div id="dashboard_links" class="col-xs-12 col-sm-2 pull-right">
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="#" class="tab-link" id="graph">{{trans('geral.tab_estatisticas')}}</a></li>
			<li><a href="#" class="tab-link" id="clients">{{trans('geral.ranked')}}</a></li>
			<li><a href="#" class="tab-link" id="overview">{{trans('geral.calendario')}}</a></li>
		</ul>
	</div>
	<div id="dashboard_tabs" class="col-xs-12 col-sm-10">
		<!--Start Dashboard Tab 3-->
		<div id="dashboard-graph" class="row" style="visibility: visible; position: relative;" >
			<div class="col-xs-6">
				<br>
				<h4 class="page-header"><i class="fa fa-line-chart"></i> {{trans('geral.graph_pedidos')}}</h4>
				<div id="stat-graph" style="height: 300px;"></div>
			</div>
			<div class="col-xs-6">
				<br>
				<h4 class="page-header"><i class="fa fa-mobile"></i> {{trans('geral.graph_app')}}</h4>
				<div id="stat-graph2" style="height: 300px;"></div>
			</div>
			<div class="col-xs-6">
				<br>
				<h4 class="page-header"><i class="fa fa-users"></i> {{trans('geral.graph_novos_clientes')}}</h4>
				<div id="stat-graph3" style="height: 300px;"></div>
			</div>
			<div class="col-xs-6">
				<br>
				<h4 class="page-header"><i class="fa fa-thumbs-up"></i> {{trans('geral.graph_pratos_mais_pedidos')}} - {{date('m/Y')}}</h4>
				<div class="col-xs-12">
					<div id="morris_donut_pratos" style="width:220px;height:220px;"></div>
				</div>
			</div>
		</div>
		<!--End Dashboard Tab 3-->
		<!--Start Dashboard Tab 2-->
		<div id="dashboard-clients" class="row" style="visibility: hidden; position: absolute;">
			<div class="row one-list-message">
				<div class="col-xs-1"><i class="fa fa-users"></i></div>
				<div class="col-xs-4"><b>{{trans('geral.col_cliente')}}</b></div>
				<div class="col-xs-2">{{trans('geral.col_pedidos')}}</div>
				<div class="col-xs-2">{{trans('geral.col_ultimo_pedido')}}</div>
			</div>
			@if(isset($tclientes))
				@foreach(@$tclientes as $tc)
					<div class="row one-list-message">
						<div class="col-xs-1"><i class="fa fa-user"></i></div>
						<div class="col-xs-4"><b>{{$tc->nome}}</b></div>
						<div class="col-xs-2">{{$tc->qtd_pedidos}}</div>
						<div class="col-xs-2 message-date">{{$tc->ultimo_pedido}}</div>
					</div>
				@endforeach
			@endif
		</div>
		<!--End Dashboard Tab 2-->
		<!--Start Dashboard Tab 1-->
		<div id="dashboard-overview" class="row" style="visibility: hidden; position: relative;">
			<div class="col-sm-12 col-md-12">
				<br>
				<div id="calendar"></div>
			</div>
		</div>
		<!--End Dashboard Tab 1-->
	</div>
	<div class="clearfix"></div>
</div>
<!--End Dashboard 2 -->
<div style="height: 40px;"></div>
<script src="{{url('plugins/morris/morris.min.js')}}" type="text/javascript" ></script>
<script src="{{url('plugins/raphael/raphael-min.js')}}" type="text/javascript" ></script>
<script src="{{url('plugins/moment/moment.min.js')}}" type="text/javascript" ></script>
<script src="{{url('plugins/fullcalendar/fullcalendar.js')}}" type="text/javascript" ></script>
<script src="{{url('plugins/fullcalendar/lang/pt-br.js')}}" type="text/javascript" ></script>
<script type="text/javascript">
$(document).ready(function() {
	// Make all JS-activity for dashboard
	DashboardTabChecker();
	
	// MorrisDashboard();
	// DrawCalendar();
	
});
</script>
@stop