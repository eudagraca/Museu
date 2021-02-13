<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ secure_asset('css/custom.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div id="app">

    {{-- <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">

        <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="{{ route('home')}}"><img src="{{ URL::secure_asset('storage/local/images/logo-edm.png') }}" alt="" srcset=""></a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-active uk-button-text"><a href="{{ route('linha_de_tempo') }}">Linha do tempo</a></li>
                    <li class="uk-active">
                        <a href="#">Informação institucional</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="barragem_chicamba.html">Barragem de Chicamba</a></li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="uk-active uk-button-text"><a href="galeria.html">Galeria</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Área Comercial <span uk-icon="move"></span></a></li>
                                <li class="uk-active"><a href="#">Geração <span uk-icon="cog"></span></a></li>
                                <li class="uk-active"><a href="#">Distribuição <span uk-icon="nut"></span></a></li>
                                <li class="uk-active"><a href="#">Transmissão <span uk-icon="bolt"></span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="uk-active uk-button-text"><a href="historias.html">Histórias de Vida</a></li>


                     <!-- Authentication Links -->
                     @guest
                     @if (Route::has('login'))
                         <li>
                             <a href="{{ route('login') }}">{{ __('Log In') }}</a>
                         </li>
                     @endif
                 @else
                     <li>
                         <a href="#">
                             {{ Auth::user()->name }}
                         </a>
                         <div class="uk-navbar-dropdown">
                             <ul class="uk-nav uk-navbar-dropdown-nav">
                                 <li>
                                     <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                         {{ __('Log Out') }}
                                     </a>

                                     <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                           style="display: none;">
                                         @csrf
                                     </form>
                                 </li>
                             </ul>
                         </div>
                     </li>
                 @endguest
                </ul>
            </div>
        </nav>
    </div> --}}


    <main data-uk-height-viewport="expand: true">
        @yield('content')
    </main>


<div class=" uk-background-secondary">
    <p class="uk-text-center uk-margin-remove uk-padding-small uk-text-light">
        &copy; Todos direitos reservados
        <script>document.write(new Date().getFullYear());</script>, Electricidade de Moçambique.
    </p>
</div>
</div>
<script src="{{ secure_asset('js/app.js') }}" defer></script>
</body>
</html>
