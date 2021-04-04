<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Museu Virtual da EDM</title>

        <!-- Styles -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/custom.css') }}" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            <main data-uk-height-viewport="expand: true">
                <div class="uk-panel uk-padding-small uk-background-default uk-light">
                    <a class="uk-logo uk-text-normal" href="#"><img src="{{ secure_asset('assets/images/logo_edm.png') }}"
                            alt="" srcset=""></a>
                </div>
                <div
                    uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">

                    <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo uk-custom-text-white" href="/">INÍCIO</a>
                        </div>
                        <div class="uk-navbar-right">
                            <ul class="uk-navbar-nav uk-visible@s uk-nav-parent-icon">

                                <li class="uk-active uk-text-uppercase">
                                    <a href="{{ route('museu.show', 'details') }}">MUSEU<span
                                            uk-icon="icon: chevron-down"></span></a>
                                    <div class="uk-navbar-dropdown uk-margin-remove-top">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">

                                            <li class="uk-active uk-text-normal"><a
                                                    href="{{ route('museu.show', 'details') }}">MUSEU</a></li>

                                            <li class="uk-active uk-text-normal"><a
                                                    href="{{ route('museu.show', 'equipe') }}">Equipa técnica</a></li>

                                        </ul>
                                    </div>
                                </li>
                                <li class="uk-active uk-text-uppercase">
                                    <a href="{{ route('apresentacao') }}">Apresentação da Empresa<span
                                            uk-icon="icon: chevron-down"></span></a>
                                    <div class="uk-navbar-dropdown uk-margin-remove-top">
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li class="uk-active uk-text-normal uk-parent"><a
                                                    href="{{ route('apresentacao') }}">Apresentação da Empresa</a>
                                            </li>
                                            <li class="uk-active uk-text-normal uk-parent"><a
                                                    href="{{ route('apresentacao.display', 'missao') }}">Missão, visão e
                                                    valores</a>
                                            </li>

                                            <li class="uk-parent uk-active">
                                                <a class="uk-active" href="{{ route('rede.index') }}">Plano
                                                    operacional</a>
                                                <ul class="uk-nav-sub">
                                                    <li class="uk-active uk-text-normal"><a
                                                            href="{{ route('rede.show', "geracao") }}">1. Geração</a>
                                                    </li>
                                                    <li class="uk-parent uk-active">
                                                        <a href="{{ route('rede.show', "transporte") }}"
                                                            class="uk-active">2.
                                                            Transporte</a>

                                                    </li>
                                                    <li class="uk-active"><a
                                                            href="{{ route('rede.show', "distribuicao") }}">3.
                                                            Distribuição</a></li>
                                                    <li class="uk-parent uk-active">
                                                        <a href="{{ route('rede.show', "comercial") }}"
                                                            class="uk-active">4.
                                                            Comercial</a>
                                                        {{-- <ul class="uk-nav-sub">
                                                            <li class="uk-active"><a
                                                                    href="{{ route('rede.show', "categoriastarifarias") }}">4.1.
                                                        Categorias tarifarias</a></li>
                                                    <li class="uk-active"><a
                                                            href="{{ route('rede.show', "perdasdeenergia") }}">4.1.
                                                            Redução de perdas de energia</a></li>

                                                </ul> --}}
                                            </li>
                                            <ul>
                                </li>
                            </ul>
                        </div>
                        </li>

                        <li class="uk-active uk-button-text uk-text-uppercase"><a
                                href="{{ route('historia.index') }}">História
                                de
                                eletrificação<span uk-icon="icon: chevron-down"></span></a>
                            <div class="uk-navbar-dropdown uk-margin-remove-top">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="{{ route('historia.index') }}">História de
                                            eletrificação</a>
                                    </li>
                                    <li class="uk-active"><a href="{{ route('eletrificacao.geracao') }}">História de
                                            geração</a>
                                    </li>
                                    <li class="uk-active"><a href="{{ route('eletrificacao.transporte') }}">História de
                                            transporte</a></li>
                                    <li class="uk-active"><a href="{{ route('eletrificacao.distribuicao') }}">História
                                            de
                                            distribuição </a></li>
                                    <li class="uk-active"><a href="{{ route('eletrificacao.comercial') }}">História de
                                            comercialização </a></li>

                                    <li class="uk-active"><a href="{{ route('eletrificacao.credelec') }}">Sistema de
                                            Pré-pagamento de Electricidade</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="uk-active uk-button-text uk-text-uppercase"><a href="#">Património da rede primária
                                da EDM<span uk-icon="icon: chevron-down"></span></a>


                            <div class="uk-navbar-dropdown uk-margin-remove-top">

                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a
                                            href="{{ route('patrimonio.show', 'geracao') }}">Geração</a>
                                    </li>
                                    <li class="uk-parent ">
                                        <a class="uk-active uk-text-black uk-text-normal uk-text-uppercase"
                                            href="#">Transmissão</a>
                                        <ul class="uk-nav-sub">
                                            <li class="uk-active uk-text-normal uk-text-uppercase"><a
                                                    href="{{ route('patrimonio.show', 'sul') }}">1.
                                                    DIVISÃO DE TRANSPORTE SUL</a>
                                            </li>
                                            <li class="uk-active uk-text-normal uk-text-uppercase"><a
                                                    href="{{ route('patrimonio.show', 'centro') }}">2.
                                                    DIVISÃO DE TRANSPORTE CENTRO</a>
                                            </li>
                                            <li class="uk-active uk-text-normal uk-text-uppercase"><a
                                                    href="{{ route('patrimonio.show', 'centro_norte') }}">3.
                                                    DIVISÃO DE TRANSPORTE CENTRO NORTE</a>
                                            </li>
                                            {{--  <li class="uk-active uk-text-normal uk-text-uppercase"><a
                                                    href="{{ route('patrimonio.show', 'norte') }}">4.
                                                    DIVISÃO DE TRANSPORTE NORTE</a>
                                            </li>  --}}
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                        </li>

                        <li class="uk-active uk-button-text uk-text-uppercase"><a
                                href="{{ route('linha_do_tempo')}}">Linha do
                                tempo</a></li>

                        <li class="uk-active uk-button-text uk-text-uppercase"><a
                                href="{{ route('historia.user') }}">Histórias
                                de
                                Vida</a></li>
                        <li class="uk-active uk-button-text uk-text-uppercase"><a
                                href="{{ route('galeria.index') }}">GALERIA</a></li>
                        {{-- <li class="uk-active uk-text-normal"><a href="{{ route('museu.show', 'equipe') }}">Equipa
                        técnica</a>
                        </li> --}}
                        <li class="uk-active uk-button-text uk-text-uppercase"><a
                                href="{{ route('contacto') }}">Contacto</a>
                        </li>
                        </ul>

                        <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon
                            uk-toggle="target: #sidenav"></a>

                </div>
                </nav>
        </div>
        @yield('content')
        </main>

        <div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
            <div class="uk-offcanvas-bar">
                <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="multiple: true">
                    <li class="uk-active uk-text-uppercase"><a href="#">INICIO</a></li>
                    <li class="uk-parent">
                        <a href="#" class="uk-active uk-text-normal">MUSEU</a>
                        <ul class="uk-nav-sub">
                            <li class="uk-active uk-text-normal uk-text-uppercase"><a
                                    href="{{ route('museu.show', 'details') }}">MUSEU</a></li>
                            <li class="uk-active uk-text-normal uk-text-uppercase"><a
                                    href="{{ route('museu.show', 'missao') }}">Missão</a></li>
                            <li class="uk-active uk-text-normal uk-text-uppercase"><a
                                    href="{{ route('museu.show', 'equipe') }}">Equipa técnica</a></li>

                        </ul>
                    </li>

                    <li class="uk-parent">
                        <a href="#" class="uk-text-uppercase">Apresentação da Empresa</a>
                        <ul class="uk-nav-sub">
                            <li class="uk-active uk-text-normal uk-text-uppercase uk-parent"><a
                                    href="{{ route('apresentacao') }}">Apresentação da Empresa</a>
                            </li>
                            <li class="uk-active uk-text-normal uk-parent uk-text-uppercase"><a
                                    href="{{ route('apresentacao.display', 'missao') }}">Missão, visão e
                                    valores</a>
                            </li>

                            <li class="uk-parent ">
                                <a class="uk-active uk-text-normal uk-text-uppercase"
                                    href="{{ route('rede.index') }}">Plano
                                    operacional</a>
                                <ul class="uk-nav-sub">
                                    <li class="uk-active uk-text-normal uk-text-uppercase"><a
                                            href="{{ route('rede.show', "geracao") }}">1. Geração</a>
                                    </li>
                                    <li class="uk-parent uk-active uk-text-uppercase">
                                        <a href="{{ route('rede.show', "transporte") }}" class="uk-active">2.
                                            Transporte</a>

                                    </li>
                                    <li class="uk-active uk-text-uppercase"><a
                                            href="{{ route('rede.show', "distribuicao") }}">3.
                                            Distribuição</a></li>
                                    <li class="uk-parent uk-active uk-text-uppercase">
                                        <a href="{{ route('rede.show', "comercial") }}" class="uk-active">4.
                                            Comercial</a>

                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="uk-parent uk-text-uppercase">
                        <a href="#">História de eletrificação</a>
                        <ul class="uk-nav-sub">
                            <li class="uk-active"><a href="{{ route('historia.index') }}">História de
                                    eletrificação</a>
                            </li>
                            <li class="uk-active"><a href="{{ route('eletrificacao.geracao') }}">História de
                                    geração</a>
                            </li>
                            <li class="uk-active"><a href="{{ route('eletrificacao.transporte') }}">História de
                                    transporte</a></li>
                            <li class="uk-active"><a href="{{ route('eletrificacao.distribuicao') }}">História
                                    de
                                    distribuição </a></li>
                            <li class="uk-active"><a href="{{ route('eletrificacao.comercial') }}">História de
                                    comercialização </a></li>

                            <li class="uk-active"><a href="{{ route('eletrificacao.credelec') }}">Sistema de
                                    Pré-pagamento de Electricidade</a></li>
                        </ul>
                    </li>

                    <li class="uk-parent uk-text-uppercase"><a href="#">Património da rede primária da EDM</a>

                        <ul class="uk-nav-sub">
                            <li class="uk-active"><a href="{{ route('patrimonio.show', 'geracao') }}">Geração</a>
                            </li>

                            <li class="uk-parent ">
                                <a class="uk-active uk-text-normal uk-text-uppercase"
                                    href="{{ route('patrimonio.show', 'transmissao') }}">Transmissão</a>
                                <ul class="uk-nav-sub">
                                    <li class="uk-active uk-text-normal uk-text-uppercase"><a
                                            href="{{ route('rede.show', 'geracao') }}">1.
                                            Geração</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>



                    <li class="uk-active uk-button-text uk-text-uppercase"><a href="{{ route('linha_do_tempo')}}">Linha
                            do
                            tempo</a></li>

                    <li class="uk-active uk-button-text uk-text-uppercase"><a
                            href="{{ route('historia.user') }}">Histórias de
                            Vida</a></li>
                    <li class="uk-active uk-button-text uk-text-uppercase"><a
                            href="{{ route('galeria.index') }}">GALERIA</a></li>
                    <li class="uk-active uk-button-text uk-text-uppercase"><a
                            href="{{ route('contacto') }}">Contacto</a></li>
                </ul>
            </div>
        </div>

        <div class=" uk-background-secondary">
            <p class="uk-text-center uk-custom-text-white uk-margin-remove uk-padding-small uk-text-light">
                &copy; Todos direitos reservados
                <script>
                    document.write(new Date().getFullYear());
                </script>, Electricidade de Moçambique.
            </p>
        </div>
        <script src="{{ secure_asset('js/app.js') }}" defer></script>
    </body>

</html>
