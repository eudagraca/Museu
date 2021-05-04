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
                transporte Centro</h4>


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
                                        href="{{ secure_asset('assets/images/centrais/subestacao_matambo.png') }}"
                                        data-caption="SUBESTAÇÃO DE MATAMBO [BAY DA EDM] - Em Outubro de 2015 foi instalado o TR2 de 130MVA pertencente a EDM. O TR1 de 60MVA pertence a HCB e ambos alternativamente podem alimentar as linhas de 66kV e 33kV.">
                                        <img src="{{ secure_asset('assets/images/centrais/subestacao_matambo.png') }}"
                                            width="600" height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">Subestação da Matambo</h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Localidade de Matambo,
                                            Distrito de
                                            Marrara,
                                            Província de Tete
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Potência instalada actual:</spa> 130MVA
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/66/33kV
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
                                        href="{{ secure_asset('assets/images/centrais/subestacao_tete.png') }}"
                                        data-caption="A Subestação pertencia a antiga Área Operacional de Tete, actualmente Área do Serviço Cliente de Tete. Apos uma reabilitação total que terminou em 2007, passou a pertencer a DTCE (antiga ATCE).">
                                        <img src="{{ secure_asset('assets/images/centrais/subestacao_tete.png') }}" width="600"
                                            height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">Subestação Tete</h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Josina Machel, Cidade
                                            de Tete
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Potência instalada actual:</spa> 22MVA
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
                                        href="{{ secure_asset('assets/images/centrais/linha_b10_dondo.png') }}"
                                        data-caption="LINHA B10 [S/E CHIBATA – S/E DONDO]">
                                        <img src="{{ secure_asset('assets/images/centrais/linha_b10_dondo.png') }}" width="600"
                                            height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">LINHA B10 [S/E CHIBATA – S/E DONDO]
                                        </h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Capacidade da linha:</spa>238MVA
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
                                        href="{{ secure_asset('assets/images/centrais/linha_cuamba_lichinga.png') }}"
                                        data-caption="LINHA CL71 [CENTRAL MAVUZI- BEIRA]">
                                        <img src="{{ secure_asset('assets/images/centrais/linha_cuamba_lichinga.png') }}"
                                            width="600" height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">LINHA CL71 [CENTRAL MAVUZI- BEIRA]
                                        </h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Capacidade da linha:</spa>77MVA
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
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
