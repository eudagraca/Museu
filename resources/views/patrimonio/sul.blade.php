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
                        <a class="uk-inline" href="{{ 