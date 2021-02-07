@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
        <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
        <li><a>Transporte</a></li>
        <li><a href="{{ route('rede.show', "despacho") }}">Centro Nacional do Despacho</a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transporte</h4>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-large-left">Centro Nacional do Despacho
        </h4>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            O Centro Nacional de Despacho é uma alavanca fundamental para a gestão global do Sistema Eléctrico Nacional
            e para a sua
            interligação com as redes dos países vizinhos e centrais de produção.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Actualmente, a EDM opera com um Centro de Despacho, que assegura apenas o controlo centralizado da rede de
            transporte da
            zona sul, incluindo a monitorização das interligações com a Eskom e Eswatine, cuja entrada em funcionamento
            data de
            Março de 2009.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Com os diversos projectos de geração e de transporte, previstos para o presente quinquénio, a EDM é
            desafiada a acelerar
            a implementação do projecto do Centro Nacional de Despacho, acompanhado de dois centros de controlo
            regional, para
            desempenhar, de forma eficiente e segura, o seguinte papel:
        </p>
        <ul class="uk-text uk-margin-large-left uk-text-justify">
            <li class="uk-margin-top">Monitoria e Controlo da rede nacional de transporte (~533kV, 400kV, 275kV,
                220kV,110kV e 66kV);</li>
            <li class="uk-margin-small">Monitoria e controlo da geração e balanço da procura e oferta (Controlo de
                frequência);</li>
            <li class="uk-margin-small">Monitoria e controlo do fluxo energético regional, de acordo com os
                procedimentos da SAPP, etc..</li>
        </ul>
        <h5 class="uk-margin-large-left uk-text-bold">Vantagens do Centro Nacional de Despacho:</h5>
        <ul class="uk-text uk-margin-large-left uk-text-justify">
            <li class="uk-margin-top">Controlo da rede em tempo real;</li>
            <li class="uk-margin-small">Redução da indisponibilidade do sistema
            </li>
            <li class="uk-margin-small">Aumento da fiabilidade;</li>
            <li class="uk-margin-small">Balanço energético; e</li>
            <li class="uk-margin-small">Redução de operadores nas subestações de risco de acidentes;</li>
        </ul>
    </div>

</div>
</div>
@endsection
