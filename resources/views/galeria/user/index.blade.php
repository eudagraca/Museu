@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-subnav uk-subnav-pill" uk-switcher>
        <li><a href="#">CENTRAL HIDROELECTRICA DE CHICAMBA</a></li>
        <li><a href="#">CENTRAL HIDROELECTRICA DE CORUMANA</a></li>
        <li><a href="#">CENTRAL HIDROELECTRICA DE MAVUZI</a></li>
        <li><a href="#">CENTRAL HIDROELECTRICA DE TIMANE</a></li>
    </ul>

    <ul class="uk-switcher uk-margin">

        {{--  CHICAMBA  --}}
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/11.jpeg') }}"
                        data-caption="Armazéns, oficinas e escritórios, Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/11.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/14.jpeg') }}"
                        data-caption="Barragem da chicamba, instalação da britagem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/14.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/15.jpeg') }}"
                        data-caption="Barragem da chicamba, instalacao da britagem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/15.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/29.jpeg') }}"
                        data-caption="Barragem de Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/29.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/28.jpeg') }}"
                        data-caption="Barragem de Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/28.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/16.jpeg') }}"
                        data-caption="Barragem de chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/16.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/17.jpeg') }}"
                        data-caption="Barragem de chicamba, cheias de 03-01-1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/17.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/18.jpeg') }}"
                        data-caption="Barragem de chicamba, entrada das galerias">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/18.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/19.jpeg') }}"
                        data-caption="Barragem de chicamba, escavacao da margem direita">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/19.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/20.jpeg') }}"
                        data-caption="Barragem de chicamba, escavacao na bacia de recepcao na margem direita (por baixo da derivada butters)">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/20.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/21.jpeg') }}"
                        data-caption="Barragem de Chicamba, escavacao na margem esquerdacom a pá carregadora–">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/21.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/22.jpeg') }}"
                        data-caption="Barragem de Chicamba, inicio da construção">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/22.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/23.jpeg') }}"
                        data-caption="Barragem de Chicamba, limpeza do canal de entrada nas galerias e ampliacao do murro de proteccao do lado esquerdo">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/23.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/24.jpeg') }}"
                        data-caption="Barragem de Chicamba, limpeza do canal de entrada nas galerias e ampliacao do murro de proteccao do lado esquerdo1">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/24.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/25.jpeg') }}"
                        data-caption="Barragem de chicamba, torre do grupo II">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/25.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/26.jpeg') }}"
                        data-caption="Barragem de chicamba, trabalhos de proteccao da tomada de agua">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/26.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/27.jpeg') }}"
                        data-caption="Barragem de chicamba, tratamento e transporte de pedra e betao para construcao da barragem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/27.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/30.jpeg') }}"
                        data-caption="Barragem, escavacoes, chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/30.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/31.jpeg') }}"
                        data-caption="Barragem de chicamba 20-01-1962">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/31.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/34.jpeg') }}"
                        data-caption="Barragem da Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/34.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/35.jpeg') }}"
                        data-caption="Betonagem da barragem Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/35.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/44.jpeg') }}"
                        data-caption="Central Chicamba, 1as escavações">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/44.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/45.jpeg') }}"
                        data-caption="Central Chicamba, Construcao da central">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/45.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/46.jpeg') }}"
                        data-caption="Central Chicamba, Construcao">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/46.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/47.jpeg') }}"
                        data-caption="Central Chicamba, Construcao">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/47.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/48.jpeg') }}"
                        data-caption="Central Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/48.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/49.jpeg') }}"
                        data-caption="Central Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/49.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/50.jpeg') }}"
                        data-caption="Central da chicamba - Situação das obras em 1966">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/50.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/51.jpeg') }}"
                        data-caption="Central da chicamba evoluta I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/51.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/52.jpeg') }}"
                        data-caption="Central da chicamba evoluta I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/52.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/53.jpeg') }}"
                        data-caption="Central de Chicamba 1966">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/53.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/54.jpeg') }}"
                        data-caption="Central de chicamba em construcao, Evoluta - I das turbinas">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/54.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/55.jpeg') }}"
                        data-caption="Central de chicamba, 1as Fases da construcao da central">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/55.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/56.jpeg') }}"
                        data-caption="Central de Chicamba, 1as fases">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/56.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/58.jpeg') }}"
                        data-caption="central de chicamba, construção">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/58.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/59.jpeg') }}"
                        data-caption="Central de Chicamba, Dezembro de 1966">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/59.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/61.jpeg') }}"
                        data-caption="Central de chicamba, evoluta I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/61.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/60.jpeg') }}"
                        data-caption="Central de chicamba, evoluta I, 1966 ">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/60.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/61.jpeg') }}"
                        data-caption="Central de chicamba, evoluta I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/61.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/62.jpeg') }}"
                        data-caption="Central de chicamba, obras de construcao, 1966">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/62.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/63.jpeg') }}"
                        data-caption="Central de chicamba, obras de construcao">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/63.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/64.jpeg') }}"
                        data-caption="Central de Chicamba, sala de comando (antes da reabilitação) 1968-2015">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/64.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/65.jpeg') }}"
                        data-caption="Central de Chicamba, Sala de comando antes da reabilitação, 1968-2015">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/65.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/66.jpeg') }}"
                        data-caption="Central de Chicamba, sala de comando, 1968-2015">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/66.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/106.jpeg') }}"
                        data-caption="Chicamba, Instalação de betonagem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/106.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/107.jpeg') }}"
                        data-caption="Chicamba central - macicos para instalacao do equipamento na pedreira, final de agosto">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/107.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/135.jpeg') }}"
                        data-caption="Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/135.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/108.jpeg') }}"
                        data-caption="Chicamba, 1as fases da construcao I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/108.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/109.jpeg') }}"
                        data-caption="Chicamba, Agosto de 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/109.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/110.jpeg') }}"
                        data-caption="Chicamba, Betonagem da central, fim de agosto">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/110.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/111.jpeg') }}"
                        data-caption="Chicamba, Central evoluta das turbinas">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/111.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/112.jpeg') }}"
                        data-caption="Chicamba, construcao 1966">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/112.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/113.jpeg') }}"
                        data-caption="Chicamba, construcao da central 1966">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/113.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/114.jpeg') }}"
                        data-caption="Chicamba, construcao da ponte, 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/114.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/115.jpeg') }}"
                        data-caption="Chicamba, entrada de uma virola na galeria, finais de agosto">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/115.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/116.jpeg') }}"
                        data-caption="Chicamba, escavacao da margem direita 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/116.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/118.jpeg') }}"
                        data-caption="Chicamba, escavacao da margem direita">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/118.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/117.jpeg') }}"
                        data-caption="Chicamba, escavacao da margem direita">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/117.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/119.jpeg') }}"
                        data-caption="Chicamba, Escavação da ponte Açude, pilares">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/119.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/120.jpeg') }}"
                        data-caption="Chicamba, escavacoes no leito do rio com saida dos produtos de escavacao para montantes, meados de setembro">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/120.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/121.jpeg') }}"
                        data-caption="Chicamba, Evoluta das turbinas ou caracol">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/121.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/122.jpeg') }}"
                        data-caption="Chicamba, fase da construcao das comportas 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/122.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/123.jpeg') }}"
                        data-caption="Chicamba, fases da construcao">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/123.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/124.jpeg') }}"
                        data-caption="Chicamba, fim de julho de 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/124.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/125.jpeg') }}"
                        data-caption="Chicamba, galeria I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/125.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/126.jpeg') }}"
                        data-caption="Chicamba, instalacao de betonagem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/126.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/127.jpeg') }}"
                        data-caption="Chicamba, Outubro-Novembro de 1966">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/127.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/128.jpeg') }}"
                        data-caption="Chicamba, preparacao para o periodo de betonagem da barragem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/128.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/129.jpeg') }}"
                        data-caption="Chicamba, Preparativos para periodo de betonagem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/129.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/130.jpeg') }}"
                        data-caption="Chicamba, Saida das garerias e canal de fuga, maio-1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/130.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/131.jpeg') }}"
                        data-caption="Chicamba, torre dos pocos I e II 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/131.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/132.jpeg') }}"
                        data-caption="Chicamba, transporte de virolas em camiao">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/132.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/133.jpeg') }}"
                        data-caption="Chicamba, Tratamento do Betao">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/133.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/134.jpeg') }}"
                        data-caption="Chicamba, zona da pedreira, finais de agosto">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/134.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/136.jpeg') }}"
                        data-caption="Chicamba I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/136.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/137.jpeg') }}"
                        data-caption="Colocação de armaduras na infraestrutura do bloco5, fim de ffevereiro de 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/137.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/138.jpeg') }}"
                        data-caption="Comportas de açude, Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/138.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/139.jpeg') }}"
                        data-caption="Conduta de tomada de água para os geradores 1963">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/139.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/140.jpeg') }}"
                        data-caption="Condutas de tomada de água para os geradores 1964">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/140.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/141.jpeg') }}"
                        data-caption="Condutas forcadas de mavuzi, casa das valvulas de borboleta, finais de maio de 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/141.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/142.jpeg') }}"
                        data-caption="Construção da barragem de Chicamba e respectiva central ">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/142.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/161.jpeg') }}"
                        data-caption="Construção do edifício da central Chicamba dezembro de 1966">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/161.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/162.jpeg') }}"
                        data-caption="Construcao do edificio da central, Chicamba 1966">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/162.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/167.jpeg') }}"
                        data-caption="Deslocação de uma virola dentro da galeria, chicamba, fim de agosto">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/167.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/168.jpeg') }}"
                        data-caption="Enreada de galeria em montante, maio de 1957 ">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/168.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/169.jpeg') }}"
                        data-caption="Entrada de agua nas galerias no dia 15 de novembro ">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/169.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/170.jpeg') }}"
                        data-caption="Escavação para murro de suporte da entrada">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/170.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/171.jpeg') }}"
                        data-caption="Evolução da turbina do grupo IV">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/171.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/172.jpeg') }}"
                        data-caption="Evoluta - I das turbinas de chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/172.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/173.jpeg') }}"
                        data-caption="Evoluta-I Central de Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/173.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/174.jpeg') }}"
                        data-caption="Fase de construcao, evoluta - I das turbinas">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/174.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/175.jpeg') }}"
                        data-caption="Finalizacao da ponte acude, 11-11-1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/175.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/176.jpeg') }}"
                        data-caption="Fossa do alternador">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/176.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/177.jpeg') }}"
                        data-caption="Fundação da turbina e valvula, principio de outubro">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/177.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/178.jpeg') }}"
                        data-caption="Galeria I com blindagem metalica - 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/178.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/179.jpeg') }}"
                        data-caption="Grupo 5, escavaçōes do poço de bombagem, grupo5 - 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/179.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/180.jpeg') }}"
                        data-caption="Grupo4, Cofragem do teto da camara de descarga e armadura, principio de outubro">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/180.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/181.jpeg') }}"
                        data-caption="Infra-estrutura central - Bloco G.3 fim de julho">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/181.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/182.jpeg') }}"
                        data-caption="Instalacao das condutas de agua, chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/182.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/183.jpeg') }}"
                        data-caption="Instalacoes da barragem de chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/183.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/184.jpeg') }}"
                        data-caption="Instalações de chicamba, julho de 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/184.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/195.jpeg') }}"
                        data-caption="Maquinas trabalhando na construção da central Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/195.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/196.jpeg') }}"
                        data-caption="Margem esquerda da barragem de Chicamba 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/196.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/197.jpeg') }}"
                        data-caption="Margem esquerda de Chicamba, maio - 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/197.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/217.jpeg') }}"
                        data-caption="Murro de proteção das entradas das galerias em construcao, Barragem de chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/217.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/219.jpeg') }}"
                        data-caption="Novembro 1966 Central de chicamba grupo I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/219.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/220.jpeg') }}"
                        data-caption="Novembro 1966, Central de chicamba, Grupo I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/220.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/221.jpeg') }}"
                        data-caption="Obras da construcao da central Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/221.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/222.jpeg') }}"
                        data-caption="Obras de construção da central de chicamba - 1964">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/222.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/223.jpeg') }}"
                        data-caption="Oficina e carpintaria, Chicamba, 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/223.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/224.jpeg') }}"
                        data-caption="Parte de cima do alternador I">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/224.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/225.jpeg') }}"
                        data-caption="Pilares da ponte acude">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/225.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/237.jpeg') }}"
                        data-caption="Saída da galeria, chicamba, maio-1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/237.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/238.jpeg') }}"
                        data-caption="Sala de comando, Chicamba, Antes da reabilitação">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/238.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/249.jpeg') }}"
                        data-caption="Torre de betonagem, chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/249.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/250.jpeg') }}"
                        data-caption="Torre de tomada de agua e poco da comportas das galeriasa">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/250.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/251.jpeg') }}"
                        data-caption="Torre de tomada de agua, final de marco de 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/251.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/252.jpeg') }}"
                        data-caption="Transporte de ensecadeira, 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/252.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/253.jpeg') }}"
                        data-caption="Transporte de transformador do grupo IV">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/253.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/254.jpeg') }}"
                        data-caption="Transporte do rotor do alternador do grupo V">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/254.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/258.jpeg') }}"
                        data-caption="Zona da pedreira, barragem do Chicamba">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/258.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/647.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/647.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/648.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/648.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/649.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/649.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/650.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/650.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/651.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/651.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/652.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/652.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/653.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/653.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/654.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/654.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/655.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/655.JPG') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/656.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/656.JPG') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/657.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/657.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/658.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/658.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/659.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/659.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/669.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/669.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/670.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/670.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/chicamba/671.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/chicamba/671.JPG') }}" alt="">
                    </a>
                </div>



            </div>
        </li>
        {{--  CORRUMANA  --}}
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/635.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/635.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/636.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/636.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/637.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/637.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/638.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/638.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/639.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/639.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/640.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/640.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/641.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/641.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/642.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/642.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/643.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/643.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/644.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/644.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/645.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/645.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/corumana/646.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/corumana/646.JPG') }}" alt="">
                    </a>
                </div>


            </div>
        </li>
        {{--  MAVUZI  --}}
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/03.jpeg') }}"
                        data-caption="Açude - mavuzi, 07-11-58">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/03.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/04.jpeg') }}"
                        data-caption="Açude de Mavuzi antes da construção da barragem – 1949">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/04.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/05.jpeg') }}"
                        data-caption="Acude de mavuzi, montagem das comportas">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/05.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/06.jpeg') }}"
                        data-caption="Açude do Mavuzi antes da construção da barragem - 1949">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/06.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/07.jpeg') }}"
                        data-caption="Acude, mavuzi antes da construcao da ponte">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/07.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/08.jpeg') }}"
                        data-caption="Acude, Mavuzi, 1952">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/08.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/09.jpeg') }}"
                        data-caption="Acude, Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/09.jpeg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/10.jpeg') }}"
                        data-caption="Armadura do tabuleiro da ponte acude, Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/10.jpeg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/12.jpeg') }}"
                        data-caption="As 3 condutas no maciço de amarração - 1955, Central Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/12.jpeg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/13.jpeg') }}"
                        data-caption="As tres condutas forcadas central mavuzi, 1955">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/13.jpeg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/32.jpeg') }}"
                        data-caption="Beira-Mavuzi, Linha de alta tensao em construcao">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/32.jpeg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/33.jpeg') }}"
                        data-caption="Beira-mavuzi, linha de alta tensao">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/33.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/37.jpeg') }}"
                        data-caption="Betonagem da infraestrutura do grupo4">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/37.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/36.jpeg') }}"
                        data-caption="Betonagem da infraestrutura do grupo4, mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/36.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/38.jpeg') }}"
                        data-caption="Betonagem da infraestrutura, Grupo4">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/38.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/39.jpeg') }}"
                        data-caption="Betonagem do grupo 4 e 3 - 1957, Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/39.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/40.jpeg') }}"
                        data-caption="Canal de entrada de torre da tomada de água">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/40.jpeg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/41.jpeg') }}"
                        data-caption="Canal de entrada de torre da tomada de água">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/41.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/42.jpeg') }}"
                        data-caption="Casa de válvulas e maciço">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/42.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/43.jpeg') }}"
                        data-caption="Cela do transformador.">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/43.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/67.jpeg') }}"
                        data-caption="Central de Mavuzi 07-05-1958.">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/67.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/68.jpeg') }}"
                        data-caption="Central de Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/68.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/69.jpeg') }}"
                        data-caption="Central de Mavuzi Escavaçōes do poço de bombagem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/69.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/70.jpeg') }}"
                        data-caption="Central de Mavuzi Escavaçōes do poço de bombagem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/70.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/91.jpeg') }}"
                        data-caption="Central de Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/91.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/71.jpeg') }}"
                        data-caption="Central de Mavuzi, Aspectos dos trabalhos no grupo3 em meados de outubro, Fundação da turbina C">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/71.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/72.jpeg') }}"
                        data-caption="Central de Mavuzi, betonagem da infraestrutura do bloco G-5">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/72.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/73.jpeg') }}"
                        data-caption="Central de Mavuzi, betonagem da infraestrutura do grupo4">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/73.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/74.jpeg') }}"
                        data-caption="Central de Mavuzi, construção da super-estrutura do grupo5, principio de maio de 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/74.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/75.jpeg') }}"
                        data-caption="Central de Mavuzi, escavaçōes">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/75.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/76.jpeg') }}"
                        data-caption="Central de Mavuzi, Faixa posterior do grupo4">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/76.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/77.jpeg') }}"
                        data-caption="Central de Mavuzi, final de novembro de 1957">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/77.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/78.jpeg') }}"
                        data-caption="Central de Mavuzi, Grupo3 - Fundação do servo-mestre">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/78.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/79.jpeg') }}"
                        data-caption="Central de Mavuzi, Infa-extrutura do berço G-5">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/79.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/80.jpeg') }}"
                        data-caption="Central de Mavuzi, infra-estrutura de anexos do grupo IV, fins de maio de 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/80.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/81.jpeg') }}"
                        data-caption="Central de Mavuzi, infra-estrutura de anexos do grupo IV, fins de maio de 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/81.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/82.jpeg') }}"
                        data-caption="Central de Mavuzi, Inicio da betonagem do grupo5">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/82.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/83.jpeg') }}"
                        data-caption="Central de Mavuzi, Montagem de cofragem e armaduras do grupo3">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/83.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/84.jpeg') }}"
                        data-caption="Central de Mavuzi, Murro de suporte da estação">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/84.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/85.jpeg') }}"
                        data-caption="Central de Mavuzi, murro de suporte da estrada da subestação - 17-01-1951">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/85.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/86.jpeg') }}"
                        data-caption="Central de Mavuzi, poço de bombagem">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/86.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/87.jpeg') }}"
                        data-caption="Central de Mavuzi, superestrutura do blocoG-4">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/87.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/88.jpeg') }}"
                        data-caption="Central de Mavuzi, transporte do transformador do grupo 4">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/88.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/90.jpeg') }}"
                        data-caption="Central de Mavuzi, Transporte do transformador do grupo4">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/90.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/89.jpeg') }}"
                        data-caption="Central de Mavuzi, Transporte do transformador do grupo4">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/89.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/92.jpeg') }}"
                        data-caption="Central de Mavuzi 12">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/92.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/93.jpeg') }}"
                        data-caption="Central em construcao, chicamba1">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/93.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/94.jpeg') }}"
                        data-caption="Central Mavuzi - Transporte do transformador">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/94.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/95.jpeg') }}"
                        data-caption="Central Mavuzi - Transporte do transformador 1">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/95.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/96.jpeg') }}"
                        data-caption="Central Mavuzi - Transporte do transformador 2">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/96.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/97.jpeg') }}"
                        data-caption="Central Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/97.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/98.jpeg') }}"
                        data-caption="Central Mavuzi, Canal de fuga, bloco5">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/98.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/99.jpeg') }}"
                        data-caption="Central Mavuzi, Rolhao de fecho da conduta forcada em construcao 1955">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/99.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/100.jpeg') }}"
                        data-caption="Central Mavuzi, Rolhao de fecho da conduta forcada em construcao 1955">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/100.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/101.jpeg') }}"
                        data-caption="Central Mavuzi, Rolhao de fecho da conduta forcada em construcao 1955">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/101.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/102.jpeg') }}"
                        data-caption="Central Mavuzi, Rolhao de fecho da conduta forcada em construcao 1955">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/102.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/103.jpeg') }}"
                        data-caption="Central Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/103.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/104.jpeg') }}"
                        data-caption="Central Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/104.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/105.jpeg') }}"
                        data-caption="Central Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/105.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/185.jpeg') }}"
                        data-caption="Junta da delimitação da conduta forcada, Central mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/185.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/186.jpeg') }}"
                        data-caption="Junta de delatacao da conduta forcada, central mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/186.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/187.jpeg') }}"
                        data-caption="Lado de cima do Alternador">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/187.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/188.jpeg') }}"
                        data-caption="Linha 66 Kv, mavuzi - Chimoio">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/188.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/189.jpeg') }}"
                        data-caption="Linha 66kv Mavuzi - 1950">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/189.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/190.jpeg') }}"
                        data-caption="Linha 66kv, Mavuzi - Chimoio, Postes">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/190.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/191.jpeg') }}"
                        data-caption="Linha Beira-Mavuzi em construcao, alta tensa">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/191.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/192.jpeg') }}"
                        data-caption="Linha de alta tensao em construcao, Beira mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/192.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/193.jpeg') }}"
                        data-caption="Linha de alta tensao em construcao, Beira mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/193.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/194.jpeg') }}"
                        data-caption="Linha Mavuzi-Beira, alta tensao, 29-09-1972">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/194.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/198.jpeg') }}"
                        data-caption="Mavuze">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/198.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/199.jpeg') }}"
                        data-caption="Mavuzi, alteamento do acude, maio de 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/199.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/200.jpeg') }}"
                        data-caption="Mavuzi, Arcos da ponte Acude">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/200.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/201.jpeg') }}"
                        data-caption="Mavuzi, Carga do estrator do alternador do grupo4 para o camião Albim">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/201.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/202.jpeg') }}"
                        data-caption="Mavuzi, evolução da turbina do grupo4 em vila peng - 10-03-1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/202.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/203.jpeg') }}"
                        data-caption="Mavuzi, infra-estrutura do grupo3 - armaduras. principio de Setembro">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/203.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/204.jpeg') }}"
                        data-caption="Mavuzi, Maio 1977- Valvulas e condutas">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/204.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/205.jpeg') }}"
                        data-caption="Mavuzi, Passagem na ponte açude - abril de 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/205.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/206.jpeg') }}"
                        data-caption="Mavuzi, ponte acude, margem direita">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/206.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/207.jpeg') }}"
                        data-caption="Mavuzi, ponte açude">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/207.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/208.jpeg') }}"
                        data-caption="Mavuzi, vista da ponte acude">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/208.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/209.jpeg') }}"
                        data-caption="Moldagem de fundação, Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/209.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/210.jpeg') }}"
                        data-caption="Molde de construção de postes de betão, linha 66kv, Mavuzi - Chimoio">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/210.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/211.jpeg') }}"
                        data-caption="Molde de construção do túnel na central Mavuzi - 1950">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/211.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/212.jpeg') }}"
                        data-caption="Molde de contrução ou fabrico de poste de betão das linhas 66ku - Mavuzi, Chimoio">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/212.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/213.jpeg') }}"
                        data-caption="Moldes do tabuleiro da ponte acude, Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/213.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/214.jpeg') }}"
                        data-caption="Montagem da turbina, Grupo4, Central mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/214.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/215.jpeg') }}"
                        data-caption="Montagem da turbina">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/215.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/216.jpeg') }}"
                        data-caption="Montagemda evoluta da turbina do grupo4">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/216.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/218.jpeg') }}"
                        data-caption="Na construção da linha beira-Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/218.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/226.jpeg') }}"
                        data-caption="Planta de ficcao dos orgaos de manobras das comportas, mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/226.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/227.jpeg') }}"
                        data-caption="Ponte açude - Arcos, Central mavuze">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/227.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/228.jpeg') }}"
                        data-caption="Ponte acude com pilares Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/228.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/230.jpeg') }}"
                        data-caption="Ponte açude, Moldagem tibreiro, 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/230.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/231.jpeg') }}"
                        data-caption="Ponte açude, vista geral, mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/231.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/232.jpeg') }}"
                        data-caption="Poste de alta tensão, linha Beira-Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/232.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/233.jpeg') }}"
                        data-caption="Postes de betão da linha 66kv - Mavuzi, Chimoio 1950">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/233.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/234.jpeg') }}"
                        data-caption="Postes de betão da linha 66kv Mavuzi, Chimoio, década 50">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/234.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/235.jpeg') }}"
                        data-caption="Quedas do rio Revué CDM 55m">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/235.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/236.jpeg') }}"
                        data-caption="Retirada do material sólido no interior da galeria do túnel em construção, Central Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/236.jpeg') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/241.jpeg') }}"
                        data-caption="Subestação da central de Mavuzi na 1a fase 1952">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/241.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/255.jpeg') }}"
                        data-caption="Válvula n1, jacto de 25m3/s - Central Mavuzi">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/255.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/256.jpeg') }}"
                        data-caption="Vigamento dos tabuleiros de ponte acude">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/256.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/257.jpeg') }}"
                        data-caption="Vista geral da ponte açude julho de 1958">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/257.jpeg') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/609.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/609.JPG') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/609.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/609.JPG') }}" alt="">
                    </a>
                </div>



                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/609.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/609.JPG') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/610.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/610.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/611.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/611.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/612.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/612.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/613.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/613.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/614.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/614.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/615.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/615.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/616.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/616.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/617.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/617.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/618.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/618.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/619.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/619.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/620.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/620.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/621.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/621.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/622.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/622.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/623.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/623.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/624.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/624.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/625.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/625.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/626.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/626.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/627.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/627.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/628.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/628.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/629.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/629.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/630.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/630.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/631.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/631.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/632.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/632.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/633.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/633.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/634.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/634.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/660.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/660.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/661.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/661.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/662.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/662.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/663.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/663.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/664.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/664.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/665.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/665.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/666.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/666.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/mavuzi/667.JPG') }}">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/mavuzi/667.JPG') }}" alt="">
                    </a>
                </div>


            </div>
        </li>
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/388.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/388.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/389.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/389.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/390.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/390.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/391.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/391.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/392.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/392.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/393.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/393.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/394.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/394.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/395.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/395.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/396.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/396.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/397.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/397.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/398.JPG') }}"
                        data-caption="Beira-Mavuzi, Linha de alta tensao em construcao">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/398.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/399.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/399.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/400.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/400.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/401.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/401.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/402.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/402.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/403.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/403.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/404.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/404.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/405.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/405.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/407.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/407.JPG') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/409.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/409.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/410.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/410.JPG') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/411.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/411.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/412.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/412.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/413.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/413.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/414.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/414.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/415.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/415.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/416.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/416.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/417.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/417.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/418.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/418.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/419.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/419.JPG') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/420.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/420.JPG') }}" alt="">
                    </a>
                </div>


                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/421.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/421.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/422.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/422.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/423.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/423.JPG') }}" alt="">
                    </a>
                </div>
                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/424.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/424.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/425.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/425.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/galeria/timane/426.JPG') }}"
                        data-caption="">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/galeria/timane/426.JPG') }}" alt="">
                    </a>
                </div>


            </div>
        </li>
    </ul>
</div>

@endsection
