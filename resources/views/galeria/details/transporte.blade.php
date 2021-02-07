@extends('layouts.app')

@section('content')
<div class="uk-section uk-margin-large-bottom uk-padding-remove-bottom">
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
            <h2 class="uk-heading-bullet uk-text-bolder uk-text-primary">Transporte</h2>

            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Por colocar
            </p>

        </div>

        <div class="uk-width-1-3@m">
            <img data-src="{{ asset('assets/images/subestacao.jpeg') }}" class="uk-border-rounded"
                data-srcset="{{ asset('assets/images/subestacao.jpeg') }}" sizes="(min-width: 650px) 650px, 100vw"
                width="550" height="433" alt="" uk-img>
        </div>
    </div>
    <!-- Galeria -->
    <hr class="uk-margin-medium-top">

    <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide"
        uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

        <div>
            <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}"
                data-caption="Caption 1">
                <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
            </a>
        </div>

    </div>

</div>
@endsection
