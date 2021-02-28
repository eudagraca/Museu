@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">

    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('historia.index') }}">História de
                        eletrificação</a></li>

                <li><a href="#">História de comercialização</a></li>
            </ul>
        </div>
        <div uk-grid class="uk-margin-remove-top">
            <div class="uk-width-expand@m uk-width-1-1@m uk-margin-remove">
                <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">História da Comercialização
                </h3>


                <p class="uk-dropcap uk-text uk-text-justify">As actividades comerciais, no tempo dos Serviços
                    Municipalizados de Água e Electricidade (S.M.A.E),no Maputo, começaram
                    por ser uma secção que estava nos Serviços Administrativos, sendo dirigidas pelo Chefe da 2ª
                    Repartição
                    Luiz de Aguiar
                    Barbosa enquanto a secção de consumos era gerida pelo 1º oficial José Augusto de Campos, desde 13 de
                    Setembro de 1948,
                    que na prática era o Sector comercial. Nessa altura o Chefe dos Serviços Administrativos era o Dr.
                    Heitor Nunes
                    Pantaleão. Com a emenda dada ao Regulamento dos SMAE ocorrida em 1954, a secção viria a ser
                    transformada
                    em Serviços e
                    associados com os Serviços Administrativos passando a designar-se Serviços Administrativos e
                    Comerciais,
                    mantendo o Dr.
                    Heitor Nunes como o Chefe dos dois Serviços. Lembremos que existiam os seguintes serviços:</p>
                <ol class="uk-list uk-list-disc uk-list-primary uk-margin-right uk-margin-left" type="a">
                    <li>Serviços de Água</li>
                    <li>Serviços de Electricidade</li>
                    <li>Serviços Administrativos e Comerciais</li>
                    <li>Serviços Auxiliares.</li>
                </ol>
                <p class="uk-text uk-text-justify">A emenda ao Regulamento deu nova redacção, sobretudo no artigo 8º,
                    onde
                    se dizia que a Comissão Administrativa (um órgão
                    com alto pendor decisório nos SMAE) teria um secretário, sem voto que era o Chefe dos Serviços
                    Comerciais. Isto denota
                    claramente o valor que o Comercial ganhava no interior dos SMAE. Todos os Serviços existentes no
                    SMAE
                    eram dirigidos por
                    um Chefe de Serviço, subordinados directamente ao Director de Exploração, não obstante, os serviços
                    de
                    cariz comercial
                    compreendiam dois departamentos e duas secções, sendo dirigidos por um chefe de departamento e de
                    secções:</p>
            </div>

            <div class="uk-width-1-5@m uk-align-center" uk-lightbox="animation: slide">
                <a class="uk-inline" href="{{ secure_asset('assets/images/paginas/contador_pos_pago.png') }}"
                    data-caption="Contador de energia pós-pago">
                    <img src="{{ secure_asset('assets/images/paginas/contador_pos_pago.png') }}" class="uk-border-rounded"
                        width="250px" height="50px" alt="" uk-img></a>
                <p class="uk-text-meta">Contador de energia pós-pago</p>
            </div>
            <div class="uk-width-1-1">
                <ol class="uk-list uk-list-disc uk-list-primary uk-margin-right uk-margin-left" type="a">
                    <li>Secretaria</li>
                    <li>Departamento de Consumo</li>
                    <li>Departamento de Contabilidade</li>
                    <li>Armazéns Gerais.</li>
                </ol>
                <p class="uk-text uk-text-justify">No fundo a reorganização incidiu muito para o Serviço Comercial que
                    era o
                    novo foco e a emenda adoptada procurava
                    induzir agressividade no negócio da indústria de Electricidade. Desta forma, o departamento de
                    Consumo
                    era compreendido
                    pelas secções:</p>
                <ol class="uk-list uk-list-disc uk-list-primary uk-margin-right uk-margin-left" type="a">
                    <li>Leituras</li>
                    <li>Facturacão</li>
                    <li>Propaganda e Vendas.</li>
                </ol>
                <p class="uk-text uk-text-justify">A secção da facturação foi sendo dirigida pelo José Augusto Campos,
                    contudo em princípios de 1948 foi admitida Maria
                    Ricardina Pereira Duraes, aquela que viria a ser o ícone da facturação dos SMAE. As primeiras
                    facturações automatizadas
                    aparecem no período dos SMAE nos anos de 1954, com aquisição de equipamento da firma SPANOS LDA e
                    nos
                    anos subsequentes
                    as facturas eram impressas.</p>

                <p class="uk-text uk-text-justify">Com a criação da EDM o Serviço Comercial passou assegurar, para além
                    da
                    realização de Leituras e cortes mas também a
                    Facturação, Cobrança, Serviços de Atendimento público, Novas Ligações, Vistorias e Fiscalização.
                    Segundo
                    José Manuel
                    Muholove, trabalhador de informática reformado, disse:</p>

                <p class="uk-text uk-margin-left uk-text-italic uk-margin-right uk-text-justify">Quando foi criada a EDM
                    em
                    27 de Agosto de
                    1977, o processo de Facturação era através de Cartões ICR de 80 Colunas,
                    processados pelo IBM S3. <br>
                    <span class="uk-text-italic">"Quando foi criada a EDM em 27 de Agosto de 1977, o processo de
                        Facturação
                        era através de Cartões ICR de 80 Colunas,
                        processados pelo IBM S3."<br>
                        Mais tarde fez-se upgrade para Cartões de 96 Colunas, processados no IBM S70 e nos anos 1992
                        fez- se
                        a migração para um
                        Sistema da Empresa ICL conhecido por Billing System.</span>
                </p>

                <p class="uk-text uk-margin-left uk-text-italic uk-margin-right uk-text-justify">No Billing System,
                    instalado em Maputo em 1992, para além de facturação de consumidores da Cidade de Maputo, eram
                    também
                    facturados consumidores da Matola, Beira, Chimoio, Nampula e Nacala. Os operadores daquelas cidades
                    levavam as Leituras
                    para Maputo para serem introduzidas no Sistema para se facturar. Regressavam para as suas cidades
                    com as
                    facturas para
                    irem cobrar. No mês seguinte, voltavam para Maputo com Leituras e Canhotos das cobranças efectuadas
                    para
                    serem
                    Introduzidos no Sistema, fazer a reconciliação dos valores facturados e cobrados e depois voltar a
                    facturar para o
                    período seguinte.
                </p>

                <p class="uk-text uk-text-justify">Nas restantes Áreas de Distribuição, consideradas na altura de Área
                    de
                    pequena dimensão, inicialmente facturavam
                    manualmente, mas em 1995 foi implementado um Sistema paralelo ao do Billing System, conhecido por
                    Sistema ACCESS, que
                    inicialmente foi instalado nas Áreas Operacionais da Região Sul, começando por Chokwe seguindo para
                    Xai-Xai e mais tarde
                    Inhambane. O Sistema ACESS foi evoluindo gradualmente, de tal sorte que até nos anos de 1997
                    abarcava
                    completamente o
                    Sul de Moçambique e nos anos seguintes devido a capacidade e potencialidade associado ao uso
                    simples,
                    progrediu para
                    Tete, Quelimane, Mocuba e nos anos de 2000 atingiu as Áreas de Pemba e Lichinga e mais tarde Angoche
                    e
                    Cuamba. A gestão
                    do Sistema ACCESS era feita pelo técnico do OINF, Analista em Sistemas informáticos, ora perecido,
                    Dr.
                    Roberto Carlos
                    Pereira.
                </p>

                <p class="uk-text uk-text-justify">Tendo em vista a redução de perdas e melhorias de serviços de
                    atendimento
                    ao cliente, foram introduzidos os Projectos de
                    NOVA IMAGEM e Sistema de Pré-pagamento de Electricidade vulgo CREDELEC.
                </p>

                <p class="uk-text uk-text-justify">Importa destacar que com a implementação do Sistema CREDELEC em 1994,
                    a
                    EDM reduziu os serviços de leituras e
                    distribuição de facturas, facturação por estimativas, reclamações dos clientes pela facturação
                    indevida
                    devido a falta
                    de leituras, entre outras vantagens.
                </p>
            </div>

        </div>
    </div>

    <div class="uk-margin-top">
        <h4 class="uk-heading-bullet uk-text-primary uk-text-bold">Sistema de Pré-pagamento de Electricidade –
            CREDELEC</h4>


        <p class="uk-dropcap uk-text uk-text-justify">Importa destacar que com a implementação do Sistema CREDELEC
            em 1994, a EDM reduziu os serviços de leituras e
            distribuição de facturas, facturação por estimativas, reclamações dos clientes pela facturação indevida
            devido a falta
            de leituras, entre outras vantagens.</p>

        <p class="uk-text uk-text-justify">Na época, a EDM encontrava-se numa situação financeira difícil devido a
            vários factores externos e internos à empresa.
            Externamente, o país encontrava-se em grandes dificuldades económicas e financeiras, em resultado da
            conjugação de
            diversos factores: os legados do colonialismo e do processo de descolonização; as contenções
            geopolíticas da época (e.g.
            Guerra Fria e crise do petróleo); os legados da guerra civil (1977-1992); as dificuldades encontradas
            pelo Governo em
            implementar as suas estratégias políticas e económicas; e até mesmo intempéries naturais (e.g. ciclones
            e cheias). Estes
            factores tiveram diferentes impactos nas actividades da EDM. Internamente, a empresa debatia-se com
            muitas outras
            questões: falta de pessoal qualificado; reduzido aprovisionamento de material; dificuldade na
            estandardização das
            centrais e rede herdada das várias entidades que deram origem à EDM; elevado índice de perdas
            não-técnicas e de clientes
            com dívida prolongada; tarifas de energia desactualizadas; e uma situação financeira muito delicada que
            impedia
            investimentos avultados no terreno (The World Bank 1987).</p>

        <p class="uk-text uk-text-justify">Assim, a opção por introduzir o sistema pré-pago visava dar solução a
            algumas destas situações, nomeadamente reduzir
            perdas não-técnicas e recuperar custos, com vista a alcançar a sustentabilidade financeira da empresa.
            Dados relativos a
            1994, indicam que o nível de perdas (técnicas e não-técnicas) chegava a quase 34% da energia
            disponibilizada para
            consumo; a este valor acrescentavam-se problemas de perdas de receitas por via de falhas na facturação,
            elevando o nível
            das perdas para cerca de 40% (The World Bank 1996). As perdas não-técnicas (por roubo de energia) ou
            falhas na
            facturação (não pagamento ou atrasos no pagamento) pareciam ser transversais a toda a população e
            arrastavam-se há
            largos anos. Dados relativos à década de 1980 indicavam que 60% das dívidas eram da responsabilidade de
            instituições
            públicas e governamentais (The World Bank 1987). A situação agravava-se com o facto de a EDM necessitar
            de comprar
            energia à Eskom para fornecer a região Sul do país, dado que a Hidroeléctrica de Cahora Bassa (HCB) se
            encontrava fora
            de serviço em resultado dos ataques sofridos durante a guerra civil. Em resultado das taxas de inflação
            e de câmbio
            desfavoráveis que se fazia sentir naquela altura, os custos de aquisição eram pesados para a EDM. A
            empresa tinha
            dificuldade em ajustar as tarifas, uma vez que quaisquer modificações requeriam a autorização do Governo
            (The World Bank
            1996). Os doadores, tais como o Banco Mundial e a Noruega, reconheciam o desejo da EDM em expandir o
            acesso à energia
            para clientes de baixa renda, mas ao mesmo tempo aconselhavam mudanças no sistema tarifário capazes de
            fazer face aos
            custos de operação e satisfação da demanda futura (The World Bank 1996; O’Keefe e Torp 1990). Na
            impossibilidade destas
            alterações tarifárias, a empresa encontrava-se numa situação financeira difícil, sem cash-flow para
            financiar
            investimentos em infraestruturas e com dificuldades na cobertura do serviço da dívida (ibid.).</p>

    </div>
    <p class="uk-text uk-text-justify">A EDM introduziu contadores pré-pagos pela primeira vez em
        Novembro de 1995 com um projecto-piloto na cidade da Matola.
        Foram instalados cerca de 500 contadores a clientes com dívida prolongada na rede de Baixa Tensão (BT). Numa
        segunda
        fase do projecto piloto, já em 1996, instalaram-se cerca de 600 contadores pré-pagos no bairro do Jardim, em
        Maputo. A
        implementação de contadores pré-pagos foi subsequentemente expandida em Maputo (primeiramente nos bairros da
        Maxaquene e
        Mahotas, depois na cidade de cimento, chegando a um total de 5.000 contadores) e para as cidades de Nampula
        e Nacala.
        Esta expansão foi parcialmente financiada pelo projecto ‘Urban Household Energy Project’ (UHEP, 1990-1998)
        liderado pelo
        Banco Mundial com o apoio do Fundo Nórdico de Desenvolvimento (NDF), do Banco Árabe para o Desenvolvimento
        Económico de
        África (BADEA), a Agência Sueca para o Desenvolvimento Internacional (SIDA) e as contribuições do Governo de
        Moçambique
        e da EDM (The World Bank 1999, 2004). A expansão do sistema a outros centros urbanos foi possível após a
        introdução
        legal da tarifa de pré-pagamento pelo Decreto n.º 59/99, de 21 de Setembro. Inicialmente, a tarifa de
        pré-pagamento
        variava de acordo com a tensão fornecida ao cliente, mas a situação foi uniformizada para uma tarifa única
        com o Decreto
        n.º 29/2003, de 23 de Junho. Estes esforços inseriam-se na óptica porque a EDM procurava levar a cabo a
        redução de
        perdas não-técnicas no âmbito do “Projecto Nova Imagem,” que iniciou depois da EDM passar de empresa estatal
        para
        empresa pública (Julho de 1995).</p>

    <p class="uk-text uk-text-justify ">A actual estratégia da EDM parece indicar que o sistema
        pré-pago é agora o método a adoptar por defeito para as ligações
        em Baixa Tensão (excluindo Grandes Consumidores BT). Todavia, esta não seria a ideia no início. A decisão de
        prosseguir
        com a universalização do Credelec parece ter surgido de forma orgânica e pragmática em resultado da
        experiência no
        terreno. Em particular, os técnicos da EDM aperceberam-se rapidamente que o controlo da facturação seria
        muito mais
        eficiente se todos os residentes numa determinada área utilizassem o pré-pago. Uma das consequências muito
        positivas
        desta estratégia de universalização do Credelec acaba por ser o consenso (ou, pelo menos, a não existência
        de protesto)
        relativamente a este método de pagamento da energia. Situação bem diferente regista-se na vizinha África do
        Sul, onde o
        sistema pré-pago tem sido objecto de protestos intensos por parte da população por ser utilizado de forma
        discriminatória, para ligar principalmente as populações de baixa renda, e favorecendo as populações mais
        ricas. A
        estratégia da EDM de tentar eliminar todos os contadores pós-pagos para clientes residenciais contribuirá
        certamente
        para manter a legitimidade do sistema e evitar a percepção popular de discriminação ou favorecimento
        indevidos.</p>

    <p class="uk-text uk-text-justify">Em 2004, a empresa adopta o nome comercial ‘Credelec’ para o
        sistema pré-pago (EDM 2005), ano em que o número de
        clientes com pré-pago ultrapassa os 86.5 mil, correspondendo a cerca de 30% do número total de clientes (EDM
        2014). A
        expansão do Credelec para as restantes áreas do país inicia-se em 2005, chegando a todas as sedes de
        distrito em 2010
        (Buque 2011). Em 2015, o número de clientes com pré-pago ascendia a quase 1.3 milhões, cerca de 88% dos
        clientes da EDM
        . Na Cidade de Maputo, o valor em 2015 era mais elevado, ascendendo a 95% dos clientes (quase 265 mil
        contadores
        pré-pagos). O número de novas ligações registou uma desaceleração em 2015 e 2016, dado que a EDM não tinha
        disponíveis
        novos contadores pré-pagos desde o fim de 2015.</p>

    <p class="uk-text uk-text-justify">A introdução do sistema pré-pago requereu uma significante
        reestruturação de vários sectores da EDM, em particular na
        área comercial e técnica, dada a informatização de processos e a alteração de várias práticas no terreno.
        Destaque-se
        aqui a implementação do sistema Credelec Online, primeiro na Cidade de Maputo, em Julho de 2012, seguido da
        introdução
        faseada de compras através de canais digitais a partir de Novembro de 2013 (mobile wallet, phone banking,
        ATM, online) e
        a generalização a todo o país em Setembro de 2014. O sistema Online veio facilitar a aquisição de energia
        pelos clientes
        em qualquer posto de venda e em qualquer parte do país (desde que abrangidos pelo Credelec Online),
        eliminando problemas
        anteriores de dupla cobrança de taxas e redução de filas de espera nos postos de venda. Embora a transição
        para o
        sistema pré-pago tenha trazido muitos benefícios para a EDM e para os clientes, outros problemas foram
        criados pela
        natureza específica da tecnologia do pré-pago e do seu funcionamento na prática.
    </p>

</div>
@endsection