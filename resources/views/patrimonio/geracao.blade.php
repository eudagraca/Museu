@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">

    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-remove-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal" href="#">Patrimonio da rede eleéctrica da
                        EDM</a>
                </li>
                <li><a href="#">Geração</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove-top uk-margin-remove-right">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Geração</h4>


            <div uk-grid uk-lightbox="animation: slide">

                <div class="uk-grid-small uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/Central_Corumana.jpg') }}"
                                data-caption="Central Hídrica de Corumana">
                                <img src="{{ secure_asset('assets/images/centrais/Central_Corumana.jpg') }}" width="600"
                                    height="500" alt="" uk-cover>
                                <canvas width="600" height="500"></canvas>
                            </a>
                        </div>
                        <div>
                            <div class="uk-card-body uk-padding-remove-bottom">
                                <h4 class="uk-text-bold uk-margin-remove">Central de Corumana</h4>
                                <p class="uk-margin-small">
                                    <spa class="uk-text-bold">Localizacação</spa>: Distrito de Moamba, Provincia de
                                    Maputo
                                </p>
                                <p class="uk-margin-remove">
                                    <spa class="uk-text-bold">Capacidade instalada</spa>: 16.3MW
                                </p>
                                <p class="uk-margin-small-top">
                                    <spa class="uk-text-bold">Capacidade disponível</spa>: 16.0MW
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-grid-small uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/Central_Chicamba_II.jpg') }}"
                                data-caption="Central Hídrica de Chicamba">
                                <img src="{{ secure_asset('assets/images/centrais/Central_Chicamba_II.jpg') }}" width="600"
                                    height="500" alt="" uk-cover>
                                <canvas width="600" height="500"></canvas>
                            </a>
                        </div>
                        <div>
                            <div class="uk-card-body uk-padding-remove-bottom">
                                <h4 class="uk-text-bold uk-margin-remove">Central de Chicamba</h4>
                                <p class="uk-margin-small">
                                    <spa class="uk-text-bold">Localizacação</spa>: Distrito de Manica, Provincia de
                                    Manica
                                </p>
                                <p class="uk-margin-remove">
                                    <spa class="uk-text-bold">Capacidade instalada</spa>: 44 MW
                                </p>
                                <p class="uk-margin-small-top">
                                    <spa class="uk-text-bold">Capacidade disponível</spa>: 22 MW
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-grid-small uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <a class="uk-inline" href="{{ secure_asset('assets/images/missing.JPG') }}"
                                data-caption="Central Hídrica de Mavuzi">
                                <img src="{{ secure_asset('assets/images/missing.JPG') }}" width="600"
                                    height="500" alt="" uk-cover>
                                <canvas width="600" height="500"></canvas>
                            </a>
                        </div>
                        <div>
                            <div class="uk-card-body uk-padding-remove-bottom">
                                <h4 class="uk-text-bold uk-margin-remove">Central de Mavuzi</h4>
                                <p class="uk-margin-small">
                                    <spa class="uk-text-bold">Localizacação</spa>: Distrito de Sussundenga, Provincia de
                                    Manica
                                </p>
                                <p class="uk-margin-remove">
                                    <spa class="uk-text-bold">Capacidade instalada</spa>: 52 MW
                                </p>
                                <p class="uk-margin-small-top">
                                    <spa class="uk-text-bold">Capacidade disponível</spa>: 25 MW
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-grid-small uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/central_termica_gas.jpg') }}"
                                data-caption="Central Térmica-Gás de Temane">
                                <img src="{{ secure_asset('assets/images/centrais/central_termica_gas.jpg') }}" width="600"
                                    height="500" alt="" uk-cover>
                                <canvas width="600" height="500"></canvas>
                            </a>
                        </div>
                        <div>
                            <div class="uk-card-body uk-padding-remove-bottom">
                                <h4 class="uk-text-bold uk-margin-remove">Central Térmica-Gás</h4>
                                <p class="uk-margin-small">
                                    <spa class="uk-text-bold">Localizacação</spa>: Distrito de Inhassoro, Provincia de
                                    Inhambane
                                </p>
                                <p class="uk-margin-remove">
                                    <spa class="uk-text-bold">Capacidade instalada</spa>: 11.2 MW
                                </p>
                                <p class="uk-margin-small-top">
                                    <spa class="uk-text-bold">Capacidade disponível</spa>: 10.31 MW
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-grid-small uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/GTG.jpeg') }}"
                                data-caption="GTG - Beira">
                                <img src="{{ secure_asset('assets/images/centrais/GTG.jpeg') }}" width="600"
                                    height="500" alt="" uk-cover>
                                <canvas width="600" height="500"></canvas>
                            </a>
                        </div>
                        <div>
                            <div class="uk-card-body uk-padding-remove-bottom">
                                <h4 class="uk-text-bold uk-margin-remove">GTG - Beira</h4>
                                <p class="uk-margin-small">
                                    <spa class="uk-text-bold">Localizacação</spa>: Distrito da Beira, Provincia de
                                    Sofala
                                </p>
                                <p class="uk-margin-remove">
                                    <spa class="uk-text-bold">Capacidade instalada</spa>: 14.0 MW
                                </p>
                                <p class="uk-margin-small-top">
                                    <spa class="uk-text-bold">Capacidade disponível</spa>: 2.0 MW
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-grid-small uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/Central_terminca_Lichinga.JPG') }}"
                                data-caption="Central Térmica-Gás de Temane">
                                <img src="{{ secure_asset('assets/images/centrais/Central_terminca_Lichinga.JPG') }}" width="600"
                                    height="500" alt="" uk-cover>
                                <canvas width="600" height="500"></canvas>
                            </a>
                        </div>
                        <div>
                            <div class="uk-card-body uk-padding-remove-bottom">
                                <h4 class="uk-text-bold uk-margin-remove">Central  Hídrica de Lichinga</h4>
                                <p class="uk-margin-small">
                                    <spa class="uk-text-bold">Localizacação</spa>: Distrito da Lichinga, Provincia de
                                    Niassa
                                </p>
                                <p class="uk-margin-remove">
                                    <spa class="uk-text-bold">Capacidade instalada</spa>: 0.7 MW
                                </p>
                                <p class="uk-margin-small-top">
                                    <spa class="uk-text-bold">Capacidade disponível</spa>: 0.5 MW
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-grid-small uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/Central_Cuamba.jpg') }}"
                                data-caption="Central Térmica-Gás de Temane">
                                <img src="{{ secure_asset('assets/images/centrais/Central_Cuamba.jpg') }}" width="600"
                                    height="500" alt="" uk-cover>
                                <canvas width="600" height="500"></canvas>
                            </a>
                        </div>
                        <div>
                            <div class="uk-card-body uk-padding-remove-bottom">
                                <h4 class="uk-text-bold uk-margin-remove">Central  Hídrica de Cuamba</h4>
                                <p class="uk-margin-small">
                                    <spa class="uk-text-bold">Localizacação</spa>: Distrito da Cuamba, Provincia de
                                    Niassa
                                </p>
                                <p class="uk-margin-remove">
                                    <spa class="uk-text-bold">Capacidade instalada</spa>: 1.0 MW
                                </p>
                                <p class="uk-margin-small-top">
                                    <spa class="uk-text-bold">Capacidade disponível</spa>: 0.5 MW
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="uk-grid-small uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove" uk-grid>
                        <div class="uk-card-media-left uk-cover-container">
                            <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/GTGII_da_CTM.png') }}"
                                data-caption="Central Térmica-Gás de Temane">
                                <img src="{{ secure_asset('assets/images/centrais/GTGII_da_CTM.png') }}" width="600"
                                    height="500" alt="" uk-cover>
                                <canvas width="600" height="500"></canvas>
                            </a>
                        </div>
                        <div>
                            <div class="uk-card-body uk-padding-remove-bottom">
                                <h4 class="uk-text-bold uk-margin-remove">Central Térmica de Maputo</h4>
                                <p class="uk-margin-small">
                                    <spa class="uk-text-bold">Localizacação</spa>: Distrito da Maputo, Provincia de
                                    Maputo
                                </p>
                                <p class="uk-margin-remove">
                                    <spa class="uk-text-bold">Capacidade instalada</spa>: 106.0 MW
                                </p>
                                <p class="uk-margin-small-top">
                                    <spa class="uk-text-bold">Capacidade disponível</spa>: 106.0 MW
                                </p>
                            </div>
                        </div>
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
                    href="{{ route('patrimonio.show', "distribuicao") }}">Distribuição</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('patrimonio.show', "transmissao") }}">Transmissão</a></li>
        </ul>
    </div>
</div>
@endsection
