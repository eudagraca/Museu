@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
        <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
        <li><a>Transporte</a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transporte</h4>

        <p class="uk-dropcap uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Tem como missão dirigir, de forma eficiente e eficaz, as actividades de exploração e manutenção da Rede
            Nacional de
            Transporte, que compreendem:
        </p>
        <ol class="uk-text uk-margin-large-left uk-text-justify" type="a">
            <li class="uk-margin-large-top">Instalações de interligação para os produtores de electricidade e para a
                importação de electricidade;</li>
            <li class="uk-margin-small">Infra-estruturas de transporte de energia eléctrica, para fornecer energia para
                exportação, clientes de grande porte
                e redes de distribuição conectadas a Rede de Transporte;</li>
            <li class="uk-margin-small">Centro de Despacho; e</li>
            <li class="uk-margin-small">Infra-estruturas de telecomunicações, telemetria e controle remoto para a gestão
                eficaz e eficiente da Rede Nacional
                de Transporte de acordo com as disposições do código de Rede, acordos e regulamentos da SAPP (Southern
                African Power
                Pool);</li>
        </ol>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            A Rede Nacional de Transporte de Energia é constituída por dois subsistemas isolados, nomeadamente, Centro -
            Norte e
            Sul.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            A interconexão destes subsistemas é feita via países vizinhos, nomeadamente, Zimbabwe, através da rede de
            Transporte da
            ZESA, África do Sul, através da rede de Transporte da Eskom, esta última conecta-se à rede de Transporte
            Nacional (REN),
            através da rede da Motraco, vide mapa seguinte.
        </p>
        <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
            <a class="uk-inline" href="{{ asset('assets/images/mapa_transporte.png') }}"
                data-caption="Rede Transporte Energia. Fonte: Plano de Negócio da EDM 2020 - 2024">
                <img src="{{ asset('assets/images/mapa_transporte.png') }}" class="uk-border-rounded" width="750px"
                    height="133px" alt="" uk-img></a>
        </div>

    </div>
</div>
@endsection
