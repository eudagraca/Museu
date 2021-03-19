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
                        href="{{ route('rede.show', 'transporte') }}">Transporte</a></li>
                <li><a href="#">Centro Nacional do Despacho </a></li>
            </ul>
        </div>
        <div uk-grid class="uk-margin-remove">
            <div class="uk-width-expand@m uk-width-1-1@m">
                <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Centro Nacional do Despacho 
                </h4>
                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    O Centro Nacional de Despacho é uma alavanca fundamental para a gestão global do Sistema Eléctrico Nacional e para a sua interligação com as redes dos países vizinhos e centrais de produção. 
                </p>
                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    Actualmente, a EDM opera com um Centro de Despacho, que assegura apenas o controlo centralizado da rede de transporte da zona sul, incluindo a monitorização das interligações com a Eskom e Eswatine, cuja entrada em funcionamento data de Março de 2009. 
                </p>
                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    Com os diversos projectos de geração e de transporte, previstos para o presente quinquénio, a EDM é desafiada a acelerar a implementação do projecto do Centro Nacional de Despacho, acompanhado de dois centros de controlo regional, para desempenhar, de forma eficiente e segura, o seguinte papel: 
                </p>
                <ul class="uk-text uk-margin-left uk-text-justify">
                    <li class="uk-margin-top">Monitoria e Controlo da rede nacional de transporte (533kV, 400kV, 275kV, 220kV,110kV e 66kV);</li>
                    <li class="uk-margin-small">Monitoria e controlo da geração e balanço da procura e oferta (Controlo de frequência);</li>
                    <li class="uk-margin-small">Monitoria e controlo do fluxo energético regional, de acordo com os procedimentos da SAPP, etc. </li>
                </ul>
                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    Vantagens do Centro Nacional de Despacho:
                </p>
                <ul class="uk-text uk-margin-left uk-text-justify">
                    <li class="uk-margin-top">Controlo da rede em tempo real;</li>
                    <li class="uk-margin-small">Redução da indisponibilidade do sistema;</li>
                    <li class="uk-margin-small">Aumento da fiabilidade;  </li>
                    <li class="uk-margin-small">Balanço energético; e  </li>
                    <li class="uk-margin-small">Redução de operadores nas subestações de risco de acidentes.</li>
                </ul>

            </div>

            <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                <a class="uk-inline uk-margin-right uk-margin-top"
                    href="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}"
                    data-caption="Centre de despacho de Maputo">
                    <img src="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}" class="uk-border-rounded"
                        width="350px" height="50px" alt="" uk-img></a>

            </div>
        </div>
    </div>
    <hr>

    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>

            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('rede.show', "infraestrutura") }}">Infra-estrutura</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('rede.show', "transporte") }}">Transporte</a></li>

        </ul>
    </div>

</div>
@endsection
