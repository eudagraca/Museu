@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top uk-margin-small-right">
    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-remove-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal" href="#">Patrimonio da rede eléctrica da
                        EDM</a>
                </li>
                <li><a href="#">Transmissão</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove-top uk-margin-remove-right">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transmissão - Divisão de
                transporte Centro Norte</h4>
            <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                <li class="uk-h2"><a href="#">Subestações</a></li>
                <li><a href="#">Linhas</a></li>
            </ul>
            <ul class="uk-switcher uk-margin">
                <li>
                    <h3 class="uk-heading-divider  uk-text-bold uk-margin-small-top">Subestações</h3>
                    <div uk-grid uk-lightbox="animation: slide">
                        <div class="uk-grid-small uk-width-1-2@m">
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove"
                                uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <a class="uk-inline"
                                        href="{{ secure_asset('assets/images/centrais/subestacao_ceramica.png') }}"
                                        data-caption="SUBESTAÇÃO DA CERÂMICA">
                                        <img src="{{ secure_asset('assets/images/centrais/subestacao_ceramica.png') }}"
                                            width="600" height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">Subestação da Cerâmica</h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Zona da Cerâmica a 800m da EN
                                            7, no
                                            distrito de Nicoadala
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Potência instalada actual:</spa> 100MVA
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/33kV
                                        </p>

                                        <p class="uk-margin-small-top">
                                            <button
                                                class="uk-button uk-align-right uk-margin-remove uk-text-primary uk-button-text">Mais
                                                detalhes</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid-small uk-width-1-2@m">
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove"
                                uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <a class="uk-inline"
                                        href="{{ secure_asset('assets/images/centrais/subestacao_alto_molocue.png') }}"
                                        data-caption="Subestação da Alto Molocué">
                                        <img src="{{ secure_asset('assets/images/centrais/subestacao_alto_molocue.png') }}"
                                            width="600" height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">Subestação da Alto Molocué</h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Alto Molocué, ao
                                            longo da Estrada
                                            nacional nr.1
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Potência instalada actual:</spa> 251MVA
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/110/33kV
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <button
                                                class="uk-button uk-align-right uk-margin-remove uk-text-primary uk-button-text">Mais
                                                detalhes</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>
                <li>
                    <h3 class="uk-heading-divider uk-width-1-1@s uk-text-bold uk-margin-top">Linhas</h3>
                    <div uk-grid uk-lightbox="animation: slide">
                        <div class="uk-grid-small uk-width-1-2@m">
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove"
                                uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <a class="uk-inline"
                                        href="{{ secure_asset('assets/images/centrais/linha_chimuara.png') }}"
                                        data-caption="LINHA B05 SE’S CHIMUARA-MOCUBA">
                                        <img src="{{ secure_asset('assets/images/centrais/linha_chimuara.png') }}" width="600"
                                            height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">LINHA B05 SE’S CHIMUARA-MOCUBA
                                        </h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Capacidade da linha:</spa>477MVA
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220kV
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <button
                                                class="uk-button uk-align-right uk-margin-remove uk-text-primary uk-button-text">Mais
                                                detalhes</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-grid-small uk-width-1-2@m">
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove"
                                uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <a class="uk-inline"
                                        href="{{ secure_asset('assets/images/centrais/subestacao_linha_matambo.png') }}"
                                        data-caption="LINHAS B03 & B04 SE’S MATAMBO – CHIMUARA">
                                        <img src="{{ secure_asset('assets/images/centrais/subestacao_linha_matambo.png') }}"
                                            width="600" height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">Linhas B03 & BO4 SE&quot; Matambo - Chimuara
                                        </h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Capacidade da linha:</spa>477MVA para cada
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220kV
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <button
                                                class="uk-button uk-align-right uk-margin-remove uk-text-primary uk-button-text">Mais
                                                detalhes</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <hr class="uk-margin-large-top">
    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('patrimonio.show', "geracao") }}">Geração</a></li>
        </ul>
    </div>
</div>
@endsection