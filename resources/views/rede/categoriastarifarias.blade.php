@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
            <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
            <li><a href="{{ route('rede.show', "comercial") }}">Comercial</a></li>
            <li><a href="">Categorias Tarifárias </a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Comercial</h4>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-large-left">Categorias Tarifárias </h4>

        <p class="uk-dropcap uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            A EDM dispõe de diferentes tarifas, dependendo da natureza dos consumos e ajustando-se às necessidades dos clientes
            conforme apresentado na tabela abaixo.
        </p>

        <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
            <a class="uk-inline" href="{{ asset('assets/images/categorias_tarifarias.png') }}"
                data-caption="Categorias Tarifárias">
                <img src="{{ asset('assets/images/categorias_tarifarias.png') }}" class="uk-border-rounded" width="750px"
                    height="133px" alt="" uk-img></a>
        </div>

        <hr>

        <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-large-left">
            <ul class="uk-nav uk-nav-default uk-align-left">
                <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "comercial") }}">Comercial</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "servicos") }}">Serviço essencial</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "estruturaclientes") }}">Estrutura de clientes</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "atendimentoaocliente") }}">Forma de atentimento</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "formasdepagamento") }}">Forma de pagamento</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "categoriastarifarias") }}">Categorias tarifarias</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "perdasdeenergia") }}">Redução de perdas de energia</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
