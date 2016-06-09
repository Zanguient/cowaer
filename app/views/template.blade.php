<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    
    <title>@yield('title')</title>
    <meta name="description" content="Sistem de Gestão e Controle de Pedidos">
    <meta name="author" content="Jean Fabricio">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{url('favicon.ico')}}">

    <link href="{{url('plugins/bootstrap/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet">
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
    
    <link href="{{url('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/alertas.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
        <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css" media="screen">
      .loadajax
     {

      top:0;
      left: 0;
      width: 100%;
      height: 100%;
      position: fixed;
      z-index: 10000000;
      background-color: rgba(255,255,255,0.6767);
      display: none;

     }
     .loadajax img
     {
        margin: 23% auto;
        
     }
     .loadajax h2
     {
      position: absolute;
       top:0;
       left: 0;
       margin: 27% 45%;
        
     }
    </style>

    <!-- Scripts -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="http://code.jquery.com/jquery.js"></script>-->
    <script src="{{url('plugins/jquery/jquery-2.1.0.min.js')}}"></script>
    <script src="{{url('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{url('plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All functions for this theme + document.ready processing -->
    <script>
    $(document).ready(function(){


      $(document).tooltip({selector:'*[data-toggle="tooltip"]'});
    });
    </script> 
    <script src="{{url('js/devoops.js')}}"></script>
  </head>
<body>
<div class="loadajax" id="ajaxLoading">
  <img class='img-responsive' alt="Loading..." src="{{url('img/loading.gif')}}"/>
  <h2>{{trans('geral.aguarde')}}</h2>
</div>
<!--Start Header-->
<div id="screensaver">
  <canvas id="canvas"></canvas>
  <i class="fa fa-lock" id="screen_unlock"></i>
</div>
<header class="navbar">
  <div class="container-fluid expanded-panel">
    <div class="row">
      <!-- Divisão da Logomarca -->
      <div id="logo" class="col-xs-12 col-sm-2">
        <img class="pull-left" src="{{url('/img/appicon.png')}}" alt="Logo Cowaer" width="40">
        <a href="{{url('/panel-control/dashboard')}}">Cowaer</a>
      </div>
      <div id="top-panel" class="col-xs-12 col-sm-10">
        <div class="row">
          <!-- Caixa de pesquisa a direita Nav-Bar -->
          <div class="col-xs-8 col-sm-4">
            <a href="#" class="show-sidebar">
              <i class="fa fa-bars"></i>
            </a>
            <!-- <div id="search">
              <input type="text" placeholder="search"/>
              <i class="fa fa-search"></i>
            </div> -->
          </div>
              <!-- Fim da caixa de pesquisa -->
          <div class="col-xs-4 col-sm-8 top-panel-right">
            <ul class="nav navbar-nav pull-right panel-menu">
              <li class="hidden-xs">
                <a href="#">
                  <i class="fa fa-bell"></i>
                  <span class="badge" ></span>
                </a>
              </li>
              <li class="hidden-xs">
                <a href="#">
                  <i class="fa fa-envelope"></i>
                  <span class="badge"></span>
                </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle account" data-toggle="dropdown">
                  <div class="avatar">
                    <img src="{{((Session::get('foto_url') == null) ? url('img/avatar.png'):Session::get('foto_url'))}}" class="img-rounded" alt="avatar" />
                  </div>
                  <i class="fa fa-angle-down pull-right"></i>
                  <div class="user-mini pull-right">
                    <span class="welcome">{{trans('geral.hello')}},</span>
                    <span>{{Session::get('nome_user')}}</span>
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{url('panel-control/perfil')}}">
                      <i class="fa fa-user"></i>
                      <span>{{trans('geral.menu_perfil')}}</span>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <a href="{{url('panel-control/ajuda')}}">
                      <i class="fa fa-support"></i>
                      <span>{{trans('geral.menu_suport')}}</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{url('panel-control/logout')}}">
                      <i class="fa fa-power-off"></i>
                      <span>{{trans('geral.menu_sair')}}</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
  <div class="row">
    <div id="sidebar-left" class="col-xs-2 col-sm-2">
      <ul class="nav main-menu">
        <li>
          <a href="{{url('panel-control/dashboard')}}" class="{{((Session::get('flag') == 1) ? 'active':'')}}">
            <i class="fa fa-dashboard"></i>
            <span class="hidden-xs">{{trans('geral.menu_side_dashboard')}}</span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle {{((Session::get('flag') > 1 && (Session::get('flag') <= 7)) ? 'active':'')}}">
            <i class="fa fa-leaf"></i>
             <span class="hidden-xs">{{trans('geral.menu_side_principal')}}</span>
             <i class="fa fa-caret-down pull-right"></i>
          </a>
          <ul class="dropdown-menu" style="{{((Session::get('flag') > 1 && (Session::get('flag') <= 7)) ? 'display:block;':'display:none;')}}">
            @if(Session::get('nivel_user') == 1)
              <li><a href="{{url('panel-control/fazenda')}}" class="{{((Session::get('flag') == 2) ? 'active':'')}}">{{trans('geral.menu_side_fazenda')}}<i class="fa fa-angle-right pull-right"></i></a></li>
              <li><a href="{{url('panel-control/usuario')}}" class="{{((Session::get('flag') == 3) ? 'active':'')}}">{{trans('geral.menu_side_usuario')}}<i class="fa fa-angle-right pull-right"></i></a></li>
            @endif
            <li><a href="{{url('panel-control/retiro')}}" class="{{((Session::get('flag') == 4) ? 'active':'')}}">{{trans('geral.menu_side_retiro')}}<i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a href="{{url('panel-control/piquete')}}" class="{{((Session::get('flag') == 5) ? 'active':'')}}">{{trans('geral.menu_side_piquete')}}<i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a href="{{url('panel-control/lote')}}" class="{{((Session::get('flag') == 6) ? 'active':'')}}">{{trans('geral.menu_side_lote')}}<i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a href="{{url('panel-control/animal')}}" class="{{((Session::get('flag') == 7) ? 'active':'')}}">{{trans('geral.menu_side_animal')}}<i class="fa fa-angle-right pull-right"></i></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!--Start Content-->
    <div id="content" class="col-xs-12 col-sm-10">
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
      <div id="ajax-content">
        @yield('content')
      </div>
    </div>
    <!--End Content-->
  </div>
