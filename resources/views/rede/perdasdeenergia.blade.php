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
                <li><a href="#">Redução de Perdas de energia</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m">
            <h5 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Redução de Perdas de energia
            </h5>

            <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
                Nos últimos cinco anos, a Electricidade de Moçambique tem perdido uma média anual de 28% do total de
                energia disponível
                para ser distribuída aos diferentes segmentos de consumidores ao longo do território nacional.
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                As perdas de energia subdividem-se em técnicas e não técnicas, sendo que as técnicas derivam do efeito
                de joule e
                ocorrem em toda cadeia de valor, ou seja, desde a produção, transporte e distribuição, enquanto as
                perdas não técnicas
                são causadas por roubo de energia, erros de facturação, entre outras ineficiências administrativas.
            </p>

            <div class="uk-flex-middle uk-flex uk-align-center uk-margin-remove-bottom" uk-lightbox="animation: slide">
                <a class="uk-inline uk-align-center" href="{{ secure_asset('assets/images/perdas_de_energia.png') }}"
                    data-caption="Redução de Perdas de energia ">
                    <img src="{{ secure_asset('assets/images/perdas_de_energia.png') }}" class="uk-border-rounded"
                        width="850px" height="133px" alt="" uk-img></a>

            </div>
            <p class="uk-text-center uk-margin-remove-top uk-text-italic">Redução de Perdas de energia</p>
        </div>
    </div>
    <hr>

    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('rede.show', "categoriastarifarias") }}">Categorias tarifarias</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('rede.show', "perdasdeenergia") }}">Redução de perdas de energia</a></li>
        </ul>
    </div>
</div>
@endsection
