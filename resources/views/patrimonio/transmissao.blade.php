@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top uk-margin-small-right">
    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-remove-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal" href="#">Patrimonio da rede eleéctrica da
                        EDM</a>
                </li>
                <li><a href="#">Transmissão</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove-top uk-margin-remove-right">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transmissão</h4>


            <div uk-grid="masonry: true" uk-lightbox="animation: slide">
                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_ceramica.png') }}"
                            data-caption="1.	SUBESTAÇÃO DA CERÂMICA">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_ceramica.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Cerâmica</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Zona da Cerâmica a 800m da EN 7, no
                            distrito de Nicoadala;
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1986
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de recomissionamento</spa>: 2018
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 25MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 100MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 220/33/33kV-50MVA e TR2
                            220/33/33kV-50MVA
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 23.5MW/Fevereiro 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_alto_molocue.png') }}"
                            data-caption="Subestação da Alto Molocué">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_alto_molocue.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Alto Molocué</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Alto Molocué, ao longo da Estrada
                            nacional nr.1
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1983
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de recomissionamento</spa>: 2018
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 116MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 251MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 220/110/33kV-100MVA, TR2
                            220/110/33kV-100MVA, TR4 110/33kV-16MVA e TR5 220/7.7kV-35MVA
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 157MW/Março 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_chimuara.png') }}"
                            data-caption="SUBESTAÇÃO DE CHIMUARA">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_chimuara.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Chimuara</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Mopeia, Localidade de Chimuara,
                            ao longo da Estrada nacional nr.1
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1982
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de recomissionamento</spa>: 2002/2018
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 56MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 152MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 220/110kV-40MVA, TR2
                            110/33kV-16MVA, TR3 220/110/33kV-80MVA e TR4 110/33kV-16MVA
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 202.3MW/Março 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_mocuba.png') }}"
                            data-caption="SUBESTAÇÃO DE MOCUBA">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_mocuba.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Mocuba</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Mocuba, No regulado do Bive, a 7km da Estrada nacional nr.1
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1982
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 280MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 271.5MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 220/110/33kV-100MVA, TR2 220/110/33kV-100MVA, TR3 110/33kV-40MVA e TR5 33/11kV-31.5MVA
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 173MW/Março 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_uape.png') }}"
                            data-caption="SUBESTAÇÃO DE UAPÉ">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_uape.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Uapé</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Gilé, na localidade de Uapé, a 115km da Estrada nacional nr.1
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2008
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 16MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 110/33kV-16MVA
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 1.43MW/Abril 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_gurue.png') }}"
                            data-caption="SUBESTAÇÃO DE GURUÉ">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_gurue.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Gurué</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Gurué, no perimetro da vila
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2002
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 16MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 110/33kV-16MVA
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 5.3MW/Janeiro 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_marromeu.png') }}"
                            data-caption="SUBESTAÇÃO DE MARROMRU">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_marromeu.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Marromeu</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Marromeu, no perimetro da vila
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2008
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 16MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 110/33kV-16MVA
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 5.4MW/Junho 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_movel_ceramica.png') }}"
                            data-caption="SUBESTAÇÃO MÓVEL DA CERÂMICA">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_movel_ceramica.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação móvel da cerâmica</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Zona da Cerâmica a 800m da EN 7, no distrito de Nicoadala
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de recomissionamento</spa>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 25MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 25MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 220/33kV-25MVA
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 22MW/Fevereiro 2018
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_chimuara.png') }}"
                            data-caption="LINHA B05 SE’S CHIMUARA-MOCUBA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_chimuara.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA B05 SE’S CHIMUARA-MOCUBA</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: SE Chimuara – SE Mocuba
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1984
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 477MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 262km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Condor
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico e vidros
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: B05=193.20MW/Março de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_linha_matambo.png') }}"
                            data-caption="LINHAS B03 & B04 SE’S MATAMBO – CHIMUARA">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_linha_matambo.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Linhas B03 & BO4 SE&quot; Matambo - Chimuara</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: SE Matambo – SE Chimuara
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1983
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 477MVA para cada
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: B03=294km e B04=291km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Condor
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: isoladores
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: B03=101.90MW/Março de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: B04=100.40MW/Março de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_nicoadala.png') }}"
                            data-caption="LINHA B51 PS-NICOADALA – SE CERÂMICA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_nicoadala.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA B51 PS-NICOADALA – SE CERÂMICA</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: PS Nicoadala – SE Cerâmica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1986
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 239MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 20km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Condor
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico e vidros
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: B51=23.5 /Fevereiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_mocuba_alto_molocue.png') }}"
                            data-caption="LINHA B51 PS-NICOADALA – SE CERÂMICA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_mocuba_alto_molocue.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA B51 PS-NICOADALA – SE CERÂMICA</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: SE’s Mocuba – Alto Molocué
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1986
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 239MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 151km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Condor
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico e vidros
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: B07=166MW /Março de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

            </div>
        </div>


    </div>
    <hr>
    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('patrimonio.show', "geracao") }}">Geração</a></li>
        </ul>
    </div>
</div>
@endsection
