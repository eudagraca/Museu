@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
            <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
            <li><a href="{{ route('rede.show', "comercial") }}">Comercial</a></li>
            <li><a href="">Redução de Perdas de energia  </a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Comercial</h4>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-large-left">Redução de Perdas de energia  </h4>

        <p class="uk-dropcap uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Nos últimos cinco anos, a Electricidade de Moçambique tem perdido uma média anual de 28% do total de energia disponível
            para ser distribuída aos diferentes segmentos de consumidores ao longo do território nacional.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-top uk-margin-large-right uk-text-justify">
            As perdas de energia subdividem-se em técnicas e não técnicas, sendo que as técnicas derivam do efeito de joule e
            ocorrem em toda cadeia de valor, ou seja, desde a produção, transporte e distribuição, enquanto as perdas não técnicas
            são causadas por roubo de energia, erros de facturação, entre outras ineficiências administrativas.
        </p>

        <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
            <a class="uk-inline" href="{{ asset('assets/images/perdas_de_energia.png') }}"
                data-caption="Redução de Perdas de energia ">
                <img src="{{ asset('assets/images/perdas_de_energia.png') }}" class="uk-border-rounded" width="750px"
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
