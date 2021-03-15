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

            <p class="uk-dropcap uk-text uk-margin-left uk-margin-large-right uk-text-justify">A primeira linha de
                transporte na história do país surgiu no período colonial com a Sociedade Hidroeléctrica do Revué em
                1953. Era de 66 KV e com a conclusão da 2ª fase do Projecto foi acrescida outra de 110KV para a cidade
                da
                Beira da
                Munhava. Na Beira, a SHER instalou uma Subestação eléctrica na Munhava nas imediações onde estava
                localizada
                a Central.
            </p>

            <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">A experiência da SHER na construção
                da Linha de Manica para Beira viria a ser adoptada pela Sociedade Nacional de
                Estudos e Financiamentos de Empreendimentos Ultramarinos (SONEFE), que desde os anos de 1968 vinha
                diligenciando com a
                contraparte Sul-Africana no sentido de construir uma linha de 275KV daquele território para Lourenço
                Marques, facto que
                viria a concretizar em Novembro de 1972. A Empresa que ganhou o concurso para a construção da Linha de
                Transporte de
                275KV e a respectiva Subestação foi ACTA- Actividades Eléctricas Associadas SARL, a firma M. Bronze
                ficou com a
                construção dos edifícios e enquanto que a Tamega colocou as gravilhas na Subestação do Infulene.</p>

            <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">Outro concurso que a SONEFE lançou
                foi o de fabrico de dois Transformadores para a Subestação de Infulene, que viria a
                ser ganho pela empresa italiana SOCIETA NAZIONALE Delle, baseada em Torino, que fabricou Transformadores
                de Marca
                "SAVIGLIANO". No concernente aos trabalhos de construção civil para o Posto de Seccionamento da Linha de
                Transporte em
                Ressano Garcia foi seleccionada a Kruger Moçambique, que uma vez apurada foi posta a esperar por uns
                meses, apenas em
                finais de 1972 era autorizada a execução daquele trabalho. Enquanto que a ACTA foi responsável pela
                construção das duas
                Linhas de 60KV de Infulene à Central Térmica na pequena Subestação que era conhecida por &quot;Zona
                D&quot;.
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

        <p class="uk-text uk-margin-left uk-margin-small-top uk-margin-large-right uk-text-justify">Os testes na
            Subestação de Infulene,
            para aferir a qualidade da tensão, foram realizados entre 21 a 27 de Novembro na
            presença do Engenheiro da Fiscalização da SONEFE, Luís Botão e Eng. Daciano de Barros da ACTA,
            acompanhados de uma vasta
            equipa. Ao longo dos testes apurou-se que a ESKOM, entidade fornecedora da corrente na RSA, ao invés de
            remeter os
            275KV, a corrente variava entre 300 a 320KV, não obstante aos finais de semana, sobretudo a noite a
            ESKOM tinha
            dificuldades de carga. Apesar disso ficou claro que com efeitos a 25 de Novembro de 1972 a ESKOM passou
            a fornecer
            energia a Infulene. A linha da RSA exactamente a partir da fronteira a Lourenço Marques tinha uma
            extensão de 76,5Kms.</p>

        <p class="uk-text uk-margin-left uk-margin-small-top uk-margin-large-right uk-text-justify">Com a Independência
            Nacional e a
            posterior criação da EDM em 27 de Agosto de 1977, a Subestação do Infulene passou tal
            como na época da SONEFE a fazer parte da secção eléctrica da CTM, onde era dirigida pelo Eng. Cabrita
            Gonçalves que
            viria associar-se o Eng. Rodrigues em 1979, como adjunto. A Manutenção era gerida pelo Fuade Sultane e
            aliado a isso
            tinha o Sr. Oliveira, Selemane Jafar, o Encarregado Ali Mansur dentre outros. Com a saída do Eng.
            Cabrita a chefia
            passou para Fuade Sultane.</p>

        <p class="uk-text uk-margin-left uk-margin-small-top uk-margin-large-right uk-text-justify">Até a independência
            Nacional de
            Moçambique apenas existiam duas Cidades interligadas que eram a Beira a partir da SHER e
            Maputo através da África do Sul. A EDM teve inúmeras vantagens ao longo da sua trajectória, pois em Maio
            de 1975 acabava
            de ser concluída a construção da Central Hidroeléctrica de Cahora Bassa e dois anos depois foi criada,
            facto que lhe
            permitiu desencadear uma campanha acessa para angariação de fundos para aproveitar o recurso hídrico
            daquela central e
            alimentar o país sem se preocupar muito com a geração, salvo para estabilizar o sistema.</p>

        <p class="uk-text uk-margin-left uk-margin-small-top uk-margin-large-right uk-text-justify">Foi assim que foram obtidos fundos
            dos Bancos Italianos e Franceses para construção da Linha Centro-Norte e
            posteriormente associaram-se os fundos da Suécia. Foi assim que nasceram os seguintes Projectos:</p>
        <ul class="uk-list uk-list-disc uk-list-primary uk-margin-large-right uk-margin-left ">
            <li class="uk-text-black">Em 1980-1986 arrancou de Tete o Projecto da Linha Centro-Norte que saiu de
                Matambo-Chimuara-Nicoadala-Quelimane-Mocuba-Alto-Molocue-Nampula em 220 KV. Com aquela Linha foi
                possível interligar
                Nacala a partir da antiga Linha de 110 KV que existia de Nacala-Nampula, como foi referido
                inicialmente.</li>
            <li class="uk-text-black">Para potenciar as Cidades de Manica e Beira ainda entre 1980-1982, foi
                construída a Linha de Tete para Chibata em 220
                KV, que infelizmente não ficou durante muito tempo, pois nos anos posteriores viria a ser paralisada
                devido a sabotagem
                das torres. O objectivo daquela linha era reforçar o fornecimento as cidades de Chimoio e Beira que
                a partir da
                tradicional ligação ser possivel fazer chegar a corrente eléctrica. .</li>
            <li class="uk-text-black">O Projecto da Linha Centro-Norte teve como adjudicatária da Linha a SAE
                Italiana e as Subestações foram montadas pela
                Cogelex da França enquanto a Swed Power da Suécia era consultora do Projecto.</li>
        </ul>
        <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">Sobre aquele projecto, o topógrafo
            Ernesto Faela, da EDM e actualmente reformado, relatou que:</p>

        <p class="uk-text-italic uk-text uk-margin-left uk-margin-large-right uk-text-justify uk-margin-small-top">”Fui admitido em
            principios de 1979, logo depois fui levado à Nacala, em Maio daquele ano e passei a trabalhar no
            levantamento topográfico da linha de 110 KV que seria construida a posterior com engenheiros da Alemanha
            do Leste (RDA).
            Aquele trabalho levou-nos quase um ano. Porém, no ano seguinte, disseram para ir trabalhar com
            topógrafos Suecos,
            dirigidos na altura pelo Eng. Tommy Lindh, na Zambézia em plena execução da Linha Centro-Norte. <br> Na
            altura, nós não faziamos a concepção da Linha de 220 KV, pois aquela estava sendo erguida pela SAE,
            provavelmente
            tivesse sido estudada anos antes pelo empreiteiro ou pelos portugueses.<br>
            Na Zambézia estivemos inicialmente em Chimuara onde concebiamos em termos topograficos as futuras Linhas
            de 110KV, que
            seriam derivadas daquela Subestação para os diferentes pontos ao nível da jurisdição e posteriormente
            fomos a Quelimane,
            Mocuba, Alto-Molocue até Nampula.<br>Quando terminamos o Levantamento das linhas de 110 KV a derivar a
            partir das Subestações na Zambézia, ainda em 1980,
            seguimos para o Levantamento de Nampula-Ocua (na outra margem do rio Lurio) que era o local onde se
            esperava que seria
            montada a Subestação para alimentar aquela região e depois a Linha prosseguiria à Pemba.”</p>

        <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">O resultado daquele trabalho de
            levantamento permitiu medir o pulsar em termos de custos provaveis para a electrificação
            do país, pois foi possivel alcançar a todos os pontos estratégicos do país. Faela refere que o
            levantamento de
            Nampula-Angoche, Alto-Molocue-Gurué, Cuamba foi realizado ainda em 1980.</p>

        <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">Enquanto prosseguiam os trabalhos na
            parte Centro-norte, a EDM conseguiu financiamento dos Bancos Italianos e da ASDI,
            para a construção da Linha para o vale do Limpopo, saindo de Infulene-Macia- Chokwe-Xai-Xai a tensão de
            110KV, isto
            entre 1982-1983, tendo sido montado na Macia um Posto de seccionamento, em meados de Agosto de 1983.
            Para execução do
            projecto foi encarregue o Eng. Higino Fabião, na altura gestor de projectos na Direcção de Engenharia de
            Redes e o Eng.
            César Manuel seu adjunto. O Empreiteiro da Linha foi a SADELMI Italiana, que no fundo era a SAE que se
            fundira com uma
            outra, resultando em <i>SADELMI</i>.</p>

        <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">Com os Acordos Gerais de Paz, que
            deram término a Guerra Civil de 16 anos em Moçambique, a partir da Cidade de Xai-Xai
            foi interligada a Cidade de Inhambane em 110 KV que veio a ser concluída em 2004.</p>

        <p class="uk-text uk-margin-left uk-margin-remove-top uk-margin-large-right uk-text-justify">A Linha
            Gurue-Cuamba-Lichinga veio a
            ser efectivada nos anos de 2002 a 2005 e de Nampula à Pemba em2003-2004 e
            posteriormente Pemba-Macomia-Auasse também em 110KV.</p>

        <p class="uk-text uk-margin-left uk-margin-remove-top uk-margin-large-right uk-text-justify">Em 2017-2019 foi
            interligado
            Cuamba-Marrupa também a uma tensão de 110KV e a linha Chibata-Dondo em 220 KV.</p>

        <p class="uk-text uk-margin-left uk-margin-remove-top uk-margin-large-right uk-text-justify">Com base naqueles
            projectos a EDM
            conseguiu electrificar todos os distritos do país, com uma media de cerca de dois
            milhões de consumidores e presentemente desencadeia acções para alcançar os Postos Administrativos e o
            acesso universal
            a energia para toda população moçambicana.</p>
    </div>
</div>

</div>
@endsection
