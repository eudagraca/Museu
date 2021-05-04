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
                <li><a href="#">Transmissão Sul</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove-top uk-margin-remove-right">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transmissão - Divisão de
                transporte Sul</h4>

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
                                    <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se1.png') }}"
                                        data-caption="Subestação SE 1">
                                        <img src="{{ secure_asset('assets/images/centrais/subestacao_se1.png') }}" width="600"
                                            height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">Subestação SE 1</h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, Kapfumo,
                                            Bairro
                                            Central
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Potência instalada actual:</spa>30MVA
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
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
                                    <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_s2.png') }}"
                                        data-caption="Subestação SE 2">
                                        <img src="{{ secure_asset('assets/images/centrais/subestacao_s2.png') }}" width="600"
                                            height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">Subestação SE 1</h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, Kapfumo,
                                            Bairro da
                                            Malanga
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Potência instalada actual:</spa>30MVA
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
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
                                        href="{{ secure_asset('assets/images/centrais/linha_ressano_garcia_macia.png') }}"
                                        data-caption="LINHA BL5 SE’S RESSANO GARCIA-MACIA">
                                        <img src="{{ secure_asset('assets/images/centrais/linha_ressano_garcia_macia.png') }}"
                                            width="600" height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">LINHA BL5 SE’S RESSANO GARCIA-MACIA
                                        </h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Capacidade da linha:</spa>479MVA
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275KV
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
                                        href="{{ secure_asset('assets/images/centrais/linha_ressano_garcia_macia.png') }}"
                                        data-caption="LINHA BL4 SE’S RESSANO GARCIA-KOMATTI PORT">
                                        <img src="{{ secure_asset('assets/images/centrais/linha_ressano_garcia_macia.png') }}"
                                            width="600" height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">LINHA BL4 SE’S RESSANO GARCIA-KOMATTI
                                            PORT
                                        </h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Capacidade da linha:</spa>479MVA
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275KV
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
    <hr class="uk-margin-large-top uk-width-1-1@s">
    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('patrimonio.show', "geracao") }}">Geração</a></li>
        </ul>
    </div>
</div>
@endsection
