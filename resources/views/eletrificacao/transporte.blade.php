@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">

    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('historia.index') }}">História de
                        eletrificação</a></li>

                <li><a href="#">História de transporte</a></li>
            </ul>
        </div>
        <div class="uk-width-expand@m uk-width-1-1@m uk-margin-remove">
            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">História de Transporte de Energia em Moçambique
            </h3>

            <p class="uk-dropcap uk-text uk-margin-left uk-margin-large-right uk-text-justify">A primeira linha de transporte na história do país surgiu no período colonial com a Sociedade Hidroeléctrica do Revué, em 1953. Era de 66 KV e com a conclusão da 2ª fase do Projecto foi acrescida outra de 110KV para a cidade da Beira, na Munhava. Na Beira, a SHER instalou uma Subestação eléctrica na Munhava nas imediações onde estava localizada a Central.
            </p>

            <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">A experiência de SHER de construção da Linha de Manica para a Beira viria a ser adoptada pela <i>Sociedade Nacional de Estudos e Financiamentos de Empreendimentos Ultramarinos</i> (SONEFE), que desde os anos de 1968 vinha diligenciando com a contraparte Sul-Africana no sentido de construir uma linha de 275KV daquele território para Lourenço Marques, facto que viria a concretizar-se em Novembro de 1972. A Empresa que ganhou o concurso para a construção da Linha de Transporte de 275KV e a respectiva Subestação foi a ACTA- <i>Actividades Eléctricas Associadas SARL</i>, a firma M. <i>Bronze</i> ficou com a construção dos edifícios e enquanto a Tamega colocou as gravilhas na Subestação do Infulene. </p>

            <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">Outro concurso que a SONEFE lançou foi o de fabrico de dois Transformadores para a Subestação de Infulene, que viria a ser ganho pela empresa italiana <i>SOCIETA NAZIONALE Delle</i>, baseada em Torino, que fabricou Transformadores de Marca &quot;SAVIGLIANO &quot;.  No concernente aos trabalhos de construção civil para o Posto de Seccionamento da Linha de Transporte em Ressano Garcia foi seleccionada a Kruger Moçambique, que uma vez apurada foi posta a esperar por uns meses, apenas em finais de 1972 era autorizada a execução daquele trabalho. Enquanto que a ACTA foi responsável pela construção das duas Linhas de 60KV de Infulene a Central Térmica na pequena Subestação que era conhecida por &quot;Zona D&quot;.
            </p>
        </div>
        <div class="uk-width-1-5@m uk-align-center" uk-lightbox="animation: slide">
            <a class="uk-inline" href="{{ secure_asset('assets/images/missing.jpg') }}" data-caption="Central Termoeléctrica de
                        Munhava na Beira">
                <img src="{{ secure_asset('assets/images/missing.jpg') }}" class="uk-border-rounded"
                    width="250px" height="50px" alt="" uk-img></a>
            <p class="uk-text-meta">Central Termoeléctrica de
                Munhava na Beira</p>

            <a class="uk-inline" href="{{ secure_asset('assets/images/missing.jpg') }}" data-caption="Central Termoeléctrica de
                        Munhava na Beira">
                <img src="{{ secure_asset('assets/images/missing.jpg') }}" class="uk-border-rounded"
                    width="250px" height="50px" alt="" uk-img></a>
            <p class="uk-text-meta">Central Termoeléctrica de
                Munhava na Beira</p>
        </div>

        <p class="uk-text uk-margin-left uk-margin-small-top uk-margin-large-right uk-text-justify">Os testes na Subestação de Infulene, para aferir a qualidade da tensão, foram realizados entre 21 a 27 de Novembro na presença do Engenheiro da Fiscalização da SONEFE, Luís Botão e Eng. Daciano de Barros da ACTA, acompanhados de uma vasta equipa. Ao longo dos testes apurou-se que a ESKOM, entidade fornecedora da corrente na RSA, ao invés de remeter os 275KV, a corrente variava entre 300 a 320KV, não obstante aos finais de semana, sobretudo a noite, a ESKOM tinha dificuldades de carga. Apesar disso ficou claro que com efeitos a 25 de Novembro de 1972 a ESKOM passaria a fornecer energia a Infulene. A linha da RSA a Lourenço Marques tinha uma extensão de 76,5Kms.</p>

        <p class="uk-text uk-margin-left uk-margin-small-top uk-margin-large-right uk-text-justify">Com a Independência Nacional e a posterior criação da EDM em 27 de Agosto de 1977, a Subestação do Infulene passou, tal como na época da SONEFE, a fazer parte da secção eléctrica da CTM, dirigida pelo Eng. Cabrita Gonçalves que viria a associar-se ao Eng. Rodrigues em 1979, como adjunto. A Manutenção era gerida por uma equipa dirigida por Fuade Sultane composta por Oliveira, Selemane Jafar, Ali Mansur entre outros. Com a saída do Eng. Cabrita e Rodrigues, a chefia passou para Fuade Sultane. </p>

        <p class="uk-text uk-margin-left uk-margin-small-top uk-margin-large-right uk-text-justify">Até a independência Nacional de Moçambique apenas existiam duas Cidades interligadas que eram, Beira, a partir da SHER e Maputo, através da África do Sul. A EDM teve inúmeras vantagens ao longo da sua trajectória, pois em Maio de 1975 acabava de ser concluída a construção da Central Hidroeléctrica de Cahora Bassa e dois anos depois foi criada, facto que lhe permitiu desencadear uma campanha acesa para angariação de fundos para aproveitar o recurso hídrico daquela central e alimentar o país sem se preocupar com a geração, salvo para estabilizar o sistema. </p>

        <p class="uk-text uk-margin-left uk-margin-small-top uk-margin-large-right uk-text-justify">Foi assim que foram obtidos fundos dos Bancos Italianos e Franceses para construção da Linha Centro-Norte e posteriormente associaram-se os fundos da Suécia. <br>Alguns do projectos que foram desenvolvidos com a Energia de Cahora Bassa:</p>
        <ul class="uk-list uk-list-disc uk-list-primary uk-margin-small-top uk-margin-large-right uk-margin-left ">
            <li class="uk-text-black">Em 1980-1986 arrancou em Tete o Projecto da Linha Centro-Norte que cobre o troço Matambo-Chimuara-Nicoadala-Quelimane-Mocuba-Alto-Molocue-Nampula, em 220 KV. Com aquela Linha foi possível interligar Nacala a partir da antiga Linha de 110 KV que existia entre Nacala-Nampula.</li>
            <li class="uk-text-black">Para potenciar as Cidades de Manica e Beira, ainda em 1980, foi construída a Linha de Tete para Chibata a 220 KV, que infelizmente não durou muito tempo, pois nos anos posteriores viria a ser paralisada devido a sabotagem das torres. </li>
            <li class="uk-text-black">Em 1980-1982 seguiu-se o Projecto da Linha Tete-Chibata 220KV, de tal modo que por intermédio da tradicional linha de Chimoio a Beira foi possível escoar a corrente eléctrica para Beira.</li>
        </ul>
        <p class="uk-text uk-margin-left uk-margin-small-top  uk-margin-large-right uk-text-justify">A adjudicatária da Linha foi a SAE Italiana, as Subestações ficaram a cargo da Cogelex da França, sendo a wed Power da Suécia consultora do Projecto.</p>

        <p class="uk-text uk-margin-left uk-margin-small-top  uk-margin-large-right uk-text-justify">Sobre estes projectos, Ernesto Faela, topógrafo reformado, relata que:</p>

        <p class="uk-text-italic uk-text uk-margin-left uk-margin-large-right uk-text-justify uk-margin-small-top">”Depois de ter trabalhado com os alemães na Linha de Nacala - Nampula, a partir de Maio levei quase todo o ano de 1979 naquele projecto e no ano seguinte, fui orientado para trabalhar com topógrafos Suecos, dirigidos pelo Eng. Tommy Lindh, na Zambézia em plena execução da Linha Centro-Norte. <br> Nessa altura, eles não faziam a concepção da Linha de 220 KV, pois aquela estava sendo erguida, provavelmente tivesse sido estudada anos antes pelo empreiteiro ou pelos portugueses. <br>
            Na Zambézia estiveram inicialmente em Chimuara onde concebiam as futuras Linhas de 110KV, que seriam derivadas daquelas Subestações para os diferentes pontos ao nível da jurisdição daquelas S.E. <br>Quando terminaram, ainda em 1980, seguiram para o Levantamento de Nampula-Ocua (na outra margem do rio Lurio) que era o local onde se esperava que seria montada a Subestação para alimentar aquela região e depois a Linha prosseguiria a Pemba.”</p>

        <p class="uk-text uk-margin-left uk-margin-top  uk-margin-large-right uk-text-justify">Enquanto prosseguia os trabalhos na parte norte, a EDM conseguiu financiamento dos Bancos Italianos e da ASDI para a construção da Linha para o vale do Limpopo, partindo de Infulene-Macia- Chokwe-Xai-Xai a uma tensão de 110KV, em 1982-1983, tendo sido montado em Macia um Posto de seccionamento, em meados de Agosto de 1983. Este projecto foi coordenado pelo Eng. Higino Fabião, na altura gestor de projectos na Direcção de Engenharia de Redes, sendo o Eng. Cesar Manuel seu adjunto. O Empreiteiro da Linha foi a <i>SADELMI</i> Italiana, que no fundo era a <i>SAE</i> que se fundira com uma outra empresa, resultando em <i>SADELMI</i>. </p>

        <p class="uk-text uk-margin-left uk-margin-top uk-margin-large-right uk-text-justify">Com os Acordos Gerais de Paz, pondo fim a Guerra Civil de 16 anos em Moçambique, a cidade de Xai-Xai e Inhambane ficaram interligadas por uma linha a 110 KV, que veio a ser concluída em 2004.</p>

        <ul class="uk-list uk-list-disc uk-margin-top uk-list-primary uk-margin-large-right uk-margin-left ">
            <li class="uk-text-black">A Linha Alto-Molocue-Gurue-Cuamba-Lichinga veio a ser efectivada entre os anos 2002 e 2005 e a de Nampula à Pemba em2003-2004 e posteriormente Pemba-Macomia-Auasse também em 110KV.</li>
            <li class="uk-text-black">Entre 2017-2019 foi interligado Cuamba-Marrupa também a uma tensão de 110KV e a linha Chibata-Dondo em 220 KV. </li>
        </ul>

        <p class="uk-text uk-margin-left uk-margin-top uk-margin-large-right uk-text-justify">Com estes empreendimentos erguidos foi possível iniciar os Projectos de Electrificação de todas as Sedes Distritais que terminou em 2017, estando neste momento a ser implementados Projectos de Electrificação dos Postos Administrativos.  </p>
    </div>
</div>

</div>
@endsection
