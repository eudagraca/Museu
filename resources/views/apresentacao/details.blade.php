@extends('layouts.single-app')

@section('content')

<div class="uk-container uk-margin-large-bottom uk-margin-large-top">

    <div uk-grid >
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal"
                        href="{{ route('museu.show', 'details') }}">Museu</a></li>
                <li><a href="#">Apresentação da EDM</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove" id="apresentacao">
            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Apresentação da EDM</h3>

            <p class="uk-text uk-margin-left uk-margin-large-top uk-margin-right uk-text-justify">
                Em 27 de Agosto de 1977, através do Decreto Lei nº 38/77 de 27 de Agosto, foi criada a Electricidade de
                Moçambique,
                Empresa Estatal, (EDM-E.E), que resultou da integração de vários Serviços Municipais de Água e
                Electricidade (SMAE),
                Sociedade Hidro-Eléctrica do Revué (SHER), Sociedade Nacional de Estudos e Financiamentos de
                Empreendimentos
                Ultramarinos (SONEFE), Serviços Municipalizados de Electricidade (SME) e Serviços Autónomos de
                Electricidade (SAE)..
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">O sector de energia é considerado
                prioritário
                a nível do Governo, que está empenhado em levar a cabo medidas para atrair
                o investimento privado nesta área e promover o desenvolvimento da rede nacional de energia.</p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Em Outubro de 1997, acompanhando as
                tendências
                internacionais que apontavam para uma maior liberalização dos mercados, é
                promulgado a Lei de Electricidade (Lei 21/97 de 1 de Outubro) que altera alguns princípios presentes no
                quadro nacional
                e aprova a regulamentação específica que estabelece a Política Energética (resolução 05/98 de 3 de
                Março),
                que confere à
                EDM o papel de Gestor da Rede Nacional de Transporte de Energia Eléctrica e o Regulamento da Lei de
                Electricidade que
                define as competências e os procedimentos relativos à atribuição de concessões de Produção, Transporte,
                Distribuição e
                Comercialização de Energia Eléctrica.</p>

            <div class="uk-margin-left uk-margin-right">
                <h4>Objecto do Negócio da EDM</h4>
                <ul class="uk-list uk-list-disc uk-list-primary uk-margin-right uk-margin-left">
                    <li class="uk-text-black">Estabelecimento e exploração dos meios de produção próprios e dos que
                        fazem
                        parte do património do Estado colocado à
                        disposição da EDM, afectos à produção de energia eléctrica</li>
                    <li class="uk-text-black">Transformação, conversão, transporte, distribuição e comercialização de
                        energia eléctrica no território nacional e
                        fora dele;</li>
                    <li class="uk-text-black">Gestão e operação da rede nacional de transporte de energia eléctrica, na
                        qualidade de Gestor de Rede Nacional de
                        Transporte (RNT) e</li>
                    <li class="uk-text-black">Realização de trabalhos de instalação, de reparação e de renovação de bens
                        afectos a exploração do serviço público.</li>
                </ul>
            </div>
        </div>

        <hr>

        <div class="uk-width-1-1@m">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary">Missão da EDM</h4>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                Produzir, transportar, distribuir e comercializar energia eléctrica de boa qualidade, de forma
                sustentável,
                para
                iluminar e potenciar a industrialização do país.
            </p>
        </div>

        <div class="uk-width-1-1@m">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary">Visão</h4>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                Transformar a EDM numa Utilidade Inteligente e Sustentável, que dá acesso à energia eléctrica de
                qualidade a
                cada
                moçambicano e exerce liderança no Mercado Regional.
            </p>
        </div>

        <div class="uk-width-1-1@m">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary">Valores</h4>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                Integridade, Transparência, Igualdade, Competitividade e Espírito de Equipa.
            </p>
        </div>
        <hr>

        <div class="uk-width-1-1@m" id="governanca">
            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Modelo de governança corporativa e de gestão
            </h3>

            <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
                O processo de nomeação e eleição dos membros dos órgãos sociais da EDM, em particular do Conselho de
                Administração,
                segue os procedimentos estabelecidos no Regulamento da Lei do Sector Empresarial do Estado (LSEE)
                (Decreto
                no 10/2019 de
                26 de Fevereiro).
            </p>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">A EDM tem como o Core Business a
                Produção, Transporte, Distribuição e Comercialização de Energia Eléctrica e para a
                prossecução da sua actividade, estabeleceu um modelo de gestão que compreende três níveis apresentados
                na
                figura abaixo:</p>


            <div class="uk-grid">
                <div class="uk-width-1-3@m uk-align-center">
                    <img data-src="{{ secure_asset('assets/images/modelo_de_governanca.png') }}"
                        class="uk-border-rounded"
                        data-srcset="{{ secure_asset('assets/images/modelo_de_governanca.png') }}"
                        sizes="(min-width: 350px) 450px, 100vw" width="350px" height="233px" alt="" uk-img>
                </div>

                <div class="uk-width-expand">
                    <table class="uk-table uk-table-divider">
                        <thead>
                            <tr>
                                <th>Nível de Governança</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uk-text-black uk-text-bold">Estratégico:</td>
                                <td class="uk-text-black uk-text-justify">Compreende o Presidente do Conselho de
                                    Administração (executivo) e 6 (seis)
                                    Administradores Executivos, responsáveis
                                    pela liderança dos seguintes pelouros:
                                    <ol>
                                        <li>Distribuição, Comercial e Informática,</li>
                                        <li>Produção e Transporte</li>
                                        <li>Desenvolvimento de Negócios</li>
                                        <li>Finanças</li>
                                        <li>Electrificação e</li>
                                        <li>Recursos Humanos.</li>
                                    </ol>
                                    O
                                    Conselho de Administração é mandatado e presta contas à Assembleia Geral, nos termos
                                    do
                                    Decreto nº 10/2019, de 26 de
                                    Fevereiro.
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-text-black uk-text-bold">Gestão:</td>
                                <td class="uk-text-black uk-text-justify">Compreende vinte e seis (26) Direcções
                                    Centrais,
                                    cujo principal mandato é de dar suporte às Divisões Operacionais no que
                                    concerne à implementação de políticas, normas e procedimentos que visam regular a
                                    actividade da empresa nos diversos
                                    segmentos de especialidade e/ou actuação.
                                </td>
                            </tr>
                            <tr>
                                <td class="uk-text-black uk-text-bold">Operacional</td>
                                <td class="uk-text-black uk-text-justify">Este nível está subdividido em Serviços de
                                    Produção de Energia, Transporte, Distribuição e Serviço ao Cliente,
                                    compreendendo vinte e três (23) Áreas de Serviço ao Cliente espalhadas em todo o
                                    País,
                                    em muitos casos com sede nas
                                    grandes cidades, cuja função é o atendimento ao cliente. Para assegurar a
                                    continuidade e
                                    interligação dos sistemas de
                                    transporte de energia, existem três Divisões de Transporte, sendo uma em cada Região
                                    do
                                    País. Por fim, temos duas
                                    Divisões de produção de energia, uma no sul e outra no centro
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <hr>

        <div class="uk-width-1-1@m" id="organizacao">
            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Estrutura Organizacional de Alto Nível</h3>

            <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
                <a class="uk-inline" href="{{ secure_asset('assets/images/estrutura_organizacional.png') }}"
                    data-caption="Estrutura Organizacional de Alto Nível">
                    <img src="{{ secure_asset('assets/images/estrutura_organizacional.png') }}"
                        class="uk-border-rounded" width="850px" height="533px" alt="" uk-img></a>
            </div>
        </div>
    </div>
</div>
@endsection
