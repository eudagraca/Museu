@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-remove-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('apresentacao') }}">Apresentação
                        da
                        EDM</a>
                </li>
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('rede.index') }}">Plano
                        operacional</a></li>
                <li><a class="uk-text-primary uk-active uk-text-normal"
                        href="{{ route('rede.show', 'comercial') }}">Comercial</a></li>
                <li><a href="#">Categorias Tarifárias</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Comercial</h4>
            <h5 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Categorias Tarifárias </h5>

            <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
                A EDM dispõe de diferentes tarifas, dependendo da natureza dos consumos e ajustando-se às necessidades
                dos clientes
                conforme apresentado na tabela abaixo.
            </p>

            <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
                <a class="uk-inline" href="{{ secure_asset('assets/images/categorias_tarifarias.png') }}"
                    data-caption="Categorias Tarifárias">
                    <img src="{{ secure_asset('assets/images/categorias_tarifarias.png') }}" class="uk-border-rounded"
                        width="750px" height="133px" alt="" uk-img></a>
            </div>

            <hr>

            <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
                <ul class="uk-nav uk-nav-default uk-align-left">
                    <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                            href="{{ route('rede.show', "categoriastarifarias") }}">Categorias tarifarias</a></li>
                    <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                            href="{{ route('rede.show', "perdasdeenergia") }}">Redução de perdas de energia</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection