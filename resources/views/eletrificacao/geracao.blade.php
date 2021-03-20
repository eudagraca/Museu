@extends('layouts.single-app')

@section('content')

<div class="uk-container uk-margin-large-bottom uk-margin-large-top">

    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('historia.index') }}">História de
                        eletrificação</a></li>

                <li><a href="#">História da geração</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove">
            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">História de Geração
            </h3>

            <p class="uk-dropcap uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Primeiras iniciativas visando estabelecer a iluminação pública nas principais povoações da costa moçambicana datam da segunda metade do século XIX, através de candeeiros abastecidos a petróleo. 
            </p>

            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Estes candeeiros foram, pela primeira vez, usados no baile que o então Capitão-General de Moçambique, realizava para celebrar o casamento do Rei D. Luís I de Portugal, em 18 de Julho de 1863. O mesmo viria a ocorrer em outras povoações como, por exemplo, na Beira, tendo-se estabelecido 30 candeeiros públicos, abastecidos a petróleo, logo em 1892.</p>

            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Mas a utilização da energia eléctrica na iluminação pública foi feita entre o final do século XIX e nas primeiras duas décadas do século XX, nas principais localidades da antiga colónia. </p>

            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">No Município de Lourenço Marques, elevada à categoria de Cidade em 10 de Novembro de 1887, com cerca de 200.000 habitantes, havia crescimento de avalanche de firmas estrangeiras que queriam nele se instalar. (Dava 2011 e Medeiros 1895).</p>

            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Estes factores conduziram ao Governo Colonial a uma reflexão no sentido de construir uma Central Eléctrica para a iluminação pública nas ruas e avenidas e satisfazer as actividades industriais emergentes na época, para além do consumo doméstico. </p>

            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Foi com objetivo de satisfazer estas necessidades que nasceu a ideia da construção duma Central Eléctrica em Lourenço Marques.</p>

            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">A Primeira Central de Lourenço
                Marques (1895-1913)</h4>
            <div class="uk-margin-right">
                <div class="uk-text-center" uk-grid>
                    <div class="uk-width-expand@m">
                        <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A iniciativa mais antiga de produção e o fornecimento de corrente eléctrica começou por ser concessionado à JOOST GULBER& Co Ltd, em 23 Outubro de 1895, fruto de um concurso público, que construiu a Primeira Central que funcionava atrás do Mercado Municipal entre, as actuais Avenidas Zedequias Manganhela e a Karl Marx. A mesma era uma Central a Vapor e dispunha de uma só máquina.<br>Era um edifício insignificante, construído de improviso, que para além da central, no lado adjacente, estava a oficina para pequenas reparações. 

                        </p>
                        <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A iniciativa mais antiga de produção e o fornecimento de corrente eléctrica começou por ser concessionado à JOOST GULBER& Co Ltd, em 23 Outubro de 1895, fruto de um concurso público, que construiu a Primeira Central que funcionava atrás do Mercado Municipal entre, as actuais Avenidas Zedequias Manganhela e a Karl Marx. A mesma era uma Central a Vapor e dispunha de uma só máquina.<br>Era um edifício insignificante, construído de improviso, que para além da central, no lado adjacente, estava a oficina para pequenas reparações. 

                        </p>

                        
                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A COMPAGNIE D’ELECTRICITE procedeu melhoramentos de fundo, pois conseguiu sair do estágio de apena uma máquina a vapor para duas máquinas, em 1898 e, ao mesmo tempo, estendeu a rede de  iluminação pública nas ruas e para algumas residências, chegando a superar algumas Cidades da África do Sul e outras da Europa, uma vez que a extensão da rede atingiu 29kms; ampliou a infraestrutura da Central, com um prédio na parte frontal, onde por baixo estavam os Serviços técnicos e em cima eram os serviços administrativos (Dava2011).  
                        </p>

                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Apesar dos progressos alcançados na vigência da COMPAGNE D’ELECTRICITE, uma vez que havia montado duas máquinas de 150 cavalos, a mesma cedeu lugar, em finais de 1902, À DELAGOA BAY DEVELOPMENT CORPORATION LTDA, que havia ganho em 1901 o concurso para a implementação dos Carros Eléctricos na Cidade. 
                        </p>

                        <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Em Janeiro de 1903, a DELAGOA BAY passou a gerar e a fornecer corrente eléctrica a partir da Central herdada, atrás do Mercado Central, enquanto criava condições para a construção da sua própria Central na actual Av. 24 de Julho, defronte do Cine África. A DELAGOA BAY funcionou na Primeira Central até provavelmente em 1913, altura em que criou condições necessárias para se transferir e, em 1914, iniciou a produção de corrente eléctrica na Central da 24 de Julho.
                        </p>
                        
                    </div>

                    <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
                        <a class="uk-inline" href="{{ asset('assets/images/paginas/delagoa.png') }}"
                            data-caption="A Primeira Central de Lourenço Marques (1895-1912), estava de frente do Mercado Municipal. Explorado pela Jost Gulber 1895 - 1897, Campagne D&apos;electricite 1897-1902 e Delagoa Bay 1903-1911">
                            <img src="{{ asset('assets/images/paginas/delagoa.png') }}" class="uk-border-rounded"
                                width="500px" height="250px" alt="" uk-img></a>
                        <p class="uk-text-primary uk-text-justify">A Primeira Central de Lourenço Marques (1895-1912), estava de frente do Mercado Municipal. Explorado pela Jost Gulber 1895 - 1897, Campagne D&apos;electricite 1897-1902 e Delagoa Bay 1903-1911</p>
                        <a class="uk-inline" href="{{ asset('assets/images/paginas/Primeira_Central_Maputo.png') }}"
                            data-caption="A Primeira Central de Lourenço Marques (1895-1912), estava de frente do Mercado Municipal. Explorado pela Jost Gulber 1895 - 1897, Campagne D&apos;electricite 1897-1902 e Delagoa Bay 1903-1911">
                            <img src="{{ asset('assets/images/paginas/Primeira_Central_Maputo.png') }}" class="uk-border-rounded"
                                width="500px" height="250px" alt="" uk-img></a>
                        <p class="uk-text-primary uk-text-justify">Primeira Central de Lourenço Marques 1895 - 1903 tendo permanescido com as concessionarias Jost Gulber 1895 - 1897, Campagne D&apos;electricite 1897-1902 e Delagoa Bay 1903-1911</p>

                    </div>
                
                </div>
                        
                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Apesar dos progressos alcançados
                    na
                    vigência da COMPAGNE D’ELECTRICITE, uma vez que havia montado duas máquinas de 150
                    cavalos, a mesma cedeu lugar, em finais de 1902, À DELAGOA BAY DEVELOPMENT CORPORATION LTDA, que
                    havia
                    ganho em 1901 o
                    concurso para a implementação dos Carros Eléctricos na Cidade.
                </p>
                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Em Janeiro de 1903, a DELAGOA BAY
                    passou a
                    gerar e a fornecer corrente eléctrica a partir da Central herdada, atrás do
                    Mercado Central, enquanto criava condições para a construção da sua própria Central na actual Av. 24
                    de
                    Julho, defronte
                    do Cine África. A DELAGOA BAY funcionou na Primeira Central até provavelmente em 1913, altura que
                    criaram as condições
                    necessárias para transferir e, em 1914 iniciaram a produção de corrente na Central da 24 de Julho.
                </p>
            </div>

            {{-- Centrais  --}}
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Centrais Electrica da 24 De
                Julho e de Sommerchield (1914-1963)</h4>
            <div class="uk-margin-right">
                <div class="uk-text-center" uk-grid>

                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Uma vez construída a Central que inicialmente servia apenas para os carros eléctricos, em 1914, a geração de energia passou da antiga Central localizada na Baixa da Cidade para a nova na Central construída na zona da actual Avenida 24 de Julho de fronte do actual Cine África. Até nos finais da década 40, a Central da 24 de Julho, estava equipada com 5 caldeiras Babcock & wilcox, seis máquinas BELLISS & MORCON, acopladas com grelhadas mecânicas que geravam 2x250Volts, o que ao todo dispunha de uma potência de 2.700 KW, ainda insuficiente para satisfazer a Cidade de Lourenço Marques, que se encontrava em rápido crescimento. 
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A Rede de Distribuição era de condutores de cobre nu, assente em postes de ferro, por cruzetas e copos de porcelana. Esta situação levava a muitas quedas de tensão e paralisações imprevistas da central, sobretudo no período nocturno. Uma vez que o fenómeno era recorrente, o Governo Colonial, através da Câmara Municipal de Lourenço Marques, decidiu tomar o controlo da Central e afastar a DELAGOA BAY na noite de 27 de Outubro de 1947, depois de uma avaria que teria deixado a Cidade às escuras, facto que resultou na criação dos Serviços Municipalizados de Àgua e Electricidade (SMAE) 
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">O SMAE, nos anos de 1950, para reforçar as máquinas existentes na Central Geradora, adquiriu dois grupos à Diesel MIRLLES BRUSH de 600 KW cada e montou-os na parte exterior da Central na extremidade Leste. O fornecedor dos grupos foi a firma BREYNER & WIRTH, eram grupos adquiridos em 2ª mão na Inglaterra. Uma vez instalados nos grupos geradores, a demanda ficou parcialmente controlada, porém, nos anos de 1952 houve a necessidade de se acrescentar a potência, facto que culminou com a aquisição de mais dois grupos MWM, AEG de 600 KW cada, fornecidos pela firma J. MARTINS & MARQUES. Com os quatro grupos à Diesel, foi construído um Hangar, seguido dos maciços onde montaram os equipamentos de comando, incluindo os tanques de alimentação para poderem funcionar adequadamente. Desta forma, tinham, no interior do edifício, as velhas máquinas à vapor e, no hangar, as máquinas à Diesel. 
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Nos anos seguintes, o SMAE, como precaução, propôs à Câmara a aquisição de mais um grupo, proposta que viria a ser rejeitada alegadamente devido à contenção de custos. No entanto, em 17 de Janeiro de 1957, foi reportado nos SMAE que a ponta máxima na Central tinha atingido 4.002KW, valores considerados extremos, tendo comunicado novamente a Câmara, que por sua vez autorizou o processo de aquisição do novo grupo gerador. 
                    </p>

                    <div class="uk-width-expand@m">

                        <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">O concurso para o fornecimento do grupo gerador viria a ser ganho pela Entreposto Comercial de Moçambique ao valor de 2.482.966$20 (Escudos) correspondentes ao custo FOB, as despesas do frete e seguro seriam pagas mediante apresentação dos documentos. O grupo viria a ser montado na zona Militar, na Sommerschield. Contrariamente aos anteriores, este grupo gerador era de corrente alternada, pois fazia parte do cumprimento das recomendações do Governador-Geral Maurício Gabriel Teixeira (1948-1958), no sentido de se ir adquirindo grupos de corrente alternada similares a que viriam a ser instalados na Nova Central Térmica (SONEFE). 
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Convindo reforçar a Central da Sommerschield, localizada num abrigo, eventualmente porque previam que a Guerra de Libertação iria eclodir, em 10 de Julho de 1958, foi apresentado à Comissão Administrativa (CA) dos S.M.A.E a proposta única da firma Sociedade Técnica Distribuidora Limitada de um grupo de 125 KW. Na mesma, argumentava a Direcção do SMAE o seguinte:
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify uk-text-italic">
                            &quot;Afigurando-se ainda infelizmente afastada, pelo menos para fins do corrente ano, a entrada em serviço da Nova Central Térmica, em cumprimento de determinações da Exma C.A, efectuamos diligências junto das firmas da especialidade locais, sobre a possibilidade de aquisição muito urgente  dum outro grupo electrogéneo, de potência da ordem dos 100 a 200 KW que assegurasse, ao menos a continuidade  parcial do fornecimento de energia e pudesse aliviar as deficientes condições técnicas de trabalho do gerador actual da Sommerschield, fora das horas de ponta&quot;.
                        </p>

                    </div>
                    <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
                        <a class="uk-inline" href="{{ asset('assets/images/paginas/centrais_sommerchield.png') }}"
                            data-caption="Central da 24 de Julho 1912 - 1963, tinha 6 (seis) máquinas a vapor, 5(cinco) Caldeiras de corrente continua. O encarregado era Guilherme Wilson que entrou em 1915 como aprendiz e com ele foi atéao fecho em 1963 já na qualidade de encarregado da mesma.">
                            <img src="{{ asset('assets/images/paginas/centrais_sommerchield.png') }}"
                                class="uk-border-rounded" width="500px" height="250px" alt="" uk-img></a>
                        <p class="uk-text-justify uk-text-primary">Central da 24 de Julho 1912 - 1963, tinha 6 (seis) máquinas a vapor, 5(cinco) Caldeiras de corrente continua. O encarregado era Guilherme Wilson que entrou em 1915 como aprendiz e com ele foi atéao fecho em 1963 já na qualidade de encarregado da mesma.</p>
                    </div>
                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Era um grupo electrogéneo "General Motors", Modelo 62506 RD, de 125KW para corrente alternada trifásica, a 4 fios, 220/380V, 50 períodos por segundo, 1.500 rpm, completo com todos os acessórios, ao preço de 450.000$00, isto é, por cerca de 3.600$00/KW de potência, o que consideravam ser aceitável e mesmo módico por se tratar de um grupo novo completo, de fácil montagem e condução.  Uma vez adquirido aquele grupo, o SMAE tinha duas centrais, Uma na 24 de Julho, de corrente contínua e a outra na Sommerschield de corrente alternada. O SMAE, com aqueles grupos, foi capaz de aguentar até a altura que entrou em funcionamento a Central da SONEFE em Fevereiro de 1959. (Acta 28/58, de 10 de Julho).
                    </p>
                </div>
            </div>

            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Nova Central Térmica de
                Lourenço Marques (SONEFE -1959-1997)</h4>
            <div class="uk-margin-right">
            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A Câmara Municipal da então Cidade de Lourenço Marques havia encomendado um estudo para a construção da Central Térmica de Lourenço Marques nos anos de 1940-1943. O mesmo foi autorizado a proceder ao lançamento do concurso para o Fornecimento das máquinas. (Boletim Municipal 1968). 
                        </p>
                        <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">O Governo Colonial viria a adjudicar à SETEC o fornecimento do Equipamento para a Central contando que em finais de 1952 a infraestrutura estaria em condições para gerar Electricidade. Infelizmente não foi o que aconteceu, as obras atrasaram de forma grave. Dado ao atraso que se verificava na execução das obras, o Governo, através do Diploma legislativo nº 1.691 de 20 de Julho de 1957 concessionou a Central à Sociedade Nacional de Estudos e Financiamentos Ultramarinos (SONEFE) por cinquenta anos a produção de energia eléctrica em Lourenço Marques, o que significava que os equipamentos e as infraestruturas montadas através da SETEC poderiam ser usados e pagar sete cêntimos do escudo por cada KWh emitido até a altura da amortização do valor da Central. (Boletim Municipal 1968).
                        </p>

 <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">No entanto, as obras sofreram um atraso e apenas em Fevereiro de 1959 a parte leste da Central, que viria a ser conhecida como CTI, estava pronta e com as respectivas máquinas instaladas. O Encarregado do Governo na Central, receando represálias por parte das chefias do Governo pelo atraso, ordenou que a CTI arrancasse com a produção. A CTI dispunha de três caldeiras e dois grupos turbo alternadores com a capacidade de 6,25MW cada, cuja energia produzida era enviada para Terminal dos SMAE que estava localizada na Sommerschield e daí era distribuída para a cidade. A outra parte da corrente era coberta pelos SMAE através da Central da 24 de Julho.                    </p>

                <div class="uk-text-center" uk-grid>
                    <div class="uk-width-expand@m">
                        
                       
                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Em Novembro de 1961, como parte dos requisitos do contrato, a SETEC montou na CTII um grupo de 15MW e, cinco meses depois, em Abril de 1962, montou o segundo grupo de 15MW. Em Agosto de 1966 foi montado um grupo a Gás de 17,5MW na parte exterior e em 1968 viria a ser montado o último grupo de 15MW e, finalmente, em 1973, foi instalado o grupo a Gás de 36,6 MW. 
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Com a Central da SONEFE em funcionamento foi possível a construção da Linha para Matola, Machava, Estação de Captação de Agua em Umbeluzi e outras instâncias industriais, mas o povoado de Boane e Namaacha tiveram de esperar pela Linha de Transporte da África do Sul e a montagem da subestação do Infulene para serem interligadas, em 1973.
                    </p>

<p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Importa referir que foi com base na adopção de produção a gás que nasceu a ideia de construção da actual Central Termoelétrica de Ciclo Combinado de Maputo, com capacidade de 106 MW, instalada na extremidade ocidental da antiga Central Térmica de Maputo. A mesma faz parte da parceria entre o Governo de Moçambique e o Japão.
                    </p>

                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Por se encontrar desgastada, depois de intenso trabalho de operação, em 1989 foi alvo de duas consultorias, uma Soviética que ficou três anos a proceder o estudo no terreno, trabalhando ali e utilizando a técnica de observação-participante e a outra foi Sul-Africana. As duas consultorias chegaram a mesma conclusão, a central estava com deficiências graves, consequentemente, o rendimento era baixo. Daí que os Soviéticos admitiram que, se a EDM pretendesse continuar com a CTM deveria adquirir novo equipamento, novas caldeiras e reabilita-la por completo, enquanto os Sul Africanos, por sua vez, entenderam que a solução passava por disponibilizar mais uma linha de Alta tensão saindo da África do Sul para Infulene, para serem duas linhas: a de 275KV e a outra de 110KV. No entanto, a EDM, como solução imediata, decidiu, em 1992, instalar um grupo a gás de 25MW.
                    </p>

                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Em 1996, a Central apenas produziu 177MW à custa de muito esforço, sendo que grande parte daquela energia era proveniente do grupo a gás de 1992, de formas que foi iniciado o processo de desactivação e posterior reintegração dos técnicos que haviam trabalhado naquela Central em outros sectores de actividades da EDM. 
                    </p>

                    </div>
                    <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
                        <a class="uk-inline" href="{{ asset('assets/images/paginas/nova_central_termica.png') }}"
                            data-caption="Central Térmica de Lourenço Marques contruída entre 1950-1959, funcionou de Janeiro de 1959 a 1995">
                            <img src="{{ asset('assets/images/paginas/nova_central_termica.png') }}"
                                class="uk-border-rounded" width="500px" height="250px" alt="" uk-img></a>
                        <p class="uk-text-primary uk-text-justify">Central Térmica de Lourenço Marques contruída entre 1950-1959, funcionou de Janeiro de 1959 a 1995</p>
                        <a class="uk-inline" href="{{ asset('assets/images/paginas/Central_termica_Lourenco_M.png') }}"
                            data-caption="Central Térmica de Lourenço Marques na fase da construção, onde a CT1 estava operar e CT2 em construção">
                            <img src="{{ asset('assets/images/paginas/Central_termica_Lourenco_M.png') }}"
                                class="uk-border-rounded" width="500px" height="250px" alt="" uk-img></a>
                        <p class="uk-text-primary uk-text-justify">Central Térmica de Lourenço Marques na fase da construção, onde a CT1 estava operar e CT2 em construção</p>
                    </div>

                    

                    

                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A Central da SONEFE tinha como Director Joaquim Carvalho que viria a abandonar o País entre 1980-1981 e, posteriormente, viria a ser indicado como Director da Central o Eng. José Neves e como Chefe da Central nessa época o Eng. Técnico Samuel Checo. O Eng. Técnico Samuel Checo tinha sido transferido da Área Operacional da Cidade de Maputo para a Central Térmica como Electricista, depois passou para Operador e mais tarde passou para Chefe da Central.
                    </p>

                </div>

                <h4 class="uk-margin-left uk-heading-bullet uk-text-bold uk-text-primary">Avaria de Grandes Proporções na Central da SONEFE (Maio De 1961)
                </h4>
                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Em Setembro de 1960, a SONEFE propõe ao Governo, tendo sido autorizada um mês depois, a ligação em paralelo dos dois grupos turbo alternadores nas horas de ponta, das 6 horas as 22 horas. O paralelo foi sendo feito, porém, na noite de 10 de Maio ocorreu um grave acidente. Griparam as chumaceiras de impulso e apoio em ambas turbinas da central e a interrupção da produção durou vários meses. A solução foi a Central da 24 de Julho. 
                </p>
                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Tiveram de voltar a devolver os clientes que estavam na Nova Rede para a corrente contínua, reconstruir linhas que haviam sido desactivadas, entre outros constrangimentos. Aquele processo gerou uma série de acusações entre a SONEFE, SMAE e a SEREL. Para mitigar o problema, o SMAE adquiriu um grande número de pequenos geradores, montou-os na Central e foi reforçando o fornecimento de corrente eléctrica, de tal modo que quando foi restabelecido o funcionamento normal do sistema, teve que vender alguns destes. Neste âmbito, por exemplo, a Comissão Municipal da Manhiça adquiriu dois geradores Deutz a 412.000 Escudos, que teriam de pagar em 05 anos, o Comando Militar adquiriu três, que lhes custaram 100 Escudos cada, entre outras instituições, pois eram tantos geradores que SMAE pretendia apenas se desembaraçar deles.
                </p>
                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A avaria da Central obrigou a Direcção de Fiscalização de Instalações Eléctricas dos CTT a solicitar esclarecimentos detalhados acerca do ocorrido e o SMAE, embora sem acusar diretamente, deu a entender de que a culpa era da SONEFE que não tinha seguido os procedimentos acordados para situações de anormalidade no sistema.
                </p>
            </div>

        </div>

        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Central Termoeléctrica de
            Munhava na Beira</h4>
        <div class="uk-margin-right">
            <div class="uk-text-center" uk-grid>
                <div class="uk-width-expand@m">
                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">As primeiras tentativas para o estabelecimento de iluminação eléctrica na cidade da Beira datam de 1900. Porém, a mesma só começou a ser utilizada, com o estabelecimento duma “Fabrica de Electricidade” pela empresa BELLIARD & SALZONE, em 1916. Posteriormente, no ano seguinte, estes serviços passariam a ser exercidos pela empresa HUBERT DAVIES, de SALISBURY. Foram aqueles Serviços que passaram a produzir e fornecer energia eléctrica a partir de 1 de Janeiro de 1917 por intermédio de uma Central a Vapor cuja potência instalada era de 400KW. Dispunha igualmente de dois grupos de corrente continua (220-440 volts) e os mesmos tinham sido adquiridos na Rodesia do Sul, actual Zimbabwe.
                    </p>
                    
                </div>

                <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
                    <a class="uk-inline" href="{{ asset('assets/images/paginas/central_munhava.jpg') }}" data-caption="Antiga Central Termoeléctrica de
            Munhava na Beira">
                        <img src="{{ asset('assets/images/paginas/central_munhava.jpg') }}" class="uk-border-rounded"
                            width="400px" height="200px" alt="" uk-img></a>
                    <p class="uk-text-primary">Antiga Central Termoeléctrica de
                        Munhava na Beira</p>
                </div>

                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">No entanto, em 1946 o Engenheiro Sérgio Medeiros desenhou o projecto para a Nova Central que veio a ser instalada na Munhava e possuía caldeiras, turbinas a vapor e alternadores cuja potência total era de 2.200 KW. A Central da MUNHAVA começou a funcionar a partir de Novembro de 1948. No início da década de 1950, a Central da MUNHAVA beneficiou-se de uma ampliação, com a aquisição dum grupo electrogéneo Diesel de 625KVA, que viria a entrar em funcionamento em Julho de 1954.
                    </p>
                    


                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Com a inauguração da Hidroelétrica de MAVUZI 1ª fase, em Agosto de 1953, associado a linha de 66KV à Subestação da MUNHAVA, a Central foi gradualmente perdendo o devido valor, de tal modo que a Câmara, em 1960, pretendia vender as máquinas ao Município de Tete que desejava adquirir aqueles equipamento; o assunto levantou polémica nos jornais e, eventualmente, alguém do topo ordenou que não se procedesse daquela forma.
                    </p>
                    <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Com efeito, a 30 de Novembro de 1956 deixava de funcionar todo o conjunto da Central Termo-Eléctrica da Câmara, na MUNHAVA, que passou a unidade de reserva, para se inaugurar a Subestação da SHER, com uma potência instalada de 22x12.500 KVA, situada próximo da Central.
                    </p>
                <div class="uk-width-1-1@m">
                
                <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left uk-text-left">
                    Barragens de Chicamba Real e Central de Mavuzi</h4>
                <div class="uk-margin-right">
                <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A ideia da construcao da barragem de Chicamba nasce praticamente com o Projecto Têxtil que a Sociedade Algodoeira de Portugal (designada, mais tarde, por Sociedade Algodoeira de Fomento Colonial) pretendia realizar em Vila Pery (Chimoio), satisfazendo esta as necessidades de energia eléctrica daquela nova indústria. Foi então fundada em 1946 a <b>Sociedade Hidro-Eléctrica do Revué (SHER)</b>, com Capitais do Estado e de particulares, (Decreto nº 35.744, de 10.07.1946, atribuía-lhe o aproveitamento daquele Rio e seus afluentes, entre as cotas de 100 e 700 mts.), tendo-se iniciado imediatamente a construção do «Açude das Quedas» e da Central do MAVUZI. 
                            </p>

                            
                    <div class="uk-text-center" uk-grid>
                        <div class="uk-width-expand@m">
                            
                            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Este açude, que viria a estar concluído em 1953, tem 8 metros de altura média e 230 metros de comprimento, donde «sai um túnel em cimento armado, com 2.000 metros de comprimento que atravessa um pequeno monte, sendo a água levada por meio de tubagem para um penhasco que domina a central eléctrica, de onde cai então de uma altura de cerca de 195 metros até às turbinas. As turbinas têm uma capacidade de produção anual de 150.000.000 kwh. O potencial das turbinas geradoras era, na sua primeira fase, de 14.000 hp, na última fase de 56.000 hp.
                            </p>
                            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A segunda fase dos trabalhos, passou pela construção de uma nova barragem, numa das gargantas do Revué (CHICAMBA REAL), a partir dos Projectos elaborados pelo Gabinete de Estudos da Hidro-Eléctrica do ZÊZERE, e pela ampliação da Central do MAVUZI, com a instalação de 3 novos grupos turbo-geradores de 12MW cada um. O desenho básico da nova barragem é, essencialmente, um delgado arco em abóboda de dupla curvatura, com o comprimento de 814 pés e 246 de altura em relação aos fundamentos, tendo a capacidade de reter dois milhões de m³ de água. Uma Central com grupos de turbinas de 23.000 cavalos, podia fornecer uma saída total de 36 MW. Devido à depressão do terreno construiu-se uma barragem menor como complemento.
                            </p>

                            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">De acordo com o Decreto 39.237 (6.06.1953), que lhe atribuía o estabelecimento e a exploração de Subestações e de Linhas de Transportes de Energia, a Central ligou-se imediatamente a Vila Pery, logo após a sua construção, e Cidade da Beira, com a construção da Linha de transporte para essa Cidade.
                            </p>

                            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Em 20 de Junho de 1959 os dois importantes empreendimentos foram inaugurados, tomando a barragem da CHICAMBA Real o nome de OLIVEIRA SALAZAR e a Central do MAVUZI de MARCELLO CAETANO. 
                            </p>

                            
                        <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Em 1964 foi aberto um concurso para a construção da Central e Subestação da Chicamba. Pensava-se ainda na construção de uma terceira barragem, entre as duas primeiras, no local de TZATA, podendo o Sistema MAVUZI-CHICAMBA-TZATA fornecer energia na ordem de dois milhões de kwatts hora, tendo sido apresentado ao Ministério do Ultramar, para aprovação, um plano geral de aproveitamento da bacia do Revué (1959). 
                            </p>

                             <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Após a independência do país, um maior apoio foi dado à electrificação do campo, à reconstrução e à modernização da Central de MAVUZI (no distrito de Chimoio) e a elaboração, em detalhe, do projecto de interligação entre os sistemas produtores da HCB/SHER. 
                            </p>

