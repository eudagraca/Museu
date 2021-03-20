<!DOCTYPE html>
<html>
    <head>
        <title>Museu EDM</title>

        <meta charset="UTF-8">
        <meta name="description" content="Museu da EDM">
        <meta name="keywords" content="Admin,Panel,HTML,CSS,XML,JavaScript">
        <meta name="author" content="Euclidio Venancio">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" ></script>
    </head>
    <body>
        <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">
                        <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon ></a>
                        <a href="#" class="uk-navbar-item uk-logo uk-text-small">
                            Área administrativa do Museu
                        </a>
                    </div>
                    <div class="uk-navbar-right uk-light">
                        <ul class="uk-navbar-nav">
                            <li class="uk-active">
                                <a href="#">{{ Auth::user() }} &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="pos: bottom-right; mode: click; offset: -17;">
                                   <ul class="uk-nav uk-navbar-dropdown-nav">
                                       <li class="uk-nav-header">Opções</li>
                                       <li><a href="#">Editar perfil</a></li>
                                       <li class="uk-nav-header">Acção</li>
                                       <li><a href="#">Terminar a sessão</a></li>
                                   </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div id="sidebar" class="tm-sidebar-left uk-background-default">
            <center>
                <div class="user">
                    <img id="avatar" width="180px" class="uk-border-rounded" src="{{ URL::asset('storage/local/images/logo-edm.png') }}" />
                    <div class="uk-margin-top"></div>
                    <div id="name" class="uk-text-truncate">{{ Auth::user() }}</div>
                    <div id="email" class="uk-text-truncate">{{ Auth::user() }}</div>
                    <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success"></span>
                </div>
                <br />
            </center>
            <ul class="uk-nav uk-nav-default">

                <li class="uk-nav-header">
                    Destaque
                </li>
                <li><a href="{{ route('destaque.index') }}">Lista</a></li>
                <li><a href="{{ route('destaque.create') }}">Adicionar</a></li>

                <li class="uk-nav-header">
                    Galeria
                </li>
                <li><a href="{{ route('galeria.index') }}">Lista de imagens</a></li>
                <li><a href="{{ route('galeria.create') }}">Adicionar nova</a></li>


                <li class="uk-nav-header">
                    Página
                </li>

                <li class="uk-parent">
                    <li><a href="{{ route('pagina.index') }}">Lista de páginas</a></li>
                    <li><a href="#">Adicionar nova</a></li>
                    <ul class="uk-nav-sub">
                        <li><a href="{{ route('institucional.create') }}">Institucional</a></li>
                        <li><a href="{{ route('pagina.create') }}">Normal</a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <div class="content-padder content-background">
            <div class="uk-section-small uk-section-default header">
                <div class="uk-container uk-container-large">
                    <h3 class="uk-text-bold uk-text-muted"><span class="ion-speedometer"></span> @yield('titulo')</h3>

                    <ul class="uk-breadcrumb">
                        <li><a href="{{ route('admin') }}">Home</a></li>
                        <li><span href="">@yield('pagina')</span></li>
                    </ul>
                </div>
            </div>
                <div class="uk-container uk-container-large uk-background-white">
                    @yield('body-content')
                </div>
        </div>
		<!-- Load More Javascript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.min.js" integrity="sha256-UGwvyUFH6Qqn0PSyQVw4q3vIX0wV1miKTracNJzAWPc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js" integrity="sha256-rqEXy4JTnKZom8mLVQpvni3QHbynfjPmPxQVsPZgmJY=" crossorigin="anonymous"></script>
		<script src="{{ asset('js/notyf.min.js') }}"></script>
		<script src="{{ asset('js/script.js') }}"></script>
		<!-- Required Overall Script -->
    </body>
</html>
