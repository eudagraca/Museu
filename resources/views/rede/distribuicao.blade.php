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
                <li><a href="#">Distribuição</a></li>
            </ul>
        </div>
        <div uk-grid class="uk-margin-remove">
            <div class="uk-width-expand@m uk-width-1-1@m">
                <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Distribuição</h4>

                <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
                    A função de distribuição de energia eléctrica é coordenada centralmente pela Direcção de
                    Distribuição, cuja
                    responsabilidade é de definir políticas e harmonizar os procedimentos de instalação, operação,
                    manutenção, automação e
                    gestão de uma maneira uniforme dos activos do segmento Distribuição da EDM, que compreende os
                    seguintes níveis de
                    tensão: 0.23/0.4kV, 6.6kV, 11kV, 19.1kV (SWER), 22kV e 33kV.
                </p>

                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    A infra-estrutura de distribuição é composta por Mini-subestações, linhas aéreas, linhas
                    subterrâneas, postos de
                    transformação, armários e quadros de distribuição.
                </p>
                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    A Direcção de Distribuição tutela 5 Direcções Regionais, nomeadamente: Norte, Centro, Sul, Cidade de
                    Maputo e Província
                    de Maputo e 23 Delegações.
                    O facto de a maior parte da população moçambicana residir nas zonas rurais é evidenciado pelos
                    rácios de densificação
                    que constam da tabela acima.
                </p>
                <p class="uk-text uk-margin-left uk-margin-right uk-text-italic uk-text-justify">
                    Com a excepção da Região da Cidade de Maputo, outras regiões têm uma média de 80 clientes por
                    quilómetro de rede de
                    distribuição em baixa tensão e menos de 1 (um) posto de transformação por quilómetro de rede de
                    média tensão. Assim,
                    para a universalização do acesso de energia à população, a EDM irá apostar, não só na expansão da
                    rede para novos
                    centros de consumos, mas também na densificação, que consiste em maximizar a exploração das
                    infra-estruturas existentes.
                </p>

            </div>

            <div class="uk-width-1-3@m uk-align-center" uk-lightbox="animation: slide">
                <a class="uk-inline" href="{{ secure_asset('assets/images/provincias_delegacoes.png') }}"
                    data-caption="Fonte: Plano de Negócio da EDM 2020 – 2024">
                    <img src="{{ secure_asset('assets/images/provincias_delegacoes.png') }}" class="uk-border-rounded"
                        width="350px" height="133px" alt="" uk-img></a>
            </div>

        </div>
    </div>
    <hr>
    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('rede.show', "comercial") }}">Comercial</a></li>
        </ul>
    </div>
</div>
@endsection
