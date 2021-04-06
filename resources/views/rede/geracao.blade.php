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
                <li><a href="#">Geração</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove-top uk-margin-remove-right">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Geração</h4>

            <div class="uk-grid">
                <div class="uk-width-expand@m">
                    <p
                        class="uk-dropcap uk-text uk-width-expand@m uk-margin-left  uk-margin-large-right uk-text-justify">
                        A Função Geração tem como missão, coordenar e implementar a gestão, exploração e manutenção dos
                        meios de produção de
                        energia eléctrica, gestão sustentável da capacidade de produção de energia, em função da
                        demanda, assessorar as
                        Delegações na exploração das centrais de emergência e, em coordenação com outras Direcções,
                        desenvolver estudos visando
                        a implementação de novas centrais de geração própria.
                    </p>

                    <p class="uk-text uk-margin-left uk-text-justify">
                        No presente quinquénio, no parque produtor, prevê-se a recuperação de cerca de 78MW de
                        capacidade produtiva que se
                        encontra indisponível por motivos de avarias de vária ordem. Desta capacidade, 22 MW serão
                        recuperados na Central
                        Hídrica de Chicamba, 15.8MW na Central Hídrica de Mavuzi, 40MW na Central Térmica a Gás Natural
                        de Maputo (CTM).
                    </p>
                    <p class="uk-text uk-margin-left  uk-text-justify">
                        Esta recuperação da capacidade produtiva vai melhorar, em grande medida, os níveis de resposta à
                        demanda nos diferentes
                        subsistemas de transporte de energia ao longo do País.
                    </p>
                    <p class="uk-text uk-margin-left uk-text-justify">
                        Para além desta recuperação, prevê-se o aumento da capacidade produtiva em cerca de 45MW,
                        resultante da montagem da
                        central de emergência de 40MW em Nacala, aumento da capacidade instalada em Temaninho em mais 3
                        MW e a ampliação da
                        Mini-hídrica de Cuamba em mais 2.5MW.
                    </p>

                    <p class="uk-text uk-margin-left uk-text-justify">
                        Importa referenciar que, pelo facto de a geração ter centrais a funcionar em regimes diferentes,
                        nomeadamente (Pick,
                        Base load e Mied-merid), o valor global do factor de carga (GLF) e de utilização de energia
                        (EUF), vai situar-se nos 52%
                        e 53%, respectivamente de 2021 em diante.
                    </p>
                    <p class="uk-h4 uk-text uk-margin-left uk-margin-remove-top uk-text-italic uk-text-justify">
                        Importa referenciar que, pelo facto de a geração ter centrais a funcionar em regimes diferentes,
                        nomeadamente (Pick,
                        Base load e Mied-merid), o valor global do factor de carga (GLF) e de utilização de energia
                        (EUF), vai situar-se nos 52%
                        e 53%, respectivamente de 2021 em diante.
                    </p>
                    <p class="uk-h4 uk-text uk-margin-left uk-margin-remove-top uk-text-italic uk-text-justify">
                        A geração da EDM está presente nas três regiões do País, nomeadamente Sul, Centro e Norte. Esta
                        realidade impõe que
                        sejam alocados recursos, não só humanos, mas também materiais e equipamentos para a gestão das
                        centrais.
                    </p>
                </div>
            </div>

                <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
                    <a class="uk-inline uk-margin-right uk-align-center"
                        href="{{ asset('assets/images/plano_negocio.png') }}"
                        data-caption="Capacidade de geração instalada e disponível por central.">
                        <img src="{{ asset('assets/images/plano_negocio.png') }}"
                            class="uk-border-rounded" width="800px" height="550px" alt="" uk-img></a>
                            <p class="uk-margin-right uk-text-primary">A tabela acima apresenta a capacidade de geração instalada e disponível por central.</p>

                    {{--  <a class="uk-inline uk-margin-right uk-margin-top"
                        href="{{ asset('assets/images/centrais/Central_Mini_Hidrica_Lichinga.JPG') }}"
                        data-caption="Central Hídrica de Lichinga, na Província de Niassa – Norte de Moçambique">
                        <img src="{{ asset('assets/images/centrais/Central_Mini_Hidrica_Lichinga.JPG') }}" class="uk-border-rounded"
                            width="300px" height="100px" alt="" uk-img></a>
                            <p class="uk-margin-right uk-text-primary">Central Hídrica de Lichinga, na Província de Niassa – Norte de Moçambique</p>  --}}
                </div>
        </div>
    </div>
    <hr>
    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('rede.show', "transporte") }}">Transporte</a></li>
        </ul>
    </div>
</div>
@endsection
