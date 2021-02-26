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

<div>
        <p class="uk-text uk-margin-left uk-text-justify">
            Tem como missão dirigir, de forma eficiente e eficaz, as actividades de exploração e manutenção da Rede
            Nacional de
            Transporte, que compreendem:
        </p>
        <ol class="uk-text uk-margin-large-left uk-margin-remove-top uk-text-justify" type="a">
            <li class="uk-margin-small">Instalações de interligação para os produtores de electricidade e para a
                importação de electricidade;</li>
            <li class="uk-margin-small"><a class="uk-tex-normal" href="{{ route('rede.show', "infraestrutura") }}">Infra-estruturas de transporte</a> de energia eléctrica, para fornecer energia para
                exportação, clientes de grande porte
                e redes de distribuição conectadas a Rede de Transporte;</li>
            <li class="uk-margin-small"><a href="{{ route('rede.show', "despacho") }}">Centro de Despacho</a>; e</li>
            <li class="uk-margin-small">Infra-estruturas de telecomunicações, telemetria e controle remoto para a gestão
                eficaz e eficiente da <a href="{{ route('rede.show', "transporte") }}">Rede Nacional de Transporte</a> de acordo com as disposições do código de Rede, acordos e regulamentos da SAPP (Southern
                African Power
                Pool);</li>
        </ol>
        <div>

        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            A Rede Nacional de Transporte de Energia é constituída por dois subsistemas isolados, nomeadamente, Centro -
            Norte e
            Sul.
        </p>
        <p class="uk-text uk-margin-left uk-text-justify">
            A interconexão destes subsistemas é feita via países vizinhos, nomeadamente, Zimbabwe, através da rede de
            Transporte da
            ZESA, África do Sul, através da rede de Transporte da Eskom, esta última conecta-se à rede de Transporte
            Nacional (REN),
            através da rede da Motraco, no <span class="uk-width-1-2@m" uk-lightbox="animation: slide">
                <a  href="{{ secure_asset('assets/images/mapa_transporte.png') }}"
                    data-caption="Rede Transporte Energia. Fonte: Plano de Negócio da EDM 2020 - 2024"> mapa </a>
            </span>.
        </p>
   <hr>
        <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
            <ul class="uk-nav uk-nav-default uk-align-left">
                <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
                 <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                href="{{ route('rede.show', "despacho") }}">Despacho</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "infraestrutura") }}">Infra-estrutura</a></li>
            </ul>
        </div>


    </div>
</div>
@endsection
