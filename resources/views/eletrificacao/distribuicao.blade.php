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
            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">História da Distribuição em Moçambique
            </h3>

            <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">A Distribuição de energia tem uma relação estreita com a Geração. Em Maputo, na época da Delagoa Bay, nos anos de 1903 a 1946 e subsequentemente com os S.M.A.E, de 1947-1963, a distribuição era feita a partir de circuitos que estavam montados em vários locais da Cidade, que serviam de uma espécie de Postos de Transformação, quer dizer, a energia gerada era lançada para a Rede em 500 Volts, através dos cabos vulcanizados de cobre até aos circuitos onde era reduzida para os níveis aceitáveis e, dali seguia ao consumidor. 
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Eram utilizados para distribuição de energia linhas aéreas, com recurso aos postes de aço, copos de porcelana fixos por ferragens e condutores de cobre. Esta tecnologia permaneceu em Lourenço Marques até altura que entrou em voga a Nova Rede de Distribuição, que fez a mudança da corrente contínua para alternada e consequentemente a Rede aérea para subterrânea, facto que condicionou a montagem dos Postos de Transformação em vários locais da Cidade para permitir o acesso da mesma.</p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Para alcançar os objetivos, este trabalho foi antecedido por um levantamento exaustivo, em 1956, da potência das instalações por uma equipa de Electricistas de várias instituições a cargo do SMAE, a destacar, CFM, Câmara Municipal, Hotel Polana, Companhia Industrial da Matola entre outras. Com aqueles resultados, foi possível prever as potências dos transformadores que teriam de ser montados ao longo da execução das obras na cidade.
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">O S.M.AE, sabendo das fontes oficiais da época, que uma nova Central Térmica estava sendo erguida e sendo concessionários da distribuição, procedeu um estudo das necessidades para a montagem de uma Nova Rede e logo a seguir lançou o concurso em 1952. No entanto, descobriu-se que nos termos de referência não haviam contemplado cálculos exaustivos e projecções do crescimento urbanístico a curto, médio e longo prazo, pelo facto, o concurso foi anulado. Quando foi relançado em 1954, argumentaram da seguinte forma:</p>

            <p class="uk-text uk-text-italic uk-margin-left uk-margin-right uk-text-justify uk-margin-small-top">
                &quot;Porém, no concurso agora em andamento foi introduzido algumas importantes alterações para corresponder ao enorme desenvolvimento que a cidade, entretanto teve e aos condicionamentos que o Plano de Urbanização veio impor. </p>
            <p class="uk-text uk-text-italic uk-margin-left uk-margin-right uk-text-justify uk-margin-small-top">
                Prevendo-se uma redução sensível no peso dos cabos eléctricos, estabeleceu-se que a Rede passasse a ser emalhada na Baixa Tensão e que o respectivo projecto fosse elaborado pelo respectivo concorrente a métodos de cálculo mais recentes e a análise experimental sobre o modelo eléctrico reduzido da Rede.</p>
            <p class="uk-text uk-text-italic uk-margin-left uk-margin-right uk-text-justify uk-margin-small-top">
                Incluiu-se na empreitada o equipamento para iluminação pública e a montagem de todos os materiais e construção dos edifícios para as Subestações, postos de Transformação, etc. Impuseram-se medidas para permitir ampliação da Rede para as zonas de expansão indígenas e da indústria pesada etc. </p>
            <p class="uk-text uk-text-italic uk-margin-left uk-margin-right uk-text-justify uk-margin-small-top">
                Como a natureza característica, dimensionamento dos materiais a fornecer dependem do projecto a apresentar e o concurso ainda não está resolvido, fica-se impossibilitado de avaliar correctamente o custo da empreitada”. (Acta 07/54, de 18 de Fevereiro).
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Em 1954, a Câmara autorizou o relançamento do concurso com a prerrogativa de que o projecto da Rede fosse efectuado pelo concorrente, com base nos cálculos recentes etc. Para suprir as despesas da empreitada, os SMAE enveredaram pelo crédito bancário no Banco Nacional Ultramarino no valor de 120.000 contos. O processo levou mais dois anos antes da adjudicação das obras, apenas em 1956 era homologado e declarado vencedor a firma Justo Meneses (SEREL). Contudo, foi um concurso recheado de controvérsias e contestações por parte dos S.M.A.E e a tutela (Câmara) e outros organismos relevantes, quer em termos de quem devia ganhar o concurso quer na pressão para os pagamentos a favor do empreiteiro etc.
            </p>
        </div>
        <div class="uk-width-1-5@m uk-align-center" uk-lightbox="animation: slide">
            <a class="uk-inline" href="{{ secure_asset('('assets/images/paginas/distribuicao.png') }}"
                data-caption="Rede de distribuição de energia em Cuamba">
                <img src="{{ secure_asset('('assets/images/paginas/distribuicao.png') }}" class="uk-border-rounded"
                    width="250px" height="50px" alt="" uk-img></a>
            <p class="uk-text-meta">Rede de distribuição de energia em Cuamba</p>


            <a class="uk-inline" href="{{ secure_asset('('assets/images/paginas/distribuicao_poste.jpeg') }}"
                data-caption="Obras de reabilitação da rede primária">
                <img src="{{ secure_asset('('assets/images/paginas/distribuicao_poste.jpeg') }}" class="uk-border-rounded"
                    width="250px" height="50px" alt="" uk-img></a>
            <p class="uk-text-meta">Obras de reabilitação da rede primária</p>

            <a class="uk-inline" href="{{ secure_asset('('assets/images/paginas/posto_transformacao.jpeg') }}"
                data-caption="Rede de distribuição de energia em Cuamba">
                <img src="{{ secure_asset('('assets/images/paginas/posto_transformacao.jpeg') }}"
                    class="uk-border-rounded" width="250px" height="50px" alt="" uk-img></a>
            <p class="uk-text-meta">Posto de transformção rual 33/0.4 kV</p>

            <a class="uk-inline" href="{{ secure_asset('('assets/images/paginas/posto_transformacao01.jpeg') }}"
                data-caption="Posto de transformção rual 33/0.4 kV">
                <img src="{{ secure_asset('('assets/images/paginas/posto_transformacao01.jpeg') }}"
                    class="uk-border-rounded" width="250px" height="50px" alt="" uk-img></a>
            <p class="uk-text-meta">Posto de transformção rual 33/0.4 kV</p>
        </div>

        <p class="uk-text uk-margin-left uk-margin-small-topuk-margin-right uk-text-justify uk-margin-small-top">O primeiro ano das obras foi dedicado essencialmente para aquisição dos materiais e os restantes a execução das obras. No final das obras da Rede de Distribuição da Cidade de Lourenço Marques foram removidos todos os postes, circuitos que haviam servido de interface para alimentar os consumidores ao longo do tempo, de tal modo que a cidade alcançou o estatuto das cidades modernas em que os condutores ficam embutidos via subterrânea.</p>

        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">No entanto, a Rede Aérea permaneceu nos bairros suburbanos de Lourenço Marques, inclusive foram desenhados projectos de Melhoramento do Caniço, onde foram construídas algumas Linhas nos Bairros de Aeroporto, Xipamanine, Maxaquene e Sofil (Luis Cabral). A concepção do plano geral de electrificação destes Bairros foi do Eng. Fernando Faria Lopes e teve como técnicos da execução, Eduardo Sebastião Paixão Correia., J. Corte Real e F. Moura. No final da execução do Projecto, o SMAE decidiu distribuir a verba restante pela equipa do projecto, com excepção do Eng Fernando Faria Lopes que recusou valores que variavam entre 40.000 escudos a 10.000$00, em 1972. (Acta 45/72, de 10 de Novembro).</p>

        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Com a EDM, os condutores de cobre nu que abundavam nos bairros passaram a ser substituídos pelo cabo torçado e uso de ligadores ao invés dos copos, facto que alterou positivamente a operação das redes de distribuição. 
        </p>

        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">A distribuição evoluiu drasticamente com o maior acesso dos materiais, disponibilização de muitos PTs numa dada zona e maior proximidade conduzem para redução de perdas, contrariamente ao que acontecia no passado onde uma vila dispunha de um ou dois PTs com 3.000 clientes ou mais. Na prática, foi o culminar de esforços conjugados em que o Transporte trouxe para muito perto as subestações e consequentemente, as linhas de distribuição não precisam percorrer muitos quilómetros da fonte ao PT que alimenta os consumidores.</p>

        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Cidades como Beira, Nampula seguiram o padrão da rede de distribuição subterrânea enquanto cidades com uma dimensão inferior como Pemba, Lichinga e outras, a rede está acessível ao olhar de qualquer um, como resultado das heranças do SMAE.</p>
    </div>
</div>
@endsection
