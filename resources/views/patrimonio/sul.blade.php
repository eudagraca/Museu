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
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, Kapfumo, Bairro Central
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: Tempo colonial e requalificada em
                            2003/2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR3 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 26.94MW em Dezembro de 2020
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
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
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, Kapfumo, Bairro da Malanga
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: Tempo colonial, requalificada em 2003/2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 25MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR2 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 21.94MW em Fevereiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: O TR1 [33/11kV - 25MVA] encontrasse avariado e fora de serviço
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
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
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, Kaphumo, Bairro central-Baixa da Cidade
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2003/2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [33/11kV - 20MVA], TR2 [66/11kV - 30MVA] e TR3 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 42.74MW em Novembro de 2020
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
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
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, Kaphumo, Bairro de Mavalane -Aeroporto.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1992
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 16.00MW em Janeiro de 2020
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
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
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, kapfumo, Bairro da Sommerschild - Campus UEM
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1990
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/11kV - 20MVA] e TR2 [66/11kV - 20MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 33.49MW em Janeiro de 2020
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
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
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, kapfumo, Bairro do Jardim
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1992 requalificada em 2013
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/11kV - 40MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 24.14MW em Janeiro de 2020
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
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
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, kapfumo, Bairro de Malhangalene
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 25.56MW em Marco de 2020
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
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
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, kapfumo, Bairro de Ferroviario
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/11kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 24.24MW em Novembro de 2020
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
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
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, kapfumo, Bairro policial
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/11kV - 30MVA] e TR2 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 29.14MW em Feverreiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe tensão em 66kV a partir da SE Infulene, através das linhas DL7A e DL8A, escoando a uma tensão de 33kV e 11kV.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se10.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se10.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE10</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, kapfumo, Bairro do Zimpeto
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2011
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 52MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 52MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/33kV - 40MVA] e TR2 [33/11kV - 12MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 39.70MW em Junho de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe a partir de SE Infulene através das linhas DL26 e DL7. Alimenta o Estádio Nacional de Zimpeto, a Vila Olímpica e
                            os arredores.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se11.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se11.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação SE11</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>:Cidade de Maputo, kapfumo, Bairro de Chihango
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2011
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 52MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 52MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/11kV - 40MVA] e TR2 [33/11kV - 12MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 15.39MW em Novembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe a partir de SE Infulene através das linhas DL28. Alimenta as áreas turísticas do Costa de Sol e áreas
                            circunvizinhas.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se12.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se12.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Marracuene</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província  de Maputo, Distrito de Marracuene
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2014
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 20MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/33kV - 20MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 15.7MW em Fevereiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe a partir de SE Infulene através das linhas DL27. Alimenta o distrito de Marracuene.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se13.png') }}">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se13.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Khongolote </h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província  de Maputo, Município de Matola, Bairro de Muhalaze
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 40MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/33kV - 40MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 31.56MW em Novembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe a partir de SE Infulene através da linha DL5.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se14.png') }}" data-caption="Recebe da linha DL14 a partir da Subestação de Matola. Da Subestaçãoo de Matola Rio saem as linhas EL1 que alimenta parte Alta da Cidade da Matola, linha EL2 alimenta Umbeluzi, EL3 alimenta Djuba e EL4 alimenta Texlon.
                        No projecto Inicial a subestação erra composta por um transformador de 66/33KV-10MVA, devido ao crescimento de carga foi substituído pelo TR de 30MVA.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se14.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Matola Rio </h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província  de Maputo, distrito de Boane
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 27.88MW em Novembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe da linha DL14 a partir da Subestação de Matola. Da Subestaçãoo de Matola Rio saem as linhas EL1 que alimenta
                            parte Alta da Cidade da Matola, linha EL2 alimenta Umbeluzi, EL3 alimenta Djuba e EL4 alimenta Texlon.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se15.png') }}" data-caption="A Subestação de Boane recebe a partir da Subestação de Infulene através da linha DL1, da Subestação de Matola através da linha DL14 e Salamanga através da linha DL20. A Subestação de Boane alimenta a Vila de Namaacha e distrito de Boane.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se15.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Boane </h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província  de Maputo, distrito de Boane
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1980
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 19.58MW em Abril de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: A Subestação de Boane recebe a partir da Subestação de Infulene através da linha DL1, da Subestação de Matola através da
                            linha DL14 e Salamanga através da linha DL20. A Subestação de Boane alimenta a Vila de Namaacha e distrito de Boane.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se16.png') }}" data-caption="Recebe da Subestação de Infulene a partir de DL1A e também pode receber da Subestação de Boane a partir de DL1B. Têm saídas para Machava, Moamba e Casa Branca a 33kV.
                        No projecto Inicial a subestação erra composta por um transformador de 66/33KV-10MVA, devido ao crescimento de carga foi adicionado o TR de 30MVA e posteriormente em 2020 foi ligada uma SE Móvel de [66/33kV - 20MVA].">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se16.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Matola Gare</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província  de Maputo, Município de Matola, Bairro de Matola Gare
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1982 e requalificada em 2003
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/33kV - 30MVA], TR2 [66/33kV - 10MVA] e TR Móvel [66/33kV - 20MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 36.12MW em Novembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe da Subestação de Infulene a partir de DL1A e também pode receber da Subestação de Boane a partir de DL1B. Têm
                            saídas para Machava, Moamba e Casa Branca a 33kV.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se17.png') }}" data-caption="A Subestação recebe de SE Infulene através da linha DL6 e SE Matola através da linha DL13. Alimenta a zona Industrial da Machava, Posto Administrativo da Machava e arredores. No projecto Inicial a subestação erra composta por um transformador de 66/33KV-30MVA, devido ao crescimento de carga foi adicionado o TR2 [66/33kV - 30MVA].
                        Importa referir que o transformador 2 da SE Machava avariou em 2018 e foi substiuido pelo transformador 2 da SE CTM com as mesmas caracteristicas.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se17.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Machava</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província  de Maputo, Município de Matola, Bairro de Machava
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1990 requalificada em 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 60MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/33kV - 30MVA] e TR2 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 44.91MW em Dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: A Subestação recebe de SE Infulene através da linha DL6 e SE Matola através da linha DL13. Alimenta a zona Industrial da
                            Machava, Posto Administrativo da Machava e arredores.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se18.png') }}" data-caption="A Subestação é alimentada a partir de SE Infulene, através da linha DL1. A Subestação alimenta o parque Industrial de Beluluane e a zona Residencial de Beluluane.
                        Importa referir que o TR1 avariou, actualmente somente o TR Movel está operacional, enquanto faz-se a movimentacao do TR2 para o local do TR1.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se18.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Beluluane</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província  de Maputo, no distrito de Boane, no Parque Industrial de Beluluane
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>:
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 20MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/11kV - 30MVA] e TR2 [66/33/11kV - 30MVA] e TR Móvel [66/11Kv – 20 MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 4.2.MW em Janeiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: A Subestação é alimentada a partir de SE Infulene, através da linha DL1. A Subestação alimenta o parque Industrial de
                            Beluluane e a zona Residencial de Beluluane.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se19.png') }}" data-caption="Tem uma central eléctrica constituído por dois geradores de 11kV e capacidade de 9MVA cada totalizando 18MVA de potência instalada. A sua subestação é constituída por dois transformadores, um transformador 110/33/11kV. Alimenta a localidade de Sabié a partir da linha EL18, e outro transformador de 11/110kV em paralelo com o primeiro transformador alimenta a Subestação de Infulene a partir da linha CL4.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se19.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Corumane</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província  de Maputo, no distrito de Moamba, localidade de Sabié, na região de Corumane
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1999
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 18MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 18MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 11/33/110kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [11/110kV - 9MVA] e TR2 [11/33/110kV - 9MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 5.69MW em Dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Tem uma central eléctrica constituído por dois geradores de 11kV e capacidade de 9MVA cada totalizando 18MVA de potência
                            instalada. A sua subestação é constituída por dois transformadores, um transformador 110/33/11kV.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se20.png') }}" data-caption="É uma subestaco de interligacao, sendo que interliga com Comat Port atravez da linha BL4, interliga com a CTRG atravez das linhas CTRG1 e CTRG2), interliga com a Gigawat atravez atraves da extencao dos Barramentos 1 e 2, interliga com SE Infulene atravez da linha BL2 e por fim Interliga com a SE Dzimbene atravez da linha BL5.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se20.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Ressano Garcia</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província de Maputo, no distrito de Moamba, localidade de Ressano Garcia
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2012
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: N/D
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: N/D
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: É uma subestaco de interligacao, sendo que interliga com Comat Port atravez da linha BL4, interliga com a CTRG atravez
                            das linhas CTRG1 e CTRG2), interliga com a Gigawat atravez atraves da extencao dos Barramentos 1 e 2, interliga com SE
                            Infulene atravez da linha BL2 e por fim Interliga com a SE Dzimbene atravez da linha BL5.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se21.png') }}" data-caption="É alimentada em 275kV a partir da BL3 com origem na subestação de Ressano Garcia e possui uma interligação a 275kV com a subestação da Matola através da BL1. É a principal fonte de fornecimento de energia eléctrica a região sul de Moçambique incluindo a linha sul que alimenta as províncias de Gaza e Inhambane a 110kV através da CL1. Possui um interligação com a central de Corrumana através da CL4 a 110kV.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se21.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Infulene</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Provincia de Maputo, no Bairro de Infulene.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1972 requalificada
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 180MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 690MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275/66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [275/66/11kV - 250MVA], TR2 [275/66/11kV - 250MVA], TR3 [275/66/10.5kV - 120MVA], TR5 [110/66/0.4kV - 30MVA], TR5
                            [110/66/0.4kV - 30MVA] e TR Móvel [66/33kV - 10MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: É alimentada em 275kV a partir da BL3 com origem na subestação de Ressano Garcia e possui uma interligação a 275kV com a
                            subestação da Matola através da BL1.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se22.png') }}" data-caption="A sua alimentação é feita através de duas linhas de 275kV -BL3 com origem na SE- Maputo e BL1 com origem da SE-Infulene. Possui 6 linhas de saída em 66kV sendo 3 dedicadas a Cidade do Maputo(DL09, DL11, DL12) e as restantes 3 a Província de Maputo (DL13, DL14, DL15).
                        Importa referir que o TR3 esta em processo de montagem, por isso não foi incluído na potencia instalada.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se22.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação Matola-275</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade da Matola, Bairro do Fomento.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2006
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 320MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 410MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275/66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [275/66/33kV - 160MVA], TR2 [275/66/33kV - 160MVA], TR3 [275/66/33kV - 160MVA], [Cascata 275/132-132/66KV – 80 MVA] e TR [66/33kV - 10MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: A sua alimentação é feita através de duas linhas de 275kV -BL3 com origem na SE- Maputo e BL1 com origem da SE-Infulene.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se23.png') }}" data-caption="É alimentada a partir de infulene a 66kV através da linha DL5 e alimenta o distrito de Manhiça incluindo a vila municipal e os distritos de Xinavane a 33kV.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se23.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Manhiça</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província de Maputo, no distrito de Manhiça.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1990 requalificada 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 7.92MW em fevereiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: É alimentada a partir de infulene a 66kV através da linha DL5 e alimenta o distrito de Manhiça incluindo a vila
                            municipal e os distritos de Xinavane a 33kV.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se24.png') }}" data-caption="Recebe alimentação a 66KV a partir da SE Matola 275KV e da SE-Infulene, através da DL14 e DL1 respectivamente e alimenta o distrito de Ka-Tembe, Matutuine incluindo as regiões turísticas de Ponta D´Ouro, Bela Vista, assim como as minas de calcário de Salamanga.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se24.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Salamanga 66/33kV-32MVA</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província de Maputo, distrito de Ka-Tembe.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 32MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [66/33kV - 16MVA] e TR2 [66/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 18.72MW em Agosto de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe alimentação a 66KV a partir da SE Matola 275KV e da SE-Infulene, através da DL14 e DL1 respectivamente e alimenta
                            o distrito de Ka-Tembe, Matutuine incluindo as regiões turísticas de Ponta D´Ouro, Bela Vista, assim como as minas de calcário de Salamanga.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se25.png') }}" data-caption="Essa Subestação funciona também como ponto de transição ou transferência de carga a partir das Subestações de Infulene através da linha DL3 e Matola através da linha DL11 para alimentar o Centro de cidade de Maputo e uma parte da Cidade da Matola.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se25.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da CTM</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Cidade de Maputo, no bairro Luis Cabral.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: N/D
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: N/D
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR13 [66/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: N/D
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Essa Subestação funciona também como ponto de transição ou transferência de carga a partir das Subestações de Infulene
                            através da linha DL3 e Matola através da linha DL11 para alimentar o Centro de cidade de Maputo e uma parte da Cidade da
                            Matola.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se26.png') }}" data-caption="A subestação recebe a tensão a partir da subestação de Infulene através da linha CL1  a 110kV e alimenta a vila municipal de Macia e arredores do distrito de Bilene a 33kV.
                        No projecto Inicial a subestação erra composta por um transformador de 110/33KV-10MVA, posteriormente foi substituído por um de 16MVA.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se26.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação Macia</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província de Gaza, Distrito de Bilene
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2003/4
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 26MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [110/33kV - 16MVA] e TR Móvel [110/33kV - 10MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 16.5MW em dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: A subestação recebe a tensão a partir da subestação de Infulene através da linha CL1 a 110kV e alimenta a vila municipal
                            de Macia e arredores do distrito de Bilene a 33kV.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se27.png') }}" data-caption="A subestação recebe a tensão a partir de duas fontes, a BL5 apartir da SE Ressano Garcia e CL3B apartir da SE Kuvaninga e alimenta a SE Macia atravez da Linha CL3A.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se27.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Dzimbene</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província de Gaza, Distrito de Bilene, localidade de Dzimbene.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 250MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 250MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275/110kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [110/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 69.7MW Janeiro
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: A subestação recebe a tensão a partir de duas fontes, a BL5 apartir da SE Ressano Garcia e CL3B apartir da SE Kuvaninga
                            e alimenta a SE Macia atravez da Linha CL3A.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se28.png') }}" data-caption="Importa referir que apenas o TR2 esta em funcionamento. A subestacao recebe a tensão a partir da linha CL3. Essa Subestação alimenta o distrito de Chokwé e através da interligação com a subestação de Macia, a Subestação de Lionde pode alimentar a Vila de Macia – distrito de Bilene.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se28.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Lionde</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Provincia de Gaza, Distrito de Chokwe, na Localidade de Lionde.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1985 e recondicionada em 2018
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 32MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 32MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR3 [110/33kV - 16MVA] e TR2 [110/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 12.08MW em Janeiro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Importa referir que apenas o TR2 esta em funcionamento. A subestacao recebe a tensão a partir da linha CL3.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se29.png') }}" data-caption="A subestacao é alimentada a partir da subestação de Lionde através da linha CL7 a 110KV e alimenta a vila de Mapai e arredores do distrito com o mesmo nome a 33KV. Igualmente alimenta os distritos de Mabalane e Massingir a 33KV.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se29.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Mapai</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Província de Gaza, no Distrito de Mapai.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2016
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
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [110/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 2MW
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: A subestacao é alimentada a partir da subestação de Lionde através da linha CL7 a 110KV e alimenta a vila de Mapai e
                            arredores do distrito com o mesmo nome a 33KV.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se30.png') }}" data-caption="A subestacao recebe tensão a partir da Subestação de Infulene através da linha CL2 proveniente da SE Macia e interliga com a SE Lindela através de CL9. Alimenta a Cidade de Xai – Xai, Posto Administrativo de Chissano, Distrito de Chidenguele, Chibuto e a região de Chonguene e Zunguene. Foi inaugurado em 1984 e 2004 aumentou-se a sua capacidade de 16 MVA para 40 MVA.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se30.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Chicumbane</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Provincia de Gaza, no distrito de Xai – Xai, localidade de Chicumbane.
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1984 e requalificada em 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [110/33kV - 40MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 30MW em Dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: A subestacao recebe tensão a partir da Subestação de Infulene através da linha CL2 proveniente da SE Macia e interliga
                            com a SE Lindela através de CL9.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se31.png') }}" data-caption="Recebe a partir de SE Chicumbane através das linhas CL9. Alimenta cidade de Inhambane a partir da linha EL1-Inhambane, Maxixe a partir da linha EL2-Maxixe, Inharrime a partir da linha EL3-Inharrime, Funhalouro a partir da linha EL4-Funhalouro, Praia de Paindane a partir da linha EL5 e os restantes distritos da Província de Inhambane.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se31.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Lindela</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Provincia de Inhambane, Distrito de Jangamo, Localidade de Lindela
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2002
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 16MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 32MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/11kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [110/33kV - 16MVA] e TR2 [110/33kV - 16MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 25.42MW em Dezembro de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe a partir de SE Chicumbane através das linhas CL9.
                        </p>
                    </div>
                </div>

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remve-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ secure_asset('assets/images/centrais/subestacao_se32.png') }}" data-caption="Recebe 110kv a partir de SE Lionde através das linhas CL10.">
                            <img src="{{ secure_asset('assets/images/centrais/subestacao_se32.png') }}" width="500" height="300"
                                alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Massinga</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Provincia de Inhambane, Municipio de Massinga, Localidade de Nguluve
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2018
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 30MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 30MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [110/33kV - 30MVA]
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 5.26MW em Junho de 2020
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Nota</spa>: Recebe 110kv a partir de SE Lionde através das linhas CL10.
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
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: SE Ressano
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: SE Dzimbene
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2017
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade da linha</spa>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Condutor</spa>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 187km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: BL5=59,24/12/2019
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado + OPW
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
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA BL4 SE’S RESSANO GARCIA-KOMATTI PORT
                        </h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: SE Ressano
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: Komatti Port
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1973
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade da linha</spa>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Condutor</spa>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 9km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: BL4= 359,84MVA/01/2017
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado + OPW
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
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: SE Maputo
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: SE Matola 275
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade da linha</spa>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Condutor</spa>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 16km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: BL3= 497MVA/06/2015
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado + OPW
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
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA BL2 SE’S INFULENE- RESSANO GARCIA
                        </h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: SE Ressano
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1972
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade da linha</spa>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Condutor</spa>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 76km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: BL2= 498,25MVA (10/2015)
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado + OPW
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
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: SE Infulene
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: SE Matola 275
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Esteira Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2000
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade da linha</spa>: 479MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 275KV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Condutor</spa>: Duplo por fase
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 16km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: 2xBear
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: BL1=405,73MVA (01/2016) e  BL1=401,97MVA (01/2017)
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado + OPW
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
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: SE Chicumbane
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: SE Inhambane
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2002
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade da linha</spa>: 68MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 233,8km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: AAAC 150
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Porcelana & Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: CL9= 30,55MVA (02/2015)
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Condutor de aço galvanizado
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
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro Sul
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento inicial</spa>: SE Kuvaninga
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento final</spa>: SE Mapai
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Triângulo
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2002
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade da linha</spa>: 68MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110KV
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Comprimento</spa>: 233,8km
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: AAAC 150
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Porcelana & Vidro
                        </p>
                        <p class="uk-margin-small-top">
                            <spa class="uk-text-bold">Ponta/Data</spa>: CL9= 30,55MVA (02/2015)
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
