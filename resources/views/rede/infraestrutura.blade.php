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
                <li><a class="uk-text-primary uk-active uk-text-normal"
                        href="{{ route('rede.show', 'transporte') }}">Transporte</a></li>
                <li><a href="#">Infra-estrutura de Transporte</a></li>
            </ul>
        </div>
        <div uk-grid class="uk-margin-remove">
            <div class="uk-width-expand@m uk-width-1-1@m">
                <div class="uk-margin">
                    <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Infra-estrutura de
                        Transporte
                    </h4>
                    <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                       O sistema de Transporte de Energia da EDM, é constituído por quatro níveis de tensão, nomeadamente, 66kV, 110kV, 220kV e
                    275kV.
                    O Cumprimento de Linhas em Serviço é de 5660Km, sendo, Linhas de 66kV – 666 Km, Linhas de 110kV – 3191 Km, Linhas de
                    220kV – 1416 Km e Linhas de 275kV – 317Km.
                    </p>


                    <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                        Na <b>Região Sul</b>, das 37 subestações em funcionamento, 12 estão a operar no limite da sua capacidade, 6 linhas de transporte de energia a
                        66kV operam no seu limite de transferência e carecem de intervenção urgente para evitar a sobrecarga dos equipamentos,
                        que se pode traduz ir no seu envelhecimento precoce e/ou colapso.
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                        Com a implementação dos projectos de reforço da rede nomeadamente: Perip, Jica, Hyousung, STIP e Emergência, o número de
                        subestações sobrecarregadas a nível da Rede de Transporte Sul irá reduzir para 4, nomeadamente: Marracuene, Salamanga,
                        SE10 e Kongolote.
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                        Na <b>Região Centro</b>,, a Direcção de Transporte funciona com um total de 32 Subestações, das quais 27 pertencem à EDM, sendo que 3 são
                        móveis, localizadas em Tete, Quelimane e Casa Nova. As restantes 24 são fixas, das quais 5 subestações são privadas
                        (Jindal, CIM Dondo, CIM Beira, Vale e ICVL).
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                        Actualmente, na região não, há registo de subestações a operar no limite da sua capacidade. Não obstante tal facto, 2
                        linhas de transferência de potência, nomeadamente: DL3 (Matambo - Tete) e CL71 (Dondo - Munhava)) estão a operar no seu
                        limite térmico.
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                        Na <b>Região Norte</b>, com o plano de universalização do acesso doméstico à rede, prevê-se para os próximos dois anos ligar cerca de 250 mil
                        novos clientes, o que resultará no incremento da demande e consequente sobrecarga de 7 Subestações.
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                        O acesso universal impõe ao sistema de transporte mais desafios no que concerne à disponibilidade de potência, para
                        suprir a demanda, cujo crescimento previsto está na ordem de 20%, tomando como referência o histórico dos últimos 5 anos
                        (200MW).
                    </p>
                </div>

                <hr>
                <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
                    <ul class="uk-nav uk-nav-default uk-align-left">
                        <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
                        <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                                href="{{ route('rede.show', "despacho") }}">Despacho</a></li>
                        <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                                href="{{ route('rede.show', "transporte") }}">Rede de transporte</a></li>

                    </ul>
                </div>

            </div>

            <div class="uk-width-1-4@m" uk-lightbox="animation: slide">
                <a class="uk-inline uk-margin-right uk-margin-top"
                    href="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}"
                    data-caption="Linha de 66kV">
                    <img src="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}" class="uk-border-rounded"
                        width="230px" height="20px" alt="" uk-img></a>
            
                <a class="uk-inline uk-margin-right uk-margin-top"
                    href="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}"
                    data-caption="Linha de 110kV">
                    <img src="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}" class="uk-border-rounded"
                        width="230px" height="20px" alt="" uk-img></a>
            
                <a class="uk-inline uk-margin-right uk-margin-top"
                    href="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}"
                    data-caption="Linha de 220kV">
                    <img src="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}" class="uk-border-rounded"
                        width="230px" height="20px" alt="" uk-img></a>
            
                <a class="uk-inline uk-margin-right uk-margin-top"
                    href="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}"
                    data-caption="Linha de 275kV">
                    <img src="{{ secure_asset('assets/images/paginas/centro_despacho_maputo.png') }}" class="uk-border-rounded"
                        width="230px" height="20px" alt="" uk-img></a>
            
            </div>
        </div>
    </div>
</div>
@endsection