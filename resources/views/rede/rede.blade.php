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
                Quando a EDM foi criada, em 27 de Agosto de 1977, um dos primeiros trabalhos que desenvolveu foi realizar um diagnóstico da situação realística no terreno onde foi possível perceber que a maquinaria que acabava de herdar era de diferentes marcas e fabricantes, grande parte delas sem sobressalentes para dar seguimento as actividades. Percebeu ainda de que na altura o País havia enfrentado a saída massiva de técnicos que suportavam grande parte das concessionárias. Isto é, as centrais existentes na época não tinham mecânicos e técnicos a altura de dar suporte às mesmas. Pelo que, algumas das acções desencadeadas imediatamente pela EDM-EE para mitigar esta contrariedade, destacamos:
            </p>

            <ul class="uk-text uk-margin-large-left uk-margin-remove-top uk-text-justify">
                    <li class="uk-margin-small">Potenciar as Áreas Operacionais que dispunham de Centrais Eléctricas com novos grupos geradores e adquirir peças sobressalentes de forma a garantir o fornecimento regular de energia eléctrica as Cidades onde estavam inseridas;</li>
                    <li class="uk-margin-small">Criar Centros de Formação onde foram promovidos cursos, de curta e longa duração, de Operação de Centrais, de Mecânica, de Electricidade, de Técnicas Comerciais, de Gestão de Recursos Humanos, Logística e Gestão de Armazéns.  </li>
                    <li class="uk-margin-small uk-text-italic">Como exemplo, em 1989, a formação de Mecânicos e Electricistas resultou que as manutenções básicas dos Geradores e montagem de Linhas de Distribuição e PTS, bem como a manutenção básica dos Postos de Transformação (PTs) fossem feitas pelos técnicos das respectivas Áreas Operacionais, cabendo a intervenção central nos casos de introdução de novo grupos e reparações de grupos em cadeia.</li>

                    <li class="uk-margin-small">Com a conclusão, em Maio de 1975, da Construção da Central Central Hidroelectrica de Cahora Bassa, desenvolveu trabalhos de identificação de parcerias para conclusão da construção da respectiva Subestação, que viria a ser terminada em 1978, permitido, deste modo, a implementação do Projecto de Transporte de Energia produzida na Barragem de Cahora Bassa para Electrificação do País. </li>
        </ul>


             <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
                    <a class="uk-inline" href="{{ secure_asset('assets/images/paginas/foto_formacao_40_parte_1.jpeg') }}" data-caption="Aulas práticas do curso de electricidade no Centro de Formação da EDM  ">
                        <img src="{{ secure_asset('assets/images/paginas/foto_formacao_40_parte_1.jpeg') }}" class="uk-border-rounded"
                            width="500px" height="250px" alt="" uk-img></a>
                    <p class="uk-text-primary">Aulas práticas do curso de electricidade no Centro de Formação da EDM </p>
                </div>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                Em 1977, 65% da energia consumida no País provinha da SONEFE, em Maputo, e SHER, em Manica. Os restantes 35% provinham de setecentas Centrais Privadas, onde 500 delas tinham uma capacidade inferior a 50KVA; sendo que a Cidade de Maputo é que consumia mais de metade da energia produzida, seguida de Manica e Sofala. Tanto nestas Cidades como noutras Cidades, o consumo doméstico era também restrito às zonas geralmente referidas como zona ‘cimento’ – i.e. as áreas ocupadas essencialmente pela população branca.
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                Segundo dados com referencia a 31 de Dezembro de 2019, a Rede da EDM conta hoje com aproximadamente 245,2 MW de Capacidade Instalada e 192,3 MW de Capacidade Disponível; 5.6601Km de Rede de Transporte; 43.806Km de Rede de Distribuição com 12.777 Postos de Transformação (PTs); ao Serviço de quase 2.052.802 Milhões de Clientes (34% da população),  em 2020
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                Esta transformação substancial da Rede da EDM deveu-se à integração de outras fontes hídricas e térmicas, quer da empresa, como da HCB e produtores independentes, que possibilitaram a expansão da rede para vários centros urbanos. Contudo, resta ainda integrar o sistema Sul com os sistemas Centro e Norte; reabilitar e expandir a infraestrutura de distribuição existente para garantir redundâncias, reduzir perdas técnicas e melhorar a qualidade da energia fornecida; bem como aumentar a capacidade de produção de modo a dar resposta à crescente demanda de energia eléctrica (Baptista, 2017).
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                A empresa tem em vista uma carteira alargada de investimentos em produção, transporte e distribuição, mas as condições financeiras actuais da EDM e do país não têm sido favoráveis a esse investimento. A empresa continua a depender da ajuda de doadores para a realização de alguns destes investimentos, como é o caso do anúncio de investimento pelo Banco Mundial no valor de USD$150 milhões.&quot
            </p>
            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify uk-width-1-1@m">
                Actualmente, a EDM apresenta-se verticalmente integrada, cobrindo as áreas de <a href="{{  route('rede.show', "geracao") }}">Geração</a>, <a href="{{  route('rede.show', "transporte") }}">Transporte</a>, <a href="{{  route('rede.show', "distribuicao") }}">Distribuição</a> e
                <a href="{{  route('rede.show', "comercial") }}">Comercialização</a> de Energia.
            </p>

        </div>
    </div>
</div>
@endsection
