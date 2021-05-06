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
                transporte Centro</h4>


            <h3 class="uk-heading-divider  uk-text-bold uk-margin-small-top uk-margin-small-bottom">Subestações</h3>
            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_matambo.png') }}"
                            data-caption="SUBESTAÇÃO DE MATAMBO [BAY DA EDM] - Em Outubro de 2015 foi instalado o TR2 de 130MVA pertencente a EDM. O TR1 de 60MVA pertence a HCB e ambos alternativamente podem alimentar as linhas de 66kV e 33kV.">
                            <img src="{{ asset('assets/images/centrais/subestacao_matambo.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação da Matambo [BAY DA EDM]
                        </h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Localidade de Matambo, Distrito de Marrara,
                            Província de Tete
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1982
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 60MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 130MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/66/33kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [60/40/20MVA –
                            220/66/33kV]; TR2 [130/100/30MVA – 220/66/33/11kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 57.13MW correspondente a 63.48MVA/ Outubro 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_tete.png') }}"
                            data-caption="A Subestação pertencia a antiga Área Operacional de Tete, actualmente Área do Serviço Cliente de Tete. Apos uma reabilitação total que terminou em 2007, passou a pertencer a DTCE (antiga ATCE).">
                            <img src="{{ asset('assets/images/centrais/subestacao_tete.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Tete</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Josina Machel, Cidade de Tete
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1980
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10.5MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 22MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33/11kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [22MVA – 66/33kV]; TR2
                            [10MVA – 33/11kV]; TR3 [10MVA – 33/11kV];
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 20.18MW correspondente a 22.42MVA/ Março de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: TR1 em Sobrecarga, celas de 11kV obsoletas, 3
                            celas de 33kV avariadas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: A Subestação pertencia a antiga Área Operacional de
                            Tete, actualmente Área do Serviço Cliente de Tete. Apos uma
                            reabilitação total que terminou em 2007, passou a pertencer a DTCE (antiga ATCE).
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_movel_tete.png') }}"
                            data-caption="Subestação de móvel Tete">
                            <img src="{{ asset('assets/images/centrais/subestacao_movel_tete.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de móvel Tete</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Matema, Cidade de Tete
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
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: [20MVA – 66/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 18.89MW correspondente a 20.99MVA/ Novembro de
                            2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: TR em Sobrecarga, Avaria de um das celas
                        </p>

                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_manje.png') }}"
                            data-caption="Subestação de Manje">
                            <img src="{{ asset('assets/images/centrais/subestacao_manje.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Manje</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Vila de Manje, Distrito de Chiúta, Província
                            de Tete
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2008
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 10MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [10MVA – 66/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 4.15MW correspondente a 4.61MVA/ Novembro de
                            2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Sem celas de Reserva de 33kV, dado aos Plugs
                            especiais diferentes das usadas em outras SE’s
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: As obras da Subestação de Manje foram financiadas pelo
                            Governo de Moçambique em 2007, entrando em serviço no dia 24 de
                            Dezembro de 2008.
                        </p>

                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_catandica.png') }}"
                            data-caption="Subestação de Manje">
                            <img src="{{ asset('assets/images/centrais/subestacao_catandica.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Catandica</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Sabão, vila de Catandica, Distrito de
                            Bárue, Província de Manica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2004
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 25MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 10MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: : 220/33kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [10MVA – 220/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 3.41MW correspondente 3.79MVA/ Setembro de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: A quando da sua entrada em serviço funcionou com um
                            Transformador (25MVA) vindo da SE Cerâmica na Zambézia, tendo a
                            Subestação se beneficiado a posterior de uma reabilitação que terminou em 2010, passando a
                            funcionar com o actual TR de
                            10MVA.
                        </p>

                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_chibata.png') }}"
                            data-caption="A Subestação foi inaugurada oficialmente no dia 10/03/2004, operando com um TR de 84MVA até 2015, pois no dia 25 de Abril de 2015 entrou em serviço o TR2 em paralelo, perfazendo uma capacidade total Instalada da Subestação de 168MVA.
                            Está instalada na Subestação uma Reactância de 220kV – 15MVAr">
                            <img src="{{ asset('assets/images/centrais/subestacao_chibata.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Chibata</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro de Chibata, Localidade Chiremera,
                            Distrito de Vanduzi, Provincia de Manica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2003
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 84MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 168MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/110/18.6kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [84/72/57MVA -
                            220/110/18.6kV]; TR2 [84/72/57MVA - 220/110/18.6kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 58MW correspondente a 64.44MVA/ Novembro de 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: A Subestação foi inaugurada oficialmente no dia
                            10/03/2004, operando com um TR de 84MVA até 2015, pois no dia 25 de
                            Abril de 2015 entrou em serviço o TR2 em paralelo, perfazendo uma capacidade total Instalada
                            da Subestação de 168MVA.
                            Está instalada na Subestação uma Reactância de 220kV – 15MVA
                        </p>

                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_manica.png') }}"
                            data-caption="A Subestação de Manica beneficiou-se de uma total mudança, tendo sido construída uma nova de raiz ao lado da antiga, que entrou em serviço no dia 19 Julho de 2020 em vazio, e no dia 16 de Agosto de 2020 foram transferidas todas as cargas da Antiga para a Nova Subestação com uma capacidade Instalada de 40MVA.">
                            <img src="{{ asset('assets/images/centrais/subestacao_manica.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Manica</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Josina Machel, Distrito de Manica,
                            Província de Manica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1972
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 6.3MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 40MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33MVA
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [40MVA – 110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 3.98MW correspondente a 4.42MVA/ Outubro 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: A Subestação de Manica beneficiou-se de uma total
                            mudança, tendo sido construída uma nova de raiz ao lado da antiga, que
                            entrou em serviço no dia 19 Julho de 2020 em vazio, e no dia 16 de Agosto de 2020 foram
                            transferidas todas as cargas da
                            Antiga para a Nova Subestação com uma capacidade Instalada de 40MVA.
                        </p>

                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_messica.png') }}"
                            data-caption="Subestação de Messica">
                            <img src="{{ asset('assets/images/centrais/subestacao_messica.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Messica</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro 25 de Setembro, Posto Administrativo
                            de Messica, Distrito de Manica, Província de Manica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1979
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 12.5MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 6.5MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/22/6.6kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [12.5/6.5/6.5MVA –
                            110/22/6.6kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 1.76MW correspondente a 1.96MVA/ Outubro de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente apesar do
                            transformador ser muito antigo (fabricado 1963), e tem o enrolamento de 22kV
                            indisponível
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_mavita.png') }}"
                            data-caption="Subestação de Mavita">
                            <img src="{{ asset('assets/images/centrais/subestacao_mavita.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Messica</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro 3, Posto administrativo de Mavita,
                            Distrito de Sussundenga, Provincia de Manica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1978
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 12.5MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 12.5MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/22/6.6kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [12.5MVA – 12.5/6.5/6.5kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 2.91MW correspondente a 3.23MVA/ Novembro de
                            2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Barramento de 6.6kV indisponível por defeito
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_chimoio_1.png') }}"
                            data-caption="Subestação de Chimoio- O barramento de 22kV da Subestação de Chimoio1 é alimentado a partir de uma linha (em 22kV) que sai da Subestação de Chimoio2 (TR de 20MVA).">
                            <img src="{{ asset('assets/images/centrais/subestacao_chimoio_1.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Chimoio 1</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro 7 de Abril, Cidade de Chimoio,
                            Província de Manica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1950
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 18MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 36MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/22/6.6kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [6MVA – 66/6.6kV]; TR4
                            [6MVA – 66/6.6kV]; TR3 [4MVA – 22/6.6kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 23.5MW correspondente a 25.71MVA/ Novembro 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Os TRs são muito antigos, fugas de óleo nos
                            TRs 3 e 4, falta de disjuntos de reserva.
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: O barramento de 22kV da Subestação de Chimoio1 é
                            alimentado a partir de uma linha (em 22kV) que sai da Subestação de
                            Chimoio2 (TR de 20MVA).
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_chimoio_2.png') }}"
                            data-caption="A Subestação de Chimoio 2 beneficiou-se de 2 reabilitações, sendo a primeira concluída em 2011, e a segunda com vista a operacionalização de IN & OUT da linha CL75 (que parte de Chibata a Dondo) que antes fazia o T- OFF na Subestação de Chimoio 2. O IN & OUT foi operacionalizada no dia 08 de Dezembro de 2019.">
                            <img src="{{ asset('assets/images/centrais/subestacao_chimoio_2.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Chimoio 2</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Francisco Manyanga, Cidade de Chimoio,
                            Província de Manica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1964
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 27.5MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 45MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/66/22kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR2 [25/25/6MVA – 110/66/22kV];
                            TR3 [20MVA – 110/22kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 24MW correspondente a 26.67MVA/ Novembro de 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Inoperância do enrolamento de 22kV do TR2 e
                            falta de disjuntores em algumas celas de 22kV.
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: A subestação beneficiou-se de 2 reabilitações, sendo a
                            primeira concluída em 2011, e a segunda com vista a
                            operacionalização de IN & OUT da linha CL75 (que parte de Chibata a Dondo) que antes fazia o
                            T- OFF na Subestação de
                            Chimoio 2. O IN & OUT foi operacionalizada no dia 08 de Dezembro de 2019.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_gondola.png') }}"
                            data-caption="A Subestação de Gondola já atingiu 9.9MW num caso excepcional em que foram alimentadas algumas cargas da SE Chimoio devido a uma avaria registada em Março de 2020.
                            A Subestação de Gondola beneficiou-se de uma reabilitação total cuja conclusão foi em 2016.">
                            <img src="{{ asset('assets/images/centrais/subestacao_gondola.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Gondola</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Nhachoco, Distrito de Gondola,
                            Província de Manica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1998
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 10MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/22kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [10MVA – 110/22kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 2.5MW correspondente a 2.78MVA/ Novembro de 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Nota</spa>: A Subestação já atingiu 9.9MW num caso excepcional em
                            que foram alimentadas algumas cargas da SE Chimoio devido a uma
                            avaria registada em Março de 2020.
                            A Subestação de Gondola beneficiou-se de uma reabilitação total cuja conclusão foi em 2016.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_inchope.png') }}"
                            data-caption="Subestação de Inchope">
                            <img src="{{ asset('assets/images/centrais/subestacao_inchope.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Inchope</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Mozalec, Posto Administrativo de
                            Inchope, Distrito de Gondola, Provincia de Manica
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2005
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 10MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33/22kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [10MVA - 110/33/22kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 2.84MW correspondente a 2.87MVA/ Julho de 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_movel_casa_nova.png') }}"
                            data-caption="A Subestação Móvel Casa Nova foi instalada para o restabelecimento de energia eléctrica aos Distritos de Chibabava na Província de Sofala, Machaze, Mussorizi e Posto Administrativo de Dombe na Província de Manica, logo após a passagem do Ciclone IDAI que interrompeu o fornecimento de energia eléctrica a estes pontos do País.">
                            <img src="{{ asset('assets/images/centrais/subestacao_movel_casa_nova.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação Móvel Casa Nova</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Posto Administrativo de Casa Nova, Distrito
                            de Muxungue, Província de Sofala
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: Junho de 2019
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 10MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 10MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/33kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [10MVA – 110/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 2.31MW correspondente a 2.57MVA/ Dezembro de
                            2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: A Subestação Móvel Casa Nova foi instalada
                            para o restabelecimento de energia eléctrica aos Distritos de Chibabava na
                            Província de Sofala, Machaze, Mussorizi e Posto Administrativo de Dombe na Província de
                            Manica, logo após a passagem do
                            Ciclone IDAI que interrompeu o fornecimento de energia eléctrica a estes pontos do País.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_lamego.png') }}"
                            data-caption="A Subestação beneficiou-se de uma total reabilitação que foi concluído em 2017, transitando de sistema T-OFF para IN & OUT, e elevando a sua capacidade de 18.8 para 25MVA através de instalação de um novo Transformador.">
                            <img src="{{ asset('assets/images/centrais/subestacao_lamego.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Lamego</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: 2º Bairro, Localidade de Lamego, Distrito de
                            Nhamatanda, Província de Sofala
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1973
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 18.8MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 25MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/66/22kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [25/19/9MVA – 110/66/9MVA]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 5.10MW correspondente a 5.67MVA/ Abril de 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Avaria das celas do barramento e das linhas
                            de 22kV, estando a operar provisoriamente com Bay Exterior desde o dia 07 de
                            Dezembro de 2020.
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: A Subestação beneficiou-se de uma total
                            reabilitação que foi concluído em 2017, transitando de sistema T-OFF para IN &
                            OUT, e elevando a sua capacidade de 18.8 para 25MVA através de instalação de um novo
                            Transformador.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_guara_guara.png') }}"
                            data-caption="A quando da sua entrada em serviço operou com um Transformador de 6.3MVA – 66/33kV, tendo de seguido se beneficiado de uma reabilitação e instalado o Transformador de 16MVA">
                            <img src="{{ asset('assets/images/centrais/subestacao_guara_guara.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Guara Guara</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Luís Inácio, Localidade de Guara
                            Guara, Distrito de Buzi, Província de Sofala
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1989
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 6.3MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 16MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66/33kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1[16MVA – 66/33kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 2.2MW correspondente a 2.44MVA/ Fevereiro de
                            2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: A quando da sua entrada em serviço operou com
                            um Transformador de 6.3MVA – 66/33kV, tendo de seguido se beneficiado de
                            uma reabilitação e instalado o Transformador de 16MVA
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_mafambisse.png') }}"
                            data-caption="A Subestação de Mafambisse beneficiou-se de uma reabilitação total e a conclusão foi em 2017, passando de 12.5 para 25MVA da sua capacidade instalada.">
                            <img src="{{ asset('assets/images/centrais/subestacao_mafambisse.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Mafambisse</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Munhonha, Vila de Mafambisse, Distrito
                            de Dondo Província de Sofala
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1985
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 12.5MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 25MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/22kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [25MVA – 110/22kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 8.45MW correspondente a 9.39MVA/ Dezembro 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: A Subestação de Mafambisse beneficiou-se de
                            uma reabilitação total e a conclusão foi em 2017, passando de 12.5 para
                            25MVA da sua capacidade instalada.
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_munhava.png') }}"
                            data-caption="A Subestação beneficiou-se uma reabilitação parcial (equipamentos de 110kV) cuja conclusão foi em 2013. Para efeito de
                            compensação foram instalados nesta Subestação 5 bancos de condensadores (2 de 22kV e 1 de 6.6kV) perfazendo um total de
                            22.5MVAr, porém, 1 banco de 5MVAr-22kV foi transferido para PS da Manga e 1 de 7.5MVAr-22kV encontra-se avariado,
                            estando disponíveis 3 bancos (2 de 6.6kV com 2.5MVAr cada e 1 de 22kV – 5MVAr) com 15MVAr no total.">
                            <img src="{{ asset('assets/images/centrais/subestacao_munhava.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Munhava</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro da Munhava, Cidade da Baira, Provincia
                            de Sofala
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1966
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 90MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110/22/6.6
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [30/22.5/10.5 -
                            110/22/6.6]; TR2 [30/22.5/10.5 - 110/22/6.6]; TR3 [30MVA – 110/22kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 70.62MW correspondente a 77.87MVA/ Dezembro 2020
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Celas de Média Tensão (22 e 6.6kV) obsoletas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: A Subestação beneficiou-se uma reabilitação
                            parcial (equipamentos de 110kV) cuja conclusão foi em 2013. Para efeito de
                            compensação foram instalados nesta Subestação 5 bancos de condensadores (2 de 22kV e 1 de
                            6.6kV) perfazendo um total de
                            22.5MVAr, porém, 1 banco de 5MVAr-22kV foi transferido para PS da Manga e 1 de 7.5MVAr-22kV
                            encontra-se avariado,
                            estando disponíveis 3 bancos (2 de 6.6kV com 2.5MVAr cada e 1 de 22kV – 5MVAr) com 15MVAr no
                            total.

                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/subestacao_dondo.png') }}"
                            data-caption="A subestação de Dondo beneficiou-se de uma reabilitação total, em 2016 foi concluída a parte de 110 e 22KV, em 2017 concluída a parte de 220kV que com a entrada da linha B10 no mesmo ano passou dos 20 para 100MVA da sua capacidade instalada.
                            Nesta Subestação está instalado para efeito de compensação um Reactor de 15MVAr – 220kV, e um banco de condensadores de 4.8MVAr – 22kV">
                            <img src="{{ asset('assets/images/centrais/subestacao_dondo.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">Subestação de Dondo</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Bairro Nhamayabue, Distrito do Dondo,
                            Província de Sofala
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1972
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada aquando entrada em serviço</spa>: 20MVA
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Potência instalada actual</spa>: 100MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220/110/22
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Transformadores de potência</spa>: TR1 [100MVA - 220/110kV]; TR2
                            [30MVA - 110/22]; TR3 [20MVA – 110/22kV]
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Ponta/Data</spa>: 66MW correspondente a 73.33MVA/ Junho de 2019
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: A subestação de Dondo beneficiou-se de uma
                            reabilitação total, em 2016 foi concluída a parte de 110 e 22KV, em 2017 concluída a parte
                            de 220kV que com a entrada da linha B10 no mesmo ano passou dos 20 para 100MVA da sua
                            capacidade instalada.
                            Nesta Subestação está instalado para efeito de compensação um Reactor de 15MVAr – 220kV, e
                            um banco de condensadores de 4.8MVAr – 22kV

                        </p>
                    </div>
                </div>

            </div>

            <h3 class="uk-heading-divider  uk-text-bold uk-margin-large-top">Linhas</h3>

            <div uk-grid="masonry: true" uk-lightbox="animation: slide">

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_b10_dondo.png') }}"
                            data-caption="LINHA B10 [S/E CHIBATA – S/E DONDO]">
                            <img src="{{ asset('assets/images/centrais/linha_b10_dondo.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA B10 [S/E CHIBATA – S/E DONDO]
                        </h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: S/E de Chibata – S/E de Dondo
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2018
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 238MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 220kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 262km
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Condor
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Polimérico e vidros
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: OPGW
                        </p>
                    </div>
                </div>


                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_mavuzi_beira.png') }}"
                            data-caption="LINHA CL71 [CENTRAL MAVUZI- BEIRA]">
                            <img src="{{ asset('assets/images/centrais/linha_mavuzi_beira.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL71 [CENTRAL MAVUZI- BEIRA]
                        </h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: Central de Mavuzi – S/E de Munhava
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1955
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 77 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 171 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: LYNX
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Porcelana/Composit/Vidro
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: ACSSW
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Degradada, torres com emendas e cabo obsoleto
                            devido a idade da linha
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_mavuzi_beira.png') }}"
                            data-caption="LINHA CL73 [CENTRAL MAVUZI-CENTRAL DE CHICAMBA]">
                            <img src="{{ asset('assets/images/centrais/linha_mavuzi_beira.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL73 [CENTRAL MAVUZI-CENTRAL DE
                            CHICAMBA]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: Central de Mavuzi – Central de Chicamba
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1957
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 77 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110 kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 171 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: LYNX
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Porcelana
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: ACSSW
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Aceitavel, operando normalmente
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_chibata_nhamatanda.png') }}"
                            data-caption="LINHA CL75 A [XIGODOLA- S/E CHIBATA – PS NHAMATANDA]">
                            <img src="{{ asset('assets/images/centrais/linha_chibata_nhamatanda.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL75 A [XIGODOLA- S/E CHIBATA –
                            PS NHAMATANDA]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: Xigodola – S/E Chibata – PS Nhamatanda
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1973
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 99 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110 kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 115 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Dove
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Vidro/Composit
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Sem cabo de Guarda
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, Sem cabo de guarda
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_dondo_munhava.png') }}"
                            data-caption="LINHA CL75 BC [PS NHAMATANDA – S/E DONDO – S/E MUNHAVA BEIRA]">
                            <img src="{{ asset('assets/images/centrais/linha_dondo_munhava.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL75 BC [PS NHAMATANDA – S/E
                            DONDO – S/E MUNHAVA BEIRA]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: PS Nhamatanda – S/E de Dondo – S/E de Munhava
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1973
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 77 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110 kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 80 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: LYNX
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Vidro/Composit
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: ACSSW
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_chicamba_machipanda.png') }}"
                            data-caption="LINHA CL76 [CENTRAL DE CHICAMBA - MACHIPANDA]">
                            <img src="{{ asset('assets/images/centrais/linha_chicamba_machipanda.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL76 [CENTRAL DE CHICAMBA -
                            MACHIPANDA]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: Central de Chicamba - Machipanda
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1957
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 77 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 110 kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 88 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: LYNX
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Vidro/Composit
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: ACSSW
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_mavuzi_casa_nova.png') }}"
                            data-caption="LINHA CL77 [CENTRAL MAVUZI - CASA NOVA]">
                            <img src="{{ asset('assets/images/centrais/linha_mavuzi_casa_nova.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA CL77 [CENTRAL MAVUZI - CASA
                            NOVA]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: Central de Mavuzi – Casa Nova
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2018
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 99 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 95 kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 88 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metálicas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Dove
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Composit
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: OPGW
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente (Com duas torres
                            tombadas devido o Ciclone IDAI)
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_chimoio_1_chimoio_2.png') }}"
                            data-caption="LINHA DL1 [S/E CHIMOIO 1 - S/E CHIMOIO 2]">
                            <img src="{{ asset('assets/images/centrais/linha_chimoio_1_chimoio_2.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL1 [S/E CHIMOIO 1 - S/E CHIMOIO
                            2]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: S/E de Chimoio 1 – S/E de Chimoio2
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Triangular
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 1953
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 38 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66 kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 03 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Madeira/Betão
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: LYNX
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Vidro
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Sem cabo de guarda
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Aceitavel, operando normalmente
                        </p>
                    </div>
                </div>


                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_lamego_guaraguara.png') }}"
                            data-caption="LINHA DL2 [S/E LAMEGO – S/E GUARAGUARA]">
                            <img src="{{ asset('assets/images/centrais/linha_lamego_guaraguara.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL2 [S/E LAMEGO – S/E
                            GUARAGUARA]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: S/E de Lamego – S/E de Guaraguara
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Horizontal
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2011
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 56 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66 kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 65 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Madeira
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Leopard
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Vidro
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: Sem cabo de guarda
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Aceitavel, operando normalmente (Com
                            apodrecimento de postes constantes por passar na zona pantanosa)
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_matambo_tete.png') }}"
                            data-caption="LINHA DL3 [S/E MATAMBO – S/E TETE]">
                            <img src="{{ asset('assets/images/centrais/linha_matambo_tete.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL3 [S/E MATAMBO – S/E TETE]
                        </h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: S/E de Matambo – S/E de Tete
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Triangular
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2009
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 90 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66 kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 20 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metalicas/Tubular
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Dove
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Composit
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: OPGWs
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
                        </p>
                    </div>
                </div>

                <div
                    class="uk-card uk-card-default uk-grid-collapse uk-width-1-3@s uk-margin-remove-top uk-margin-bottom uk-padding-remove">
                    <div class="uk-card-media-top uk-width-1-1@m uk-cover-container">
                        <a class="uk-inline" href="{{ asset('assets/images/centrais/linha_tete_manje.png') }}"
                            data-caption="LINHA DL4 [S/E TETE – S/E MANJE]">
                            <img src="{{ asset('assets/images/centrais/linha_tete_manje.png') }}" width="500"
                                height="300" alt="" uk-cover>
                            <canvas width="500" height="300"></canvas>
                        </a>
                    </div>
                    <div class="uk-card-body  uk-width-1-1@m uk-padding">
                        <h4 class="uk-text-bold uk-text-primary uk-margin-remove">LINHA DL4 [S/E TETE – S/E MANJE]</h4>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Localizacação</spa>: Região Centro
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Barramento</spa>: S/E de Tete – S/E de Manje
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Configuração</spa>: Triangular
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Ano de entrada em serviço</spa>: 2009
                        </p>
                        <p class="uk-margin-small">
                            <spa class="uk-text-bold">Capacidade das linhas</spa>: 56 MVA
                        </p>
                        <p class="uk-margin-remove">
                            <spa class="uk-text-bold">Níveis de tensão</spa>: 66 kV
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Circuito</spa>: Simples
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Comprimento</spa>: 109 KM
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de torres</spa>: Metalicas
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de condutor</spa>: Panther
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Tipo de isoladores</spa>: Composit
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Cabo de guarda</spa>: OPGW
                        </p>
                        <p class="uk-margin-small-top uk-margin-small-bottom">
                            <spa class="uk-text-bold">Estado actual</spa>: Bom, operando normalmente
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
