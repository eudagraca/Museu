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
                <li><a href="#">Plano operacional</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m" id="governanca">
            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Plano Operacional da EDM</h3>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                A EDM apresenta-se, verticalmente integrada, cobrindo as áreas de Geração, Transporte, Distribuição e
                Comercialização de
                Energia.
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                Em 1977, 65% da energia consumida no País provinha da SONEFE em Maputo e SHER em Manica. Os restantes
                35%
                provinham de
                700 Centrais Privadas, onde 500 delas tinham uma capacidade inferior a 50KVA, sendo que a Cidade de
                Maputo
                consumia mais
                de metade da energia produzida, seguida de Chimoio e Beira . Tanto nestas Cidades como noutras , o
                consumo
                doméstico era
                também restrito às zonas geralmente referidas como zona "cimento"
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                Segundo os dados com referência a 31 de Dezembro de 2019, a Rede da EDM contava com aproximadamente
                245,2 MW
                de
                Capacidade Instalada e 192,3 MW de Capacidade Disponível; 5.601Km de Rede de Transporte; 43.806Km de
                Rede de
                Distribuição e 12.777 Postos de Transformação (PTs); ao Serviço de quase 2.052.802 Milhões de Clientes,
                correspondentes
                a (34% da população). (EDM 2020)
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                Esta transformação substancial da Rede da EDM deveu-se à integração de outras fontes hídricas e
                térmicas,
                quer da
                empresa quer da HCB e a participação público-privada, sobretudo produtores independentes, bem como a
                expansão da rede
                para vários centros urbanos.
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                Contudo, resta ainda integrar o sistema Sul com os sistemas Centro e Norte; reabilitar e expandir a
                infraestrutura de
                distribuição existente para garantir redundâncias, reduzir perdas técnicas e melhorar a qualidade da
                energia
                fornecida;
                bem como aumentar a capacidade de produção de modo a dar resposta à crescente demanda de energia
                eléctrica
                (Baptista,
                2017).
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                A empresa tem em vista uma carteira alargada de investimentos em produção, transporte e distribuição,
                mas as
                condições
                financeiras actuais da EDM e do país não têm sido favoráveis a esse investimento.
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                A empresa continua a depender da ajuda de doadores para a realização de alguns destes investimentos,
                como é
                o caso do
                anúncio de investimento pelo Banco Mundial no valor de USD$150 milhões.”
            </p>
        </div>
    </div>
</div>
@endsection