@extends('layouts.single-app')

@section('content')
{{--  <div class="uk-section uk-section-primary uk-margin-large-bottom uk-padding-remove-bottom">
    <div class="uk-container" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
        <nav class="uk-navbar uk-background-primary" uk-navbar style="position: relative; z-index: 980;">
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="{{ route('home') }}">
                    <h4 class="uk-heading-bullet uk-text-normal uk-margin-large-left uk-text-primary">Museu
                    </h4>
                </a>
            </div>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">
                    <li class="uk-active uk-button-text"><a href="{{ route('apresentacao.modelo') }}">Modelo de
                            governança</a></li>
                    <li class="uk-active uk-button-text"><a href="#organica">
                            Distribuição</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>  --}}



<div class="uk-container uk-margin-large-bottom uk-margin-large-top">


    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Modelo de governança corporativa e de gestão</h3>

        <p class="uk-dropcap uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            O processo de nomeação e eleição dos membros dos órgãos sociais da EDM, em particular do Conselho de
            Administração,
            segue os procedimentos estabelecidos no Regulamento da Lei do Sector Empresarial do Estado (LSEE) (Decreto
            no 10/2019 de
            26 de Fevereiro).
        </p>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">A EDM tem como o Core Business a
            Produção, Transporte, Distribuição e Comercialização de Energia Eléctrica e para a
            prossecução da sua actividade, estabeleceu um modelo de gestão que compreende três níveis apresentados na
            figura abaixo:</p>

        <div class="uk-grid">
            <div class="uk-width-1-3@m uk-align-center">
                <img data-src="{{ asset('assets/images/modelo_de_governanca.png') }}" class="uk-border-rounded"
                    data-srcset="{{ asset('assets/images/modelo_de_governanca.png') }}"
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
                                Conselho de Administração é mandatado e presta contas à Assembleia Geral, nos termos do
                                Decreto nº 10/2019, de 26 de
                                Fevereiro.
                            </td>
                        </tr>
                        <tr>
                            <td class="uk-text-black uk-text-bold">Gestão:</td>
                            <td class="uk-text-black uk-text-justify">Compreende vinte e seis (26) Direcções Centrais,
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
                                compreendendo vinte e três (23) Áreas de Serviço ao Cliente espalhadas em todo o País,
                                em muitos casos com sede nas
                                grandes cidades, cuja função é o atendimento ao cliente. Para assegurar a continuidade e
                                interligação dos sistemas de
                                transporte de energia, existem três Divisões de Transporte, sendo uma em cada Região do
                                País. Por fim, temos duas
                                Divisões de produção de energia, uma no sul e outra no centro
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
