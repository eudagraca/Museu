@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom ">
    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-large-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a href="#">História de
                eletrificação</a></li>
            </ul>
        </div>
        <div class="uk-width-expand@m uk-margin-remove">
            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">História de
            eletrificação de Moçambique
            </h3>

            <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">O Governo Colonial, devido ao fraco poder económico, instituiu as Vilas e Juntas locais para adjudicarem as concessionárias o fornecimento de corrente eléctrica de modo a iluminar as urbes e as residências ao invés de serem elas mesmas ocuparem-se naqueles serviços, salvo quando não houvesse interessados na actividade. 
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Foi assim que a Central de Lourenço Marques foi adjudicada a JOOST GULBER e depois à COMPAGNE D’ELECTRICITE de Lourenço Marques e mais tarde a DELAGOA BAY. Em Tete a Central esteve adjudicada ao empresário JOSÉ SERRAS PIRES, o mesmo ocorrendo para algumas Vilas e Cidades de Moçambique.</p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">A partir de 1947 a situação macroeconómica de Portugal começou a melhorar, pois começaram a fluir fundos do plano Marshall, que para além de restabelecer a economia europeia e poderiam ser utilizados em parte nos projectos existentes nas colónias desde que fossem viáveis.
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Com aqueles recursos associados a indemnização que Portugal recebeu fruto da cedência da base aérea dos Açores aos Americanos no decurso da II Guerra Mundial contribuíram bastante para a estabilidade macroeconómica.</p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Deste modo, em finais de 1947 o Governo colonial português comprou a Central da concessionária DELAGOA BAY, em Lourenço Marques, a de Tete e criou em muitas vilas e Cidades um Serviço Municipalizado de Fornecimento de Energia eléctrica. </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                Apesar daquela evolução, as dificuldades em fornecimento da electricidade iam se agudizando devido ao consumo excessivo de gasóleo, escassez de peças sobressalentes e outras despesas associadas.</p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                Em 1964, a Direcção dos Serviços de Administração Civil emitiu uma circular nr 1303/1ª/350, transcrevendo o oficio 593/30/SE, da Repartição dos Serviços Eléctricos do Ministério do Ultramar, que instruía que fosse estimulada a Criação de Serviços de Electricidade, por Federação de Municípios, para a distribuição de energia eléctrica. (Acta dos SMAE 12/64, de 23 de Março).</p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                Foi a partir daquele dispositivo normativo e outros que surgiram a posterior que grande parte das vilas e cidades passaram a dispor de centrais com três ou mais maquinas e uma rede eléctrica digna. Isto por um lado.
                <br>
                Por outro lado, os bancos foram concedendo créditos bancários para a construção das infraestruturas electricas, tendo como exemplos as centrais da SONEFE, em Lourenço Marques construída entre 1950-1959; SHER entre 1948-68; Inhambane em 1960, dentre outras. 
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Paralelamente, foi no âmbito do mesmo processo que a partir de 1960 iniciaram os estudos tendentes a Construção da Central Hidroeléctrica de Cahora Bassa (HCB), com a montagem de Estações Hidrométricas em vários pontos do Rio Zambeze, estudos geológicos e de solos para além de caudais adjacentes, cujo resultado foi a certificação das condições naturais e o início da construção em 1969 e que veio a ser finalizada em Maio de 1975. </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">HCB, foi desenhada para ser o centro produtor de energia que iria alimentar o país, através das diferentes linhas que seriam construídas para além de fornecer à África do Sul e Países vizinhos de Moçambique.</p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Assim, as quatro principais concessionarias (SONEFE, SHER, SMAE e SAE) possuíam realidades diferentes, quer em termos de capacidades em maquinarias, profissional e financeira. .</p>

        </div>
    </div>

    <hr>

    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.comercial') }}">História de comercialização</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.geracao') }}">História de geração</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.transporte') }}">História de transporte</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.distribuicao') }}">História de
                    distribuição</a></li>
        </ul>
    </div>
</div>
@endsection