<p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">No que respeita à electrificação rural, este programa começou a ser implementado em 1979, com a extensão de linhas e a definição de eixos na zona de Sussundenga (uma das regiões com boas condições ecológicas para o desenvolvimento da agricultura).
                            </p>

                            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Uma das obras novas mais importantes executadas neste período, foi o abastecimento às minas de Mavita. Essa realização implicou a construção de uma subestação de 110/33KV na Central de MAVUZI, de uma linha com aproximadamente 48 quilómetros que funciona à tensão de 33KV e do centro de recepção nas próprias minas de MAVITA. Porém, um ataque militar dos rodesianos, em 13 de Maio de 1980, veio afectar o programa de trabalhos elaborado. O ataque provocou a destruição quase total de toda a construção civil, sobretudo as paredes de cerca de 30 metros de altura, algumas fundações do equipamento, além de um grupo de cinco geradores, três dos quais de 17,5MVA e dois de 6,2MVA, entre outros estragos no equipamento principal daquela Central. 
                            </p>

                            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">A Central de MAVUZI viria novamente a reiniciar as actividades no dia 1 de Outubro de 1980, tendo estado paralisada cerca de cinco meses. No entanto, os trabalhos de reconstrução total da barragem do MAVUZI viria a ocorrer cerca de dez anos mais tarde, tendo-se iniciado as obras com fundos da ELECTRICIDADE DE MOÇAMBIQUE e da França.  
                            </p>

                            <p class="uk-text uk-margin-left uk-margin-small-top  uk-text-justify">Em Outubro de 2012, a Agência Francesa de Desenvolvimento (AFD), desembolsou 50 milhões de euros para financiar a reabilitação das Centrais Hidroeléctricas de MAVUZI e CHICAMBA. Com a reposição daquelas infra-estruturas, a capacidade de produção de electricidade seria adicionada em 50%, passando MAVUZI a produzir 52 MW e a CHICAMBA 38 MW. As obras iniciaram-se em finais de Outubro de 2013, compreendendo a substituição dos grupos geradores, reabilitação das comportas e do painel de controlo, sendo executadas pelo consórcio Franco-Norueguês CREDELEC e HIDROKARST RAIN POWER, estando as mesmas orçadas em 125 milhões de dólares norte-americanos, financiadas pelo governo de Moçambique, Suécia, França e Noruega. As obras das centrais eléctricas de Chicamba e de Mavuzi viriam a ser formalmente entregues à Electricidade de Moçambique, após cerca de três anos de obras de reabilitação, em Fevereiro de 2017.
                            </p>

                        </div>

                        <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">

                        
                            <a class="uk-inline uk-margin-top"
                                href="{{ asset('assets/images/paginas/construcao_barragem_mavuzi_2.jpeg') }}"
                                data-caption="Construção da central Mavuzi - 23-11-1957">
                                <img src="{{ asset('assets/images/paginas/construcao_barragem_mavuzi_2.jpeg') }}"
                                    class="uk-border-rounded" width="400px" height="150px" alt="" uk-img></a>
                            <p>Construção da central Mavuzi - 23-11-1957</p>


                            <a class="uk-inline"
                                href="{{ asset('assets/images/paginas/barragens_vhicamba__mavuzi02.png') }}"
                                data-caption="Fonte: Plano de Negócio da EDM 2020 – 2024">
                                <img src="{{ asset('assets/images/paginas/barragens_vhicamba__mavuzi02.png') }}"
                                    class="uk-border-rounded" width="500px" height="250px" alt="" uk-img></a>
                            <p>Central de Mavuzi com capacidade de 50 MW</p>

                          
                            <a class="uk-inline uk-margin-top"
                                href="{{ asset('assets/images/paginas/construcao_barragem_chicamba.jpeg') }}"
                                data-caption="Construção da barragem de Chicamba e respectiva central ">
                                <img src="{{ asset('assets/images/paginas/construcao_barragem_chicamba.jpeg') }}"
                                    class="uk-border-rounded" width="500px" height="250px" alt="" uk-img></a>
                            <p>Construção da barragem de Chicamba e respectiva central </p>

                              <a class="uk-inline uk-margin-top"
                                href="{{ asset('assets/images/paginas/barragem_contruida_chicamba.jpeg') }}"
                                data-caption="Barragem de Chicamba – 1997 ">
                                <img src="{{ asset('assets/images/paginas/barragem_contruida_chicamba.jpeg') }}"
                                    class="uk-border-rounded" width="500px" height="250px" alt="" uk-img></a>
                            <p>Barragem de Chicamba – 1997 </p>

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    
    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left uk-margin-remove-bottom uk-margin-top">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.comercial') }}">História de comercialização</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.transporte') }}">História de transporte</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.distribuicao') }}">História de
                    distribuição</a></li>
        </ul>
    </div>
</div>
@endsection
