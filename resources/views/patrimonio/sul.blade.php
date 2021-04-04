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
                <li><a href="#">Transmissão Sul</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove-top uk-margin-remove-right">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transmissão - Divisão de
                transporte Sul</h4>

            <h3 class="uk-heading-divider  uk-text-bold uk-margin-small-top">Subestações</h3>
            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se1.png') }}"
                            data-caption="Subestação SE1 - Tem como fonte de alimentação a linha DL24 a partir da SE3. No projecto Inicial a subestação erra composta por dois transformadores de 33/11KV-10MVA, que posteriormente foram movimentados para outras subestações.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se1.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE1</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, Kapfumo, Bairro Central
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: Tempo colonial e requalificada em
                            2003/2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR3 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 26.94MW em Dezembro de 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_s2.png') }}"
                            data-caption="Subestação SE2">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_s2.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE2</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, Kapfumo, Bairro da Malanga
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: Tempo colonial, requalificada em
                            2003/2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 25MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR2 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 21.94MW em Fevereiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: O TR1 [33/11kV - 25MVA] encontrasse avariado e fora de
                            serviço
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se3.png') }}"
                            data-caption="A subestação recebe energia a partir da CTM através das linhas DL18 e DL19 em 66KV e possui interligação com as subestações SE7 através da DL25 e com a SE1 atraves da DL24. Esta subestação alimenta a baixa da cidade de Maputo e bairros circunvizinhos com uma tensão de 11kV.
                            No projecto Inicial a subestação erra composta por dois transformadores de 33/11KV-10MVA, que posteriormente foram movimentados para outras subestações.
                            O TR1 [33/11kV - 20MVA] encontrasse fora de serviço devido avaria do cabo que o alimenta.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se3.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE3</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, Kaphumo, Bairro
                            central-Baixa da Cidade
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2003/2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [33/11kV - 20MVA], TR2
                            [66/11kV - 30MVA] e TR3 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 42.74MW em Novembro de 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se4.png') }}"
                            data-caption="Ela pode ser alimentada a partir da SE5 atraves da DL17 ou apartir da SE6 atraves da DL16 em 66KV..">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se4.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE4</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, Kaphumo, Bairro de Mavalane
                            -Aeroporto.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1992
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 16.00MW em Janeiro de 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se5.png') }}"
                            data-caption="Devido ao crescimento de carga foi adicionado o TR2 [66/11kV - 20MVA]">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se5.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE5</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, kapfumo, Bairro da
                            Sommerschild - Campus UEM
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1990
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/11kV - 20MVA] e TR2
                            [66/11kV - 20MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 33.49MW em Janeiro de 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se6.png') }}"
                            data-caption="Recebe tensão de 66KV a partir da subestação do Infulene linha DL2 que interliga a DL16. Ela foi concebida para tirar tensões de 33KV e 11KV para alimentar os bairros periféricos da cidade de Maputo.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se6.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE6</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, kapfumo, Bairro do Jardim
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1992 requalificada em 2013
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/11kV - 40MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 24.14MW em Janeiro de 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se7.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se7.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE7</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, kapfumo, Bairro de
                            Malhangalene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 25.56MW em Marco de 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se8.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se8.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE8</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, kapfumo, Bairro de
                            Ferroviario
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 24.24MW em Novembro de 2020
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se9.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se9.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE9</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, kapfumo, Bairro policial
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/11kV - 30MVA] e TR2
                            [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 29.14MW em Feverreiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe tensão em 66kV a partir da SE Infulene, através
                            das linhas DL7A e DL8A, escoando a uma tensão de 33kV e 11kV.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se10.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se10.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE10</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, kapfumo, Bairro do Zimpeto
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2011
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 52MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 52MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/33kV - 40MVA] e TR2
                            [33/11kV - 12MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 39.70MW em Junho de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe a partir de SE Infulene através das linhas DL26
                            e DL7. Alimenta o Estádio Nacional de Zimpeto, a Vila Olímpica e
                            os arredores.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se11.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se11.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE11</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>:Cidade de Maputo, kapfumo, Bairro de Chihango
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2011
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 52MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 52MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/11kV - 40MVA] e TR2
                            [33/11kV - 12MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 15.39MW em Novembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe a partir de SE Infulene através das linhas
                            DL28. Alimenta as áreas turísticas do Costa de Sol e áreas
                            circunvizinhas.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se12.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se12.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Marracuene</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, Distrito de Marracuene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2014
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 20MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/33kV - 20MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 15.7MW em Fevereiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe a partir de SE Infulene através das linhas
                            DL27. Alimenta o distrito de Marracuene.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se13.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se13.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Khongolote </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, Município de Matola,
                            Bairro de Muhalaze
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 40MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/33kV - 40MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 31.56MW em Novembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe a partir de SE Infulene através da linha DL5.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se14.png') }}"
                            data-caption="Recebe da linha DL14 a partir da Subestação de Matola. Da Subestaçãoo de Matola Rio saem as linhas EL1 que alimenta parte Alta da Cidade da Matola, linha EL2 alimenta Umbeluzi, EL3 alimenta Djuba e EL4 alimenta Texlon.
                        No projecto Inicial a subestação erra composta por um transformador de 66/33KV-10MVA, devido ao crescimento de carga foi substituído pelo TR de 30MVA.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se14.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Matola Rio </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, distrito de Boane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 27.88MW em Novembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe da linha DL14 a partir da Subestação de Matola.
                            Da Subestaçãoo de Matola Rio saem as linhas EL1 que alimenta
                            parte Alta da Cidade da Matola, linha EL2 alimenta Umbeluzi, EL3 alimenta Djuba e EL4
                            alimenta Texlon.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se15.png') }}"
                            data-caption="A Subestação de Boane recebe a partir da Subestação de Infulene através da linha DL1, da Subestação de Matola através da linha DL14 e Salamanga através da linha DL20. A Subestação de Boane alimenta a Vila de Namaacha e distrito de Boane.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se15.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Boane </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, distrito de Boane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1980
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 19.58MW em Abril de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: A Subestação de Boane recebe a partir da Subestação de
                            Infulene através da linha DL1, da Subestação de Matola através da
                            linha DL14 e Salamanga através da linha DL20. A Subestação de Boane alimenta a Vila de
                            Namaacha e distrito de Boane.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se16.png') }}"
                            data-caption="Recebe da Subestação de Infulene a partir de DL1A e também pode receber da Subestação de Boane a partir de DL1B. Têm saídas para Machava, Moamba e Casa Branca a 33kV.
                        No projecto Inicial a subestação erra composta por um transformador de 66/33KV-10MVA, devido ao crescimento de carga foi adicionado o TR de 30MVA e posteriormente em 2020 foi ligada uma SE Móvel de [66/33kV - 20MVA].">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se16.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Matola Gare</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, Município de Matola,
                            Bairro de Matola Gare
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1982 e requalificada em 2003
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/33kV - 30MVA], TR2
                            [66/33kV - 10MVA] e TR Móvel [66/33kV - 20MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 36.12MW em Novembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe da Subestação de Infulene a partir de DL1A e
                            também pode receber da Subestação de Boane a partir de DL1B. Têm
                            saídas para Machava, Moamba e Casa Branca a 33kV.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se17.png') }}"
                            data-caption="A Subestação recebe de SE Infulene através da linha DL6 e SE Matola através da linha DL13. Alimenta a zona Industrial da Machava, Posto Administrativo da Machava e arredores. No projecto Inicial a subestação erra composta por um transformador de 66/33KV-30MVA, devido ao crescimento de carga foi adicionado o TR2 [66/33kV - 30MVA].
                        Importa referir que o transformador 2 da SE Machava avariou em 2018 e foi substiuido pelo transformador 2 da SE CTM com as mesmas caracteristicas.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se17.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Machava</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, Município de Matola,
                            Bairro de Machava
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1990 requalificada em 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/33kV - 30MVA] e TR2
                            [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 44.91MW em Dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: A Subestação recebe de SE Infulene através da linha
                            DL6 e SE Matola através da linha DL13. Alimenta a zona Industrial da
                            Machava, Posto Administrativo da Machava e arredores.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se18.png') }}"
                            data-caption="A Subestação é alimentada a partir de SE Infulene, através da linha DL1. A Subestação alimenta o parque Industrial de Beluluane e a zona Residencial de Beluluane.
                        Importa referir que o TR1 avariou, actualmente somente o TR Movel está operacional, enquanto faz-se a movimentacao do TR2 para o local do TR1.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se18.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Beluluane</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, no distrito de Boane, no
                            Parque Industrial de Beluluane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>:
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 20MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/11kV - 30MVA] e TR2
                            [66/33/11kV - 30MVA] e TR Móvel [66/11Kv – 20 MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 4.2.MW em Janeiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: A Subestação é alimentada a partir de SE Infulene,
                            através da linha DL1. A Subestação alimenta o parque Industrial de
                            Beluluane e a zona Residencial de Beluluane.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se19.png') }}"
                            data-caption="Tem uma central eléctrica constituído por dois geradores de 11kV e capacidade de 9MVA cada totalizando 18MVA de potência instalada. A sua subestação é constituída por dois transformadores, um transformador 110/33/11kV. Alimenta a localidade de Sabié a partir da linha EL18, e outro transformador de 11/110kV em paralelo com o primeiro transformador alimenta a Subestação de Infulene a partir da linha CL4.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se19.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Corumane</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, no distrito de Moamba,
                            localidade de Sabié, na região de Corumane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1999
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 18MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 18MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 11/33/110kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [11/110kV - 9MVA] e TR2
                            [11/33/110kV - 9MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 5.69MW em Dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Tem uma central eléctrica constituído por dois
                            geradores de 11kV e capacidade de 9MVA cada totalizando 18MVA de potência
                            instalada. A sua subestação é constituída por dois transformadores, um transformador
                            110/33/11kV.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se20.png') }}"
                            data-caption="É uma subestaco de interligacao, sendo que interliga com Comat Port atravez da linha BL4, interliga com a CTRG atravez das linhas CTRG1 e CTRG2), interliga com a Gigawat atravez atraves da extencao dos Barramentos 1 e 2, interliga com SE Infulene atravez da linha BL2 e por fim Interliga com a SE Dzimbene atravez da linha BL5.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se20.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Ressano Garcia</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, no distrito de Moamba,
                            localidade de Ressano Garcia
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2012
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: N/D
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: N/D
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: É uma subestaco de interligacao, sendo que interliga
                            com Comat Port atravez da linha BL4, interliga com a CTRG atravez
                            das linhas CTRG1 e CTRG2), interliga com a Gigawat atravez atraves da extencao dos
                            Barramentos 1 e 2, interliga com SE
                            Infulene atravez da linha BL2 e por fim Interliga com a SE Dzimbene atravez da linha BL5.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se21.png') }}"
                            data-caption="É alimentada em 275kV a partir da BL3 com origem na subestação de Ressano Garcia e possui uma interligação a 275kV com a subestação da Matola através da BL1. É a principal fonte de fornecimento de energia eléctrica a região sul de Moçambique incluindo a linha sul que alimenta as províncias de Gaza e Inhambane a 110kV através da CL1. Possui um interligação com a central de Corrumana através da CL4 a 110kV.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se21.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Infulene</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Provincia de Maputo, no Bairro de Infulene.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1972 requalificada
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 180MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 690MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275/66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [275/66/11kV - 250MVA], TR2
                            [275/66/11kV - 250MVA], TR3 [275/66/10.5kV - 120MVA], TR5 [110/66/0.4kV - 30MVA], TR5
                            [110/66/0.4kV - 30MVA] e TR Móvel [66/33kV - 10MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: É alimentada em 275kV a partir da BL3 com origem na
                            subestação de Ressano Garcia e possui uma interligação a 275kV com a
                            subestação da Matola através da BL1.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se22.png') }}"
                            data-caption="A sua alimentação é feita através de duas linhas de 275kV -BL3 com origem na SE- Maputo e BL1 com origem da SE-Infulene. Possui 6 linhas de saída em 66kV sendo 3 dedicadas a Cidade do Maputo(DL09, DL11, DL12) e as restantes 3 a Província de Maputo (DL13, DL14, DL15).
                        Importa referir que o TR3 esta em processo de montagem, por isso não foi incluído na potencia instalada.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se22.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação Matola-275</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade da Matola, Bairro do Fomento.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2006
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 320MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 410MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275/66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [275/66/33kV - 160MVA], TR2
                            [275/66/33kV - 160MVA], TR3 [275/66/33kV - 160MVA], [Cascata 275/132-132/66KV – 80 MVA] e TR
                            [66/33kV - 10MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: A sua alimentação é feita através de duas linhas de
                            275kV -BL3 com origem na SE- Maputo e BL1 com origem da SE-Infulene.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se23.png') }}"
                            data-caption="É alimentada a partir de infulene a 66kV através da linha DL5 e alimenta o distrito de Manhiça incluindo a vila municipal e os distritos de Xinavane a 33kV.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se23.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Manhiça</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, no distrito de Manhiça.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1990 requalificada 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 7.92MW em fevereiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: É alimentada a partir de infulene a 66kV através da
                            linha DL5 e alimenta o distrito de Manhiça incluindo a vila
                            municipal e os distritos de Xinavane a 33kV.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se24.png') }}"
                            data-caption="Recebe alimentação a 66KV a partir da SE Matola 275KV e da SE-Infulene, através da DL14 e DL1 respectivamente e alimenta o distrito de Ka-Tembe, Matutuine incluindo as regiões turísticas de Ponta D´Ouro, Bela Vista, assim como as minas de calcário de Salamanga.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se24.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Salamanga 66/33kV-32MVA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Maputo, distrito de Ka-Tembe.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 32MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [66/33kV - 16MVA] e TR2
                            [66/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 18.72MW em Agosto de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe alimentação a 66KV a partir da SE Matola 275KV
                            e da SE-Infulene, através da DL14 e DL1 respectivamente e alimenta
                            o distrito de Ka-Tembe, Matutuine incluindo as regiões turísticas de Ponta D´Ouro, Bela
                            Vista, assim como as minas de calcário de Salamanga.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se25.png') }}"
                            data-caption="Essa Subestação funciona também como ponto de transição ou transferência de carga a partir das Subestações de Infulene através da linha DL3 e Matola através da linha DL11 para alimentar o Centro de cidade de Maputo e uma parte da Cidade da Matola.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se25.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da CTM</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Cidade de Maputo, no bairro Luis Cabral.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: N/D
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: N/D
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR13 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Essa Subestação funciona também como ponto de
                            transição ou transferência de carga a partir das Subestações de Infulene
                            através da linha DL3 e Matola através da linha DL11 para alimentar o Centro de cidade de
                            Maputo e uma parte da Cidade da
                            Matola.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se26.png') }}"
                            data-caption="A subestação recebe a tensão a partir da subestação de Infulene através da linha CL1  a 110kV e alimenta a vila municipal de Macia e arredores do distrito de Bilene a 33kV.
                        No projecto Inicial a subestação erra composta por um transformador de 110/33KV-10MVA, posteriormente foi substituído por um de 16MVA.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se26.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação Macia</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Gaza, Distrito de Bilene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 26MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [110/33kV - 16MVA] e TR
                            Móvel [110/33kV - 10MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 16.5MW em dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: A subestação recebe a tensão a partir da subestação de
                            Infulene através da linha CL1 a 110kV e alimenta a vila municipal
                            de Macia e arredores do distrito de Bilene a 33kV.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se27.png') }}"
                            data-caption="A subestação recebe a tensão a partir de duas fontes, a BL5 apartir da SE Ressano Garcia e CL3B apartir da SE Kuvaninga e alimenta a SE Macia atravez da Linha CL3A.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se27.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Dzimbene</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Gaza, Distrito de Bilene,
                            localidade de Dzimbene.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 250MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 250MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275/110kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [110/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 69.7MW Janeiro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: A subestação recebe a tensão a partir de duas fontes,
                            a BL5 apartir da SE Ressano Garcia e CL3B apartir da SE Kuvaninga
                            e alimenta a SE Macia atravez da Linha CL3A.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se28.png') }}"
                            data-caption="Importa referir que apenas o TR2 esta em funcionamento. A subestacao recebe a tensão a partir da linha CL3. Essa Subestação alimenta o distrito de Chokwé e através da interligação com a subestação de Macia, a Subestação de Lionde pode alimentar a Vila de Macia – distrito de Bilene.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se28.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Lionde</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Provincia de Gaza, Distrito de Chokwe, na
                            Localidade de Lionde.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1985 e recondicionada em 2018
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 32MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 32MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR3 [110/33kV - 16MVA] e TR2
                            [110/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 12.08MW em Janeiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Importa referir que apenas o TR2 esta em
                            funcionamento. A subestacao recebe a tensão a partir da linha CL3.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se29.png') }}"
                            data-caption="A subestacao é alimentada a partir da subestação de Lionde através da linha CL7 a 110KV e alimenta a vila de Mapai e arredores do distrito com o mesmo nome a 33KV. Igualmente alimenta os distritos de Mabalane e Massingir a 33KV.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se29.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Mapai</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Província de Gaza, no Distrito de Mapai.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2016
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 16MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [110/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 2MW
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: A subestacao é alimentada a partir da subestação de
                            Lionde através da linha CL7 a 110KV e alimenta a vila de Mapai e
                            arredores do distrito com o mesmo nome a 33KV.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se30.png') }}"
                            data-caption="A subestacao recebe tensão a partir da Subestação de Infulene através da linha CL2 proveniente da SE Macia e interliga com a SE Lindela através de CL9. Alimenta a Cidade de Xai – Xai, Posto Administrativo de Chissano, Distrito de Chidenguele, Chibuto e a região de Chonguene e Zunguene. Foi inaugurado em 1984 e 2004 aumentou-se a sua capacidade de 16 MVA para 40 MVA.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se30.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Chicumbane</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Provincia de Gaza, no distrito de Xai – Xai,
                            localidade de Chicumbane.
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1984 e requalificada em 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [110/33kV - 40MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 30MW em Dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: A subestacao recebe tensão a partir da Subestação de
                            Infulene através da linha CL2 proveniente da SE Macia e interliga
                            com a SE Lindela através de CL9.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se31.png') }}"
                            data-caption="Recebe a partir de SE Chicumbane através das linhas CL9. Alimenta cidade de Inhambane a partir da linha EL1-Inhambane, Maxixe a partir da linha EL2-Maxixe, Inharrime a partir da linha EL3-Inharrime, Funhalouro a partir da linha EL4-Funhalouro, Praia de Paindane a partir da linha EL5 e os restantes distritos da Província de Inhambane.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se31.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Lindela</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Provincia de Inhambane, Distrito de Jangamo,
                            Localidade de Lindela
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2002
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 32MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [110/33kV - 16MVA] e TR2
                            [110/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 25.42MW em Dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe a partir de SE Chicumbane através das linhas
                            CL9.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_massinga.png') }}"
                            data-caption="Recebe 110kv a partir de SE Lionde através das linhas CL10.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_massinga.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Massinga</h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Provincia de Inhambane, Municipio de
                            Massinga, Localidade de Nguluve
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2018
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada aquando entrada em serviço</span>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Potência instalada actual</span>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Transformadores de potência</span>: TR1 [110/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: 5.26MW em Junho de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Nota</span>: Recebe 110kv a partir de SE Lionde através das linhas
                            CL10.
                        </p>
                    </div>
                </div>
            </div>

            <h3 class="uk-heading-divider  uk-text-bold uk-margin-large-top">Linhas</h3>

            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_ressano_garcia_macia.png') }}"
                            data-caption="LINHA BL5 SE’S RESSANO GARCIA-MACIA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_ressano_garcia_macia.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA BL5 SE’S RESSANO GARCIA-MACIA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Ressano
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Dzimbene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 187km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: BL5=59,24/12/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado + OPW
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_ressano_port.png') }}"
                            data-caption="LINHA BL4 SE’S RESSANO GARCIA-KOMATTI PORT">
                            <img src="{{ secure_asset('assets/images/centrais/linha_ressano_port.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA BL4 SE’S RESSANO GARCIA-KOMATTI
                            PORT
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Ressano
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: Komatti Port
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1973
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 9km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: BL4= 359,84MVA/01/2017
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado + OPW
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_maputo_matola.png') }}"
                            data-caption="LINHA BL3 SE’S MAPUTO-MATOLA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_maputo_matola.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA BL3 SE’S MAPUTO-MATOLA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Maputo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Matola 275
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 16km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: BL3= 497MVA/06/2015
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado + OPW
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_ressano.png') }}"
                            data-caption="LINHA BL2 SE’S INFULENE- RESSANO GARCIA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_ressano.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA BL2 SE’S INFULENE- RESSANO
                            GARCIA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Ressano
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1972
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 76km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: BL2= 498,25MVA (10/2015)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado + OPW
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_matola.png') }}"
                            data-caption="LINHA BL1 SE’S INFULENE-MATOLA 275">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_matola.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA BL1 SE’S INFULENE-MATOLA 275
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Matola 275
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2000
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 16km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: BL1=405,73MVA (01/2016) e BL1=401,97MVA
                            (01/2017)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado + OPW
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_chicumbane_inhambane.png') }}"
                            data-caption="LINHA CL9 SE’S CHICUMBANE- INHAMBANE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_chicumbane_inhambane.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL9 SE’S CHICUMBANE- INHAMBANE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Chicumbane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Inhambane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2002
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 68MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 233,8km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: AAAC 150
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Porcelana & Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: CL9= 30,55MVA (02/2015)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_kuvaninga_mapai.png') }}"
                            data-caption="LINHA CL7 SE’S KUVANINGA-MAPAI">
                            <img src="{{ secure_asset('assets/images/centrais/linha_kuvaninga_mapai.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL7 SE’S KUVANINGA-MAPAI
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Kuvaninga
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Mapai
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2002
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 68MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 233,8km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: AAAC 150
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Porcelana & Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: CL9= 30,55MVA (02/2015)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_lionde_kuvaninga.png') }}"
                            data-caption="LINHA CL6 SE’S LIONDE-KUVANINGA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_lionde_kuvaninga.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL6 SE’S LIONDE-KUVANINGA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Lione
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Ressano
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2015
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 99MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 31,5km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Dove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Porcelana
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: CL6= 32,3MVA/02/2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline"
                            href="{{ secure_asset('assets/images/centrais/linha_corrumana_komatti_port.png') }}"
                            data-caption="LINHA CL5 SE’S CORRUMANA-KOMATTI PORT">
                            <img src="{{ secure_asset('assets/images/centrais/linha_corrumana_komatti_port.png') }}"
                                width="500" height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL5 SE’S CORRUMANA-KOMATTI PORT
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Corrumana
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: komatti Port
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1990
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 99MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 40km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Dove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: CL5=
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Não desenhada para cabo de guarda
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_corrumana.png') }}"
                            data-caption="LINHA CL4 SE’S INFULENE-CORRUMANA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_corrumana.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL4 SE’S INFULENE-CORRUMANA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: Corrumana
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1984
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 99MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 92km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Dove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos & Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: CL4= 52,75MVA/04/2017
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Não desenhada para cabo de guarda
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_macia_dzimbene.png') }}"
                            data-caption="LINHA CL3A SE’S MACIA – DZIMBENE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_macia_dzimbene.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL3A SE’S MACIA – DZIMBENE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Macia
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: Dzimbene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1983
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 99MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 4km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Dove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos & Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: CL3A= 77,18MVA/12/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Não desenhada para cabo de guarda
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_dzimbene_lionde.png') }}"
                            data-caption="LINHA CL3B SE’S DZIMBENE – LIONDE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_dzimbene_lionde.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL3B SE’S DZIMBENE – LIONDE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Dzimbene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Lionde
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1983
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 99MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 49km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Dove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos & Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: CL3B=23,205MVA/01/2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Não desenhada para cabo de guarda
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_macia_chicumbane.png') }}"
                            data-caption="LINHA CL2 SE’S MACIA – CHICUMBANE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_macia_chicumbane.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL2 SE’S MACIA – CHICUMBANE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Macia
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Chicumbane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1983
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 99MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 49km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Dove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: CL2=59,16MVA/12/2020
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Não desenhada para cabo de guarda
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_macia.png') }}"
                            data-caption="LINHA CL1 SE’S INFULENE-MACIA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_macia.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL1 SE’S INFULENE-MACIA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Macia
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Chicumbane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1983
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 99MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 125km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Dove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos & Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: CL1= 91,09MVA (01/2016)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Não desenhada para cabo de guarda
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_beluluane_boane.png') }}"
                            data-caption="LINHA DL32 SE’S BELULUANE-BOANE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_beluluane_boane.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL32 SE’S BELULUANE-BOANE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Beluluana
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Boane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2019
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 120MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Duplo
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 15km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xDove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL32=
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline"
                            href="{{ secure_asset('assets/images/centrais/linha_matola_gare_beluluane.png') }}"
                            data-caption="LINHA DL31 SE’S MATOLA GARE-BELULUANE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_matola_gare_beluluane.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL31 SE’S MATOLA GARE-BELULUANE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Matola Gare
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Beluluane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2019
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 120MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Duplo
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 15km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xDove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL32=
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_matola_gare.png') }}"
                            data-caption="LINHA DL30 SE’S INFULENE-MATOLA GARE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_matola_gare.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL30 SE’S INFULENE-MATOLA GARE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Matola Gare
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2019
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 120MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Duplo (com DL1)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 15km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xDove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL30= Reserva
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_muhalaze.png') }}"
                            data-caption="LINHA DL29 SE’S INFULENE-MUHALAZE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_muhalaze.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL29 SE’S INFULENE-MUHALAZE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Muhalaze
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2015
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 120MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Duplo (com a DL26)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 15km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xDove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL29= 79,83MVA/01/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline"
                            href="{{ secure_asset('assets/images/centrais/linha_magoanine_costa_do_sol.png') }}"
                            data-caption="LINHA DL28 SE’S 9 (MAGOANINE) -11 (COSTA DO SOL)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_magoanine_costa_do_sol.png') }}"
                                width="500" height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL28 SE’S 9 (MAGOANINE) -11
                            (COSTA DO SOL)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE 9
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 11
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2015
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 120MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: M/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 8,3km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xDove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL28= 7,2MVA (2/2019)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_zimpeto_marracuene.png') }}"
                            data-caption="LINHA DL27 SE’S 10 (ZIMPETO) -MARRACUENE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_zimpeto_marracuene.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL27 SE’S 10 (ZIMPETO)
                            -MARRACUENE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE ZIMPETO
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Marracuene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2015
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 120MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 8,3km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xDove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL27= 17,47 MVA (12/2019)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_zimpeto_marracuene.png') }}"
                            data-caption="LINHA DL26 SE’S INFULENE-10 (ZIMPETO)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_zimpeto_marracuene.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL26 SE’S INFULENE-10 (ZIMPETO)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE ZIMPETO
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2015
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 120MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>:Duplo (com a DL29)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 15km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xDove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL26= 27,6MVA (03/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_shoprite_maputo.png') }}"
                            data-caption="DL25 SE’S 3 (DIT) -7 (SHOPRITE MAPUTO)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_shoprite_maputo.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL25 SE’S 3 (DIT) -7 (SHOPRITE
                            MAPUTO)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE 3
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 7
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Subterrâneo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 77MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 2,2 km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de cabo</span>: XLPE 1000mm²
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>:DL25=17,68MVA/06/2018
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_s3_polana.png') }}"
                            data-caption="LINHA DL24 SE’S 3-1 (POLANA)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_s3_polana.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL24 SE’S 3-1 (POLANA)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE 3
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 1
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Subterrâneo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 73MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 2,1km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de cabo</span>: XLPE 1x500mm²
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL24= 30,53MVA/03/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_shoprite_uem.png') }}"
                            data-caption="LINHA DL23 SE’S 7 (SHOPRITE MAPUTO) -5 (CAMPUS UEM)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_shoprite_uem.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL23 SE’S 7 (SHOPRITE MAPUTO) -5
                            (CAMPUS UEM)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE 7
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 5
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 88MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 4km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xPanther
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL23= 73,20MVA/05/2015
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_toff_shoprite.png') }}"
                            data-caption="LINHA DL22 SE’S 2M (T-OFF com DL4) -7 (SHOPRITE MAPUTO)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_toff_shoprite.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL22 SE’S 2M (T-OFF com DL4) -7
                            (SHOPRITE MAPUTO)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE 2M (T-OFF com DL4)
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 7
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Horizontal + Subterrâneo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por poste (DL21)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 7,9km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de cabo</span>: XLPE 500mm²
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL22= 58,89MVA/04/2016
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_toff_shoprite.png') }}"
                            data-caption="LINHA DL21 SE’S 2M (T-OFF com DL31) -7 (SHOPRITE MAPUTO)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_toff_shoprite.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL21 SE’S 2M (T-OFF com DL31) -7
                            (SHOPRITE MAPUTO)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE 2M (T-OFF com DL3)
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 7
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Horizontal + Subterrâneo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por poste (DL22)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 7,9km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de cabo</span>: XLPE 500mm²
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL21= 61,13MVA/03/2016
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_boane_salamanga.png') }}"
                            data-caption="LINHA DL20 SE’S BOANE- SALAMANGA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_boane_salamanga.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL20 SE’S BOANE- SALAMANGA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Boane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Salamanga
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2002
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 650MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 76,7km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Panther
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos, Vidro e Porcelana
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL20= 22,19MVA/01/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_malanga_dit.png') }}"
                            data-caption="LINHA DL19A/B SE’S CTM-2 (MALANGA) & 2-3 (DIT)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_malanga_dit.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL19A/B SE’S CTM-2 (MALANGA) &
                            2-3 (DIT)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE CTM e SE 2
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 2 e SE 3
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Subterrâneo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 5.4km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de cabo</span>: XLPE 1400mm²
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Panther
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL19= 57,02MVA/04/2015
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_cmt_3.png') }}"
                            data-caption="LINHA DL18 SE’S CTM-3 (DIT)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_cmt_3.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL18 SE’S CTM-3 (DIT)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE CTM
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 3
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Subterrâneo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 5.4km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de cabo</span>: XLPE 1400mm²
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Panther
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL18= 56,94MVA/06/2017
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_aeroporto_campus_uem.png') }}"
                            data-caption="LINHA DL17 SE’S 4 (AEROPORTO) -5 (CAMPUS UEM)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_aeroporto_campus_uem.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL17 SE’S 4 (AEROPORTO) -5
                            (CAMPUS UEM)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE 4
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 5
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1996
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 38MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 4,8km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de poste</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Leopard
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL17= 19,24MVA/01/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_jardim_aeroporto.png') }}"
                            data-caption="LINHA DL16 SE’S 6 (JARDIM) -4 (AEROPORTO)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_jardim_aeroporto.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL16 SE’S 6 (JARDIM) -4
                            (AEROPORTO)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE 6
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 4
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1998
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 38MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 2,4km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de poste</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Leopard
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos & Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL16= 19,24MVA 01/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_matola_275_cimentos.png') }}"
                            data-caption="LINHA DL15 SE’S ´MATOLA 275-CIMENTOS">
                            <img src="{{ secure_asset('assets/images/centrais/linha_matola_275_cimentos.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL15 SE’S ´MATOLA 275-CIMENTOS
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Matola 275
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Cimentos de Moçambique
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1998
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 2,7km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Panther
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL15= 26,92MVA/10/2015
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_matola_275_boane.png') }}"
                            data-caption="LINHA DL14 SE’S MATOLA 275-MATOLA RIO-BOANE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_matola_275_boane.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL14 SE’S MATOLA 275-MATOLA
                            RIO-BOANE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Matola 275
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Boane
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1998
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 21,9km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Panther e Lisbon
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos e Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL14= 67,6MVA/02/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado + OPW
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_machava_matola_275.png') }}"
                            data-caption="LINHA DL13 SE’S MACHAVA-MATOLA 275">
                            <img src="{{ secure_asset('assets/images/centrais/linha_machava_matola_275.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL13 SE’S MACHAVA-MATOLA 275
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Machava
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Matola 275
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1998
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 2,5km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Panther
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL13= 64,03MVA/02/2015
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_dl12_matola_275.png') }}"
                            data-caption="LINHA DL12, DL11, DL9 SE’S MATOLA 275- CTM">
                            <img src="{{ secure_asset('assets/images/centrais/linha_dl12_matola_275.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL12, DL11, DL9 SE’S MATOLA 275-
                            CTM
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Matola 275
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE CTM
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1998
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 275KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Quadruplo (3x66kv + 1x33kv)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 4,9km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Dove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL12=58,01MVA/11/2015
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL11=55,94MVA/05/2015
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL9= 58,62MVA/11/2015
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado + OPW
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_dl10_jardim.png') }}"
                            data-caption="LINHA DL10 SE’S CTM-6 (JARDIM)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_dl10_jardim.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL10 SE’S CTM-6 (JARDIM)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE6 e T-OFF com DL2
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1992
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 38MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 3,8km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Betão, metálico e madeiras
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Leopard
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL10= 55,4MVA/03/2016
                        </p>

                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline"
                            href="{{ secure_asset('assets/images/centrais/linha_infulene_magoanine_ferroviario.png') }}"
                            data-caption="LINHA DL8A/B SE’S INFULENE-9 (MAGOANINE) -8 (FERROVIÁRIO) -5 (CAMPUS UEM)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_magoanine_ferroviario.png') }}"
                                width="500" height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL8A/B SE’S INFULENE-9
                            (MAGOANINE) -8 (FERROVIÁRIO) -5 (CAMPUS UEM)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE8 e SE5
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo + Cabo subterrâneo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2018
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 63MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 18km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Dove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de cabo</span>: XLPE 1x500mm²
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL8A/B= 49MVA/05/2016
                        </p>

                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline"
                            href="{{ secure_asset('assets/images/centrais/linha_infulene_magoanine_campus.png') }}"
                            data-caption="LINHA DL7A/B SE’S INFULENE-9 (MAGOANINE) -5 (CAMPUS)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_magoanine_campus.png') }}"
                                width="500" height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL7A/B SE’S INFULENE-9
                            (MAGOANINE) -5 (CAMPUS)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE 5 (Campus da UEM)
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1990
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 38MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 15,1km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Leopard
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Vidro e Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL7A/B= 45,88MVA/04/2018
                        </p>

                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_machava.png') }}"
                            data-caption="LINHA DL6 SE’S INFULENE-MACHAVA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_machava.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL6 SE’S INFULENE-MACHAVA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Machava
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1991
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 38MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 7,5km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Bear
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Vidro e Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL6=55,51MVA/01/2016
                        </p>

                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_muhalaze_manhica.png') }}"
                            data-caption="LINHA DL5 SE’S MUHALAZE-MANHIÇA">
                            <img src="{{ secure_asset('assets/images/centrais/linha_muhalaze_manhica.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL5 SE’S MUHALAZE-MANHIÇA
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Muhalaze
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Manhiça
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 1975
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 38MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 62km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Betão, Metálicas e de madeira
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Leopard
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos e de Porcelana
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL5= 61,59MVA/10/2016
                        </p>

                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: N/A
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_ctm.png') }}"
                            data-caption="LINHA DL4 SE’S INFULENE-CTM">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_ctm.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL4 SE’S INFULENE-CTM
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE CTM
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: duplo (DL3)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 7,5km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Panther
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL4= 61,18MVA/02/2018
                        </p>

                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_ctm.png') }}"
                            data-caption="LINHA DL4 SE’S INFULENE-CTM">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_ctm.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL4 SE’S INFULENE-CTM
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE CTM
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: duplo (DL4)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 7,5km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Betão
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Panther
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL3= 65,53MVA/11/2015
                        </p>

                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_2m_t_off.png') }}"
                            data-caption="LINHA DL2 SE’S INFULENE- 2M (T-OFF)">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_2m_t_off.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL2 SE’S INFULENE- 2M (T-OFF)
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: T-OFF da 2M
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2003
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 50MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: N/A
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 4,5km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de torres</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: Panther
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL2= 55,4MVA/03/2016
                        </p>

                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/linha_infulene_matola_gare.png') }}"
                            data-caption="LINHA DL1 SE’S INFULENE-MATOLA GARE">
                            <img src="{{ secure_asset('assets/images/centrais/linha_infulene_matola_gare.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL1 SE’S INFULENE-MATOLA GARE
                        </h4>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Localizacação</span>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento inicial</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Barramento final</span>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Configuração</span>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Ano de entrada em serviço</span>: 2019
                        </p>
                        <p class="uk-margin-small">
                            <span class="uk-text-bold">Capacidade da linha</span>: 120MVA
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Níveis de tensão</span>: 66KV
                        </p>
                        <p class="uk-margin-remove">
                            <span class="uk-text-bold">Condutor</span>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Circuito</span>: duplo por poste (DL30)
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Comprimento</span>: 15km
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de postes</span>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de condutor</span>: 2xDove
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Tipo de isoladores</span>: Poliméricos
                        </p>
                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Ponta/Data</span>: DL1= 77,34MVA/01/2020
                        </p>

                        <p class="uk-margin-small-top">
                            <span class="uk-text-bold">Cabo de guarda</span>: Condutor de aço galvanizado
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

