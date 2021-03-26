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
                transporte Sul</h4>

            <h3 class="uk-heading-divider  uk-text-bold uk-margin-small-top">Subestações</h3>
            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se1.png') }}"
                            data-caption="Subestação SE1 - Tem como fonte de alimentação a linha DL24 a partir da SE3.
No projecto Inicial a subestação erra composta por dois transformadores de 33/11KV-10MVA, que posteriormente foram movimentados para outras subestações.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se1.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE1</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, Kapfumo, Bairro Central
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: Tempo colonial e requalificada em
                            2003/2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR3 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 26.94MW em Dezembro de 2020
                        </p>
                    </div>
                </div>
            </div>

            <h3 class="uk-heading-divider  uk-text-bold uk-margin-large-top">Linhas</h3>

            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_ressano_garcia_macia.png') }}"
                            data-caption="LINHA BL5 SE’S RESSANO GARCIA-MACIA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_ressano_garcia_macia.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA BL5 SE’S RESSANO GARCIA-MACIA</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: SE Ressano
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: SE Dzimbene
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade da linha</spa>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Condutor</spa>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 187km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: BL5=59,24/12/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado + OPW
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
