@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top uk-margin-small-right">
    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-remove-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal" href="#">Patrimonio da rede eleéctrica da
                        EDM</a>
                </li>
                <li><a href="#">Transmissão</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove-top uk-margin-remove-right">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transmissão - Divisão de
                transporte Centro</h4>


            <h3 class="uk-heading-divider  uk-text-bold uk-margin-small-top">Subestações</h3>
            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_matambo.png') }}"
                            data-caption="SUBESTAÇÃO DE MATAMBO [BAY DA EDM] - Em Outubro de 2015 foi instalado o TR2 de 130MVA pertencente a EDM. O TR1 de 60MVA pertence a HCB e ambos alternativamente podem alimentar as linhas de 66kV e 33kV.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_matambo.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Matambo [BAY DA EDM]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Localidade de Matambo, Distrito de Marrara, Província de Tete
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1982
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 60MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 130MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [60/40/20MVA – 220/66/33kV]; TR2 [130/100/30MVA – 220/66/33/11kV]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 57.13MW correspondente a 63.48MVA/ Outubro 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente.
                        </p>
                    </div>
                </div>

            </div>

            <h3 class="uk-heading-divider  uk-text-bold uk-margin-large-top">Linhas</h3>

            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_b10_dondo.png') }}"
                            data-caption="LINHA B10 [S/E CHIBATA – S/E DONDO]">
                            <img src="{{ secure_asset('assets/images/centrais/linha_b10_dondo.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA B10 [S/E CHIBATA – S/E DONDO]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: S/E de Chibata – S/E de Dondo
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2018
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 238MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 262km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Condor
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico e vidros
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: OPGW
                        </p>
                    </div>
                </div>


            </div>
        </div>


    </div>
    <hr>
    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('patrimonio.show', "geracao") }}">Geração</a></li>
        </ul>
    </div>
</div>
@endsection
