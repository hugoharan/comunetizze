<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comunetizze | @yield('title') </title>

    <!-- Bootstrap -->
    <link href="{{ asset('theme/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('theme/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700i&display=swap" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset('theme/css/custom.min.css') }}" rel="stylesheet">
    
    <!-- Custom Style -->
    @yield('styles')

  </head>

  <body class="nav-sm footer_fixed">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ URL::to('/') }}" class="site_title logo-lg"><img src="{{ asset('img/logo-gde.png')}}" alt="Logotipo Comunetizze"></a>
              <a href="{{ URL::to('/') }}" class="site_title logo-sm"><img src="{{ asset('img/logo-pq.png')}}" alt="Logotipo Comunetizze"></a>
            </div>
            <div class="clearfix"></div>
            <hr class="sep" />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li class="@yield('menu-perfil')"><a href="{{route('meuperfil')}}"><img src="{{ asset('img/menu1.png') }}" alt="item-menu">Perfil</a></li>
                  <li class="@yield('menu-conexoes')"><a href="{{route('home')}}"><img src="{{ asset('img/menu2.png') }}" alt="item-menu">Conexões</a></li>
                  <li class="@yield('menu-fit')"><a href="{{route('fit')}}"><img src="{{ asset('img/menu3.png') }}" alt="item-menu">Product Fit</a></li>
                  <li class="@yield('menu-afiliados')"><a href="{{route('afiliados')}}"><img src="{{ asset('img/menu4.png') }}" alt="item-menu">Afiliados</a></li>
                  <li class="@yield('menu-solicitacoes')"><a href="{{route('solicitacoes')}}"><img src="{{ asset('img/menu5.png') }}" alt="item-menu">Solicitações</a></li>
                  <li class="@yield('menu-grupos')"><a href="{{route('grupos')}}"><img src="{{ asset('img/menu6.png') }}" alt="item-menu">Grupos</a></li>
                  <li class="@yield('menu-config')"><a href="{{route('config')}}"><img src="{{ asset('img/menu7.png') }}" alt="item-menu">Config</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="right_col" role="main">
          
            <div class="page-title container-fluid">
              <div class="title_left col-md-4">
                <img src="{{ asset('img/logo-azul.png')}}" alt="" style="margin:1em;">
              </div>
              <div class="title_center col-md-4">
                <div class=" form-group top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Pesquisar">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                  </div>
                </div>
              </div>
              <div class="title_right col-md-4">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-secondary dropdown-toggle btn-user" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <img src="{{ asset(Auth::user()->path.Auth::user()->filename)}}" class="img-user" alt="">{{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu">
                       <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                          Sair
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </div>
                  </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              @yield('content')
            </div>
          </div>
        </div>
        <!-- /page content -->

        <footer>
          <div class="pull-right">
            Comunetizze. Todos os direitos reservados.
          </div>
          <div class="clearfix"></div>
        </footer>
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('theme/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
   <script src="{{ asset('theme/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('theme/js/custom.min.js') }}"></script>
    @yield('scripts')
  </body>
</html>
