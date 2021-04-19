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
                transporte Norte</h4>
            <h3 class="uk-heading-divider  uk-text-bold uk-margin-small-top uk-margin-small-bottom">Subestações</h3>
            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_nampula.png') }}"
                            data-caption="Estado actual: Os equipamentos nesta subestação estão em bom estado operacional, mas com alguns casos que merecem um pouco de atenção, nomeadamente: O disjuntor do lado de alta do T1, cuja fixação do mecanismo de operação foi feita por adaptação; o tap changer do T5 com uma das molas do acumulador de energia partida e alguns seccionadores cujos mecanismos estão obsoletos.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_nampula.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação Nampula 220KV</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro de Mutauanha, Cidade de Nampula
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1988
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 100MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 200MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/110/33/22kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: T1[100MVA, 220/110/33kV]; T2[100MVA, 220/110/33kV]; T4[75MVA, 220/22kV], T5[40MVA, 110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 125.9MW/Janeiro de 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Aquando da entrada em serviço a Subestação NPL220kV, contava com uma potência instalada de 100MVA, correspondente à do
                            T2 e 2006 foi instalado o T1 de também 100MVA, aumentando a potência instalada para 200MVA.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_nampula_2.png') }}"
                            data-caption="Estado actual: Os   equipamentos   nesta  substação  estão	em bom estado operacional, tendo porém problemas de obsolescência de seccionadores.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_nampula_2.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação Nampula 110KV</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro de Mutauanha, Cidade de Nampula
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1984
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 35MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 90MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33/11kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: T102[40MVA, 110/33kV], T103[50MVA, 110/33kV], T31[10MVA, 33/11kV], T32[10MVA, 33/11kV], T33[10MVA, 33/11kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 52,3MW/ Fevereiro de 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Aquando da entrada em serviço desta Subestação, contava com uma potência instalada de 35MVA, entre os anos 2016 e 2017,
                            foram instalados 2 transformadores um de 40MVA e outro de 50MVA e depois foi movimentado o transformador de 35MVA, para
                            a subestação de Metoro; passando a potência instalada de 35MVA para 90MVA.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_namialo.png') }}"
                            data-caption="Equipamento novo e em bom estado operacional.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_namialo.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Namialo</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Posto administrativo de Namialo, Província de Nampula
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2018
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 40MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[40MVA, 110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 7.5MW/Fevereiro de 2021
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Subestação recém construída.
                        </p>
                    </div>
                </div>


                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_monapo.png') }}"
                            data-caption="Os   equipamentos   nesta  substação  estão	em bom estado operacional, tendo porém problemas de obsolescência de seccionadores">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_monapo.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Monapo</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Monapo, Província de Nampula.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1983
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 16MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33/11kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: T101[16MVA, 110/33kV], T31[5MVA, 33/11kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 9.61MW/11 de Dezembro de 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Em 2019, o transformador de T101, beneficiou-se de trabalho de substituição do seu tap changer, dado que o anterior
                            estava avariado.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_nacala.png') }}"
                            data-caption="Estado actual: Os equipamentos nesta Subestação estão em bom estado operacional, excepto alguns seccionadores que estão obsoletos.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_nacala.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Nacala</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Nacala, província de Nampula
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1982
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 70MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 70MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33/11kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: T101[35MVA, 110/33kV], T102[35MVA, 110/33kV], T31[10MVA, 33/11kV], T33[10MVA, 33/10.5kV], T11[8MVA, 11/6.6kV].
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 31.6MW/13 de Outubro de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Prevê-se a substituição do transformador T101, por um novo de 60MVA, com este projecto a substação irá contar com 95MVA.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_metoro.png') }}"
                            data-caption="Estado actual: Os equipamentos nesta Subestação estão em bom estado operacional.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_metoro.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Metoro</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Posto administrativo de Metoro, Província de Cabo Delgado
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2011
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 45MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[10MVA, 11/33], TR2[35MVA, 110/33]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 10MW/02 de Março de 2021
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Aquando da entrada desta Subestação em serviço, a sua potência instalada era de 10MVA e em 2019, foi instalado um
                            transformador de 35MVA, vindo da Subestação Nampula 110, subindo assim a potência instalada para 45MVA.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_pemba.png') }}"
                            data-caption="Estado actual: Equipamentos em bom estado operacional.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_pemba.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Pemba</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro de Muchara, Cidade de Pemba.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2005
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[20MVA, 110/33kV], TR2[40MVA, 110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 20.4MW / 27 de Fevereiro 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Em 2015, foi feito o uprating do TR1, passando de 16 para 20MVA a potência do TR1, Em 2017, foi instalado um novo
                            transformador de 40MVA, passando assim a potência instalada de nesta Subestação de 20 para 60MVA.
                        </p>
                    </div>
                </div>


                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/no_image.png') }}"
                            data-caption="Estado actual: O equipamento é novo, mas não há informação sobre o estado de conservação do mesmo, dada a situação política-militar, que se vive na região.">
                            <img src="{{ secure_asset('assets/images/centrais/no_image.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Macomia</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Macomia, Província de Cabo Delgado
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2010
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
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[16MVA,110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 1.5MW/Abril de 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Temos um nível de preocupação muito grande em poder fazer uma visita à esta Subestação, para termos dados sobre o estado
                            real da mesma, há contactos com o objectivos de ter informação actualizada sobre os níveis de segurança na região.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_auasse.png') }}"
                            data-caption="Estado actual: O equipamento é novo, mas não há informação sobre o estado de conservação do mesmo, dada a situação política-militar, que se vive na região.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_auasse.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Auasse</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Posta Administrativo de Auasse, Província de Cabo delgado
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2012
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
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[16MVA,110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 4.9 MW/Março de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Temos um nível de preocupação muito grande em poder fazer uma visita à esta Subestação, para termos dados sobre o estado
                            real da mesma, há contactos com o objectivos de ter informação actualizada sobre os níveis de segurança na região.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_niassa.png') }}"
                            data-caption="Estado actual: Equipamento em bom estado operacional">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_niassa.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Cuamba</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Cuamba, Província de Niassa
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2004
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
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[16MVA,110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 5.5MW/Abril de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Entre os anos 2018 e 2019, a Subestação de Cuamba teve uma ampliação, que consistiu na construção de BAY da linha C25
                            (linha de marrupa), ampliação de sala de comando e instalação de um STATCOM.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_marrupa.png') }}"
                            data-caption="Estado actual: Equipamento em bom estado operacional">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_marrupa.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Marrupa</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Distrito de Marrupa, Província de Niassa
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2019
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
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[16MVA,110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 1.03MW/ 24 de Outubro de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: A Subestação de Marrupa é a mais nova da DTNO, entrou em funcionamento em 2019 e contribuiu em grande medida na melhoria
                            da qualidade de energia na Província de Niassa.
                        </p>
                    </div>
                </div>


                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_lichinga.png') }}"
                            data-caption="Estado actual: O equipamento nesta Subestação está em bom estado operacional">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_lichinga.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Lichinga</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro de Lulimile, Cidade de Lichinga
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 26MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[16MVA, 110/33kV], Móvel[10MVA, 110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 11.9MW/ 01 de Outubro de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: Desta a sua entrada em funcionamento, a Subestação operou com o transformador TR1, em 2016 foi instalada a Subestação
                            móvel de 10MVA, para responder ao aumento da carga
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/no_image.png') }}"
                            data-caption="Estado actual:Os equipamentos estão em bom estado operacional.">
                            <img src="{{ secure_asset('assets/images/centrais/no_image.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Topuito</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Posto Administrativo de Topuito
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 50MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 75MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/22kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[25MVA, 110/33kV], TR1[25MVA, 110/33kV], TR1[25MVA, 110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 11.9MW/ 01 de Outubro de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: A Subestação é da Empresa de mineração Kenmare, mas a EDM é que faz a manutenção da mesma.
                        </p>
                    </div>
                </div>


            </div>

            <h3 class="uk-heading-divider  uk-text-bold uk-margin-large-top">Linhas</h3>

            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_gurue_cuamba.png') }}"
                            data-caption="">
                            <img src="{{ secure_asset('assets/images/centrais/linha_gurue_cuamba.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C22</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Zambézia no distrito de Gurué
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Niassa no distrito de Cuamba
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2004
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 70MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 100km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Wolf
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2004
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 19.05 no Mês de Setembro do ano de 2015
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_cuamba_lichinga.png') }}"
                            data-caption="">
                            <img src="{{ secure_asset('assets/images/centrais/linha_cuamba_lichinga.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C23</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Niassa no distrito de Cuamba
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Niassa, cidade de Lichinga
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2005
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2005
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 70MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 235km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Wolf
                        </p>

                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2005
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 11.79 no mês de novembro de 2015
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_cuamba_marupa.png') }}"
                            data-caption="">
                            <img src="{{ secure_asset('assets/images/centrais/linha_cuamba_marupa.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C25</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Niassa no distrito de Cuamba
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Niassa no distrito de Marupa
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2019
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 70MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 235km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Wolf
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2005
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 11.79 no mês de novembro de 2015
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_nampula_central.png') }}"
                            data-caption="">
                            <img src="{{ secure_asset('assets/images/centrais/linha_nampula_central.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C31</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província da cidade de Nampula (220kV)
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Nampula, cidade de Nampula Central
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 1984
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 99MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 4km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Wolf
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2004
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 64.70 no mês de dezembro de 2015
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_nampula_monapo.png') }}"
                            data-caption="Esta linha sofre vandalizacao e roubos contantes de cantoneiras. Erosao agudo na travessia sobre rio Monapo.	Tem espanta passaros danificados">
                            <img src="{{ secure_asset('assets/images/centrais/linha_nampula_monapo.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C32</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Nampula, cidade de Nampula Central
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Nampula no distrito de Monapo
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 1984
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 84MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 131km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Panther
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2004
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 33.08 no mês Junho de 2015
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_monapo_nacala.png') }}"
                            data-caption="Esta linha sofre vandalizacao e roubos contantes de cantoneiras. Sofre de erosao em alguns trocos em particular na zona de Nacala Port">
                            <img src="{{ secure_asset('assets/images/centrais/linha_monapo_nacala.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C33</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Nampula no distrito de Monapo
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Nampula no distrito de Nacala
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 1984
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 84MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 64km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Panther
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2004
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 25.01 no mês de Novembro de 2015
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_nampula_moma.png') }}"
                            data-caption="Da torre 469 a 479 esta linha foi substituido o cabo de guarda por ter sido a fectado pela corosao. A Linha esta em bom estado de conservacao">
                            <img src="{{ secure_asset('assets/images/centrais/linha_nampula_moma.png') }}" width="400" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C34</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Nampula, cidade de Nampula 220kV
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Nampula no distrito de Moma
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2007
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2007
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 70MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 170km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: kenmare
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2007
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 32.00 no mês de Maio de 2015
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_nampula_metoro.png') }}"
                            data-caption="">
                            <img src="{{ secure_asset('assets/images/centrais/linha_nampula_metoro.png') }}" width="400" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C35</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Nampula, cidade de Nampula 220kV
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Cabo Delgado no distrito de acuabe, localidade de Metoro
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2005
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2005
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 77MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 301km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: LYNX
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2007
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 32.00 no mês de Maio de 2015
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_metoro_pemba.png') }}"
                            data-caption="">
                            <img src="{{ secure_asset('assets/images/centrais/linha_metoro_pemba.png') }}" width="400" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C36</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Cabo Delgado no distrito de acuabe, localidade de Metoro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Cabo Delgado, cidade de Pemba
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2005
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2005
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 77MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 74km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: LYNX
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2005
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 17,30 no mês de Dezembro de 2015
                        </p>
                    </div>
                </div>

<div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_metoro_macomia.png') }}"
                            data-caption="A Linha C37 encontra se em estado avançado de corrosão de parafusos ao longo da linha, provocando queda de condutores em períodos de ventos fortes.">
                            <img src="{{ secure_asset('assets/images/centrais/linha_metoro_macomia.png') }}" width="400" height="300" alt=""
                                uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C37</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Cabo Delgado no distrito de Acuabe, localidade de Metoro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Cabo Delgado no distrito de Macomia
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2011
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2011
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 77MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 132km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: LYNX
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2011
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 5.80 no mês de Novembro de 2015
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/no_image.png') }}"
                            data-caption="Esta linha linha, na travessia sobre o rio Messalo em Macomia esta a afectada pala erosão que culminou com a queda de duas torres ( Torre 151 e Torre 152), como solução foram implantados dois pórticos de estrutura de madeira para garantir o continuo fornecimento de energia na SE Auasse.">
                            <img src="{{ secure_asset('assets/images/centrais/no_image.png') }}" width="400" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C38</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Cabo Delgado no distrito de Macomia
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Cabo Delgado no distrito de mosimba da praia, localidade de Auasse
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2012
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2012
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 77MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 87,5km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: LYNX
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2012
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: 4.20 no mês de Maio
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_nacala_nacala_velha.png') }}"
                            data-caption="">
                            <img src="{{ secure_asset('assets/images/centrais/linha_nacala_nacala_velha.png') }}" width="400" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C39</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Nampula no distrito de Nacala
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Nampula no distrito de Nacala – Velha (VALE)
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2015
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2015
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 99MW
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 28km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Dove
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: Vale
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2012
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: Sem informacao
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_karpowership_nacala.png') }}"
                            data-caption="">
                            <img src="{{ secure_asset('assets/images/centrais/linha_karpowership_nacala.png') }}" width="400" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA C40</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Norte
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: Província de Nampula no distrito de Nacala (Karpowership)
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Província de Nampula no distrito de Nacala
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de construção</spa>: 2016
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de Reabilitação</spa>: 2016
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: -
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 1.1km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Tem
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Proprietário</spa>: EDM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ano de comissionamento</spa>: 2016
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta maxima:</spa>: Sem informacao
                        </p>
                    </div>
                </div>

            </div>
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
