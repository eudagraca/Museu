@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-primary uk-margin-large-bottom uk-padding-remove-bottom">
        <div class="uk-container" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
            <nav class="uk-navbar uk-background-primary" uk-navbar style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="{{ route('home')}}">
                <h4 class="uk-heading-bullet uk-text-normal uk-margin-large-left uk-text-primary">Página inicial</h4>
            </a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active uk-button-text"><a href="#" uk-scroll>Apresentação</a></li>
                        <li class="uk-active">
                            <a href="#mapa" uk-scroll>Mapa de rede</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="uk-container uk-margin-large-bottom" id="museu">
        <div uk-grid>
            <div class="uk-width-expand@m uk-margin-large-right uk-margin-large-left">
                <h2 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-primary uk-margin-small-bottom">Apresentação</h2>
                <p class="uk-text uk-dropcap uk-margin-large-left uk-margin-large-right uk-text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Molestie at elementum eu facilisis sed. Egestas quis ipsum suspendisse ultrices. Ac odio tempor orci dapibus ultrices in iaculis nunc sed. Dictumst quisque sagittis purus sit amet volutpat consequat mauris nunc. Pharetra diam sit amet nisl suscipit adipiscing bibendum. Diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Tellus molestie nunc non blandit. Sem et tortor consequat id porta nibh venenatis cras sed. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Aenean et tortor at risus viverra adipiscing at in tellus. Nibh venenatis cras sed felis eget velit aliquet. Elementum sagittis vitae et leo duis ut diam. Enim ut tellus elementum sagittis. Adipiscing enim eu turpis egestas.
                </p>
            </div>
        </div>
        <hr class="uk-margin-medium-top">
    </div>

    {{-- Missao --}}
    <div class="uk-container uk-margin-large-bottom" id="mapa">

        <div uk-grid>
            <div class="uk-width-expand@m uk-margin-large-right uk-margin-large-left">
                <h2 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-primary uk-margin-small-bottom">Mapa de rede de distribuição</h2>
                <p class="uk-text uk-dropcap uk-margin-large-left uk-margin-large-right uk-text-justify">
                    As primeiras iniciativas visando estabelecer a iluminação pública nas principais povoações da costa
                    moçambicana datam da segunda metade do século XIX. Estes candeeiros, abastecidos a petróleo, foram pela
                    primeira vez usados no baile que o então Capitão-General de Moçambique, realizado para celebrar o
                    casamento do Rei D. Luís I de Portugal, em 18 de Julho de 18631. O mesmo viria a ocorrer em outras
                    povoações como, por exemplo, na Beira, tendo-se estabelecido 30 candeeiros públicos, abastecidos a
                    petróleo, logo em 18922.
                </p>
                <div class="uk-flex uk-flex-center">

                    <div id="test-target" class="uk-border-rounded uk-height-large uk-background-cover uk-light uk-flex uk-flex-top" uk-parallax="bgy: 0" style="width: 70%; background-image: url('{{ asset('assets/images/ponte_iluminada.jpg') }}');">

                        <h5 class="uk-border-rounded uk-overlay uk-overlay-primary uk-width-1-1@m uk-text-center uk-margin-auto uk-margin-auto-vertical uk-margin-remove-bottom">Headline</h5>

                    </div>
                </div>


            </div>
        </div>
        <hr class="uk-margin-medium-top">

    </div>
@endsection
