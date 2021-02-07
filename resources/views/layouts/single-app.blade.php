<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Museu EDM</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main data-uk-height-viewport="expand: true">
        <div class="uk-panel uk-padding-small uk-background-default uk-light">
            <a class="uk-logo" href="#"><img src="{{ asset('assets/images/logo-edm.png') }}" alt="" srcset=""></a>
        </div>
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">

            <nav class="uk-navbar-container" uk-navbar style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo uk-custom-text-white" href="#museu">Museu</a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-nav-parent-icon">

                        <li class="uk-active">
                            <a href="#">EDM</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active uk-text-normal"><a href="{{ route('apresentacao') }}">Apresentação da EDM</a></li>
                                    <li class="uk-active"><a href="{{ route('apresentacao.display', "modelo") }}">Modelo de governança</a></li>
                                    <li class="uk-active"><a href="{{ route('apresentacao.display', "organica") }}">Estrutura Orgânica</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="uk-active">
                            <a href="{{ route('rede.index') }}">Rede da EDM</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active uk-text-normal"><a href="{{ route('rede.show', "geracao") }}">1. Geração</a></li>
                                    <li class="uk-parent uk-active">
                                        <a href="{{ route('rede.show', "transporte") }}" class="uk-active">2. Transporte</a>
                                        <ul class="uk-nav-sub">
                                            <li class="uk-active"><a href="#">2.1. Infraestrutura</a></li>
                                            <li class="uk-active"><a href="#">2.2. Rede de transporte</a></li>
                                            <li class="uk-active"><a href="#">2.3. Centro de despacho</a></li>
                                        </ul>
                                    </li>
                                    <li class="uk-active"><a href="">3. Distribuição</a></li>
                                    <li class="uk-parent uk-active">
                                        <a href="#" class="uk-active">4. Comercial</a>
                                        <ul class="uk-nav-sub">
                                            <li class="uk-active"><a href="#">4.1. Serviço essencial</a></li>
                                            <li class="uk-active"><a href="#">4.2. Estrutura de tarifas</a></li>
                                            <li class="uk-active"><a href="#">4.3. Forma de atendimento</a></li>
                                            <li class="uk-active"><a href="#">4.4. Forma de pagamento</a></li>
                                            <li class="uk-active"><a href="#">4.5. Categorias tarifarias</a></li>
                                            <li class="uk-active"><a href="#">4.6. Redução de perdas de eneria</a></li>

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="uk-active uk-button-text"><a href="linha_do_tempo.html">Legislação</a></li>

                        <li class="uk-active uk-button-text"><a href="galeria.html">História de eletrificação</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="">História de geração</a></li>
                                    <li class="uk-active"><a href="">História de transporte</a></li>
                                    <li class="uk-active"><a href="">História de distribuição </a></li>
                                    <li class="uk-active"><a href="">História Comercial</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="uk-active uk-button-text"><a href="galeria.html">Galeria</a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="{{ route('galeria.show', 'comercial') }}">Área Comercial </a></li>
                                    <li class="uk-active"><a href="{{ route('galeria.show', 'geracao') }}">Geração</a></li>
                                    <li class="uk-active"><a href="{{ route('galeria.show', 'distribuicao') }}">Distribuição </a></li>
                                    <li class="uk-active"><a href="#">Transmissão </a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="uk-active uk-button-text"><a href="historias.html">Histórias de Vida</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        @yield('content')
    </main>

</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