</div>
<!--End Container-->
<!-- Get Translate File -->
@if(App::getLocale() == 'pt-br')
<script src="{{url('js/locale/pt_br.js')}}"></script>
@endif
<script src="{{url('js/alertas.js')}}" type="text/javascript" charset="utf-8"></script>
<script>
$(document).ready(function(){

  // $.ajax({
  //       type: "GET",
  //       url : pt_br.absolute_url+"/panel-control/mensagens/novoscomentarios"
  //   }).done(function(quantidade){
  //     if(quantidade != 0)
  //     $("#qtd_comentarios").text(quantidade);
  //     else
  //       $("#qtd_comentarios").text("");

  //   });

  //   $.ajax({
  //       type: "GET",
  //       url : pt_br.absolute_url+"/panel-control/pedidos/novospedidos"
  //   }).done(function(quantidade){
  //     if(quantidade != 0)
  //     $("#qtd_pedidos").text(quantidade);
  //     else
  //       $("#qtd_pedidos").text("");

  //   });

  // setInterval(function(){
  //   $.ajax({
  //       type: "GET",
  //       url : pt_br.absolute_url+"/panel-control/mensagens/novoscomentarios"
  //   }).done(function(quantidade){
  //     if(quantidade != 0)
  //     $("#qtd_comentarios").text(quantidade);
  //     else
  //       $("#qtd_comentarios").text("");

  //   });

  // },60000);

  // setInterval(function(){
  //   $.ajax({
  //       type: "GET",
  //       url : pt_br.absolute_url+"/panel-control/pedidos/novospedidos",
  //   }).done(function(quantidade){
  //     if(quantidade != 0)
  //     $("#qtd_pedidos").text(quantidade);
  //     else
  //       $("#qtd_pedidos").text("");

  //   });

  // },60000);
});
</script>
</body>
</html>
