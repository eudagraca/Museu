@extends('layouts.app')

@section('content')
<div class="uk-section uk-section-primary uk-margin-large-bottom uk-padding-remove-bottom">
    <div class="uk-container" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
        <nav class="uk-navbar uk-background-primary" uk-navbar style="position: relative; z-index: 980;">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="{{ route('home') }}">
                    <h4 class="uk-heading-bullet uk-text-normal uk-margin-large-left uk-text-primary">Museu
                    </h4>
                </a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-active uk-button-text"><a
                            href="{{ route('galeria.show', 'comercial') }}">Comercialização</a></li>
                    <li class="uk-active uk-button-text"><a href="{{ route('galeria.show', 'distribuicao') }}">
                            Distribuição</a></li>
                    <li class="uk-active">
                        <a href="{{ route('galeria.show', 'geracao') }}">Geração</a>
                    </li>
                    <li class="uk-active uk-button-text"><a href="{{ route('galeria.show', 'transporte') }}">
                            Transporte</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>


<div class="uk-container uk-margin-large-bottom">

    <div uk-grid>

        <div class="uk-width-expand@m">
            <h2 class="uk-heading-bullet uk-text-bolder uk-text-primary">Distribuição</h2>

            <p class="uk-dropcap uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                A Distribuição de energia andou estritamente interligada a Geração de corrente eléctrica. Em Maputo na
                época da Delagoa Bay e subsequentemente com os Serviços Municipalizados de Água e Electricidade, a
                energia electrica era de corrente continua, depois era transportada por intermedio do cabo vulcanizado
                até aos circuitos. Nessa altura a distribuição era feita através dos condutores de cobre, assentes nos
                postes de aço, copos de porcelana até ao consumidor. Os circuitos tinham uma particularidade de disporem
                algumas saídas de corrente alternada em número bastante reduzido para instalações comerciais para
                ensaiar eletrodomésticos que utilizavam aquela corrente. O caso emblemático era do Dr. Simões que
                pretendendo da corrente alterna para a sua clínica havia adquirido um Transformador estático e colocado
                na Central da 24 de Julho. Dali saia uma linha à clinica para raio-x e outros exames. Contrariamente, os
                restantes consumidores possuíam nas instalações conversores que adaptava a corrente contínua de modo a
                ser utilizada.
            </p>
        </div>

        <div class="uk-width-1-3@m">
            <img data-src="{{ secure_asset('('assets/images/subestacao.jpeg') }}" class="uk-border-rounded"
                data-srcset="{{ secure_asset('('assets/images/subestacao.jpeg') }}" sizes="(min-width: 650px) 650px, 100vw"
                width="550" height="433" alt="" uk-img>
        </div>
    </div>
    <!-- Galeria -->
    <hr class="uk-margin-medium-top">

    <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide"
        uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

        <div>
            <a class="uk-inline" href="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

    </div>

</div>
@endsection
