@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb">
        <li><a>Transporte</a></li>
        <li><a>Infra-estrutura de Transporte</a></li>
        <li><a>Centro Nacional do Despacho</a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transporte</h4>

        <p class="uk-dropcap uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Tem como missão dirigir, de forma eficiente e eficaz, as actividades de exploração e manutenção da Rede
            Nacional de
            Transporte, que compreendem:
        </p>
        <ol class="uk-text uk-margin-large-left uk-text-justify" type="a">
            <li class="uk-margin-large-top">Instalações de interligação para os produtores de electricidade e para a
                importação de electricidade;</li>
            <li class="uk-margin-small">Infra-estruturas de transporte de energia eléctrica, para fornecer energia para
                exportação, clientes de grande porte
                e redes de distribuição conectadas a Rede de Transporte;</li>
            <li class="uk-margin-small">Centro de Despacho; e</li>
            <li class="uk-margin-small">Infra-estruturas de telecomunicações, telemetria e controle remoto para a gestão
                eficaz e eficiente da Rede Nacional
                de Transporte de acordo com as disposições do código de Rede, acordos e regulamentos da SAPP (Southern
                African Power
                Pool);</li>
        </ol>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            A Rede Nacional de Transporte de Energia é constituída por dois subsistemas isolados, nomeadamente, Centro -
            Norte e
            Sul.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            A interconexão destes subsistemas é feita via países vizinhos, nomeadamente, Zimbabwe, através da rede de
            Transporte da
            ZESA, África do Sul, através da rede de Transporte da Eskom, esta última conecta-se à rede de Transporte
            Nacional (REN),
            através da rede da Motraco, vide mapa seguinte.
        </p>
        <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
            <a class="uk-inline" href="{{ asset('assets/images/mapa_transporte.png') }}"
                data-caption="Rede Transporte Energia. Fonte: Plano de Negócio da EDM 2020 - 2024">
                <img src="{{ asset('assets/images/mapa_transporte.png') }}" class="uk-border-rounded" width="750px"
                    height="133px" alt="" uk-img></a>
        </div>
        <div class="uk-margin-large-left">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Infra-estrutura de Transporte</h4>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                O sistema de Transporte de Energia da EDM, é constituído por quatro níveis de tensão, nomeadamente, 66kV, 110kV, 220kV e
                275kV.

                Na tabela abaixo estão descritos os principais elementos que compõem a Rede de Transporte da EDM.
            </p>

            <div class="uk-width-1-2 uk-align-center">
                <table class="uk-table uk-table-striped ">
                    <thead>
                        <tr>
                            <th>Descrição do elemento da rede</th>
                            <th>Unidades</th>
                            <th>Quantidades</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cumprimento das linhas de serviço</td>
                            <td>km</td>
                            <td>5660</td>
                        </tr>
                        <tr>
                            <td>Linhas de 275kV</td>
                            <td>km</td>
                            <td>317</td>
                        </tr>
                        <tr>
                            <td>Linhas de 220kV</td>
                            <td>km</td>
                            <td>1486</td>
                        </tr>
                        <tr>
                            <td>Linhas de 110kV</td>
                            <td>km</td>
                            <td>3191</td>
                        </tr>
                        <tr>
                            <td>Linhas de 66kV</td>
                            <td>km</td>
                            <td>666</td>
                        </tr>
                        <tr>
                            <td>Outros Elementos Estruturais da Rede</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Torres</td>
                            <td>un</td>
                            <td>15251</td>
                        </tr>
                        <tr>
                            <td>Isoladores</td>
                            <td>un</td>
                            <td>52568</td>
                        </tr>
                        <tr>
                            <td>Subestações Fixas</td>
                            <td>un</td>
                            <td>74</td>
                        </tr>
                        <tr>
                            <td>Subestações Moveis</td>
                            <td>un</td>
                            <td>9</td>
                        </tr>
                        <tr>
                            <td>Transformadores de potência</td>
                            <td>un</td>
                            <td>150</td>
                        </tr>
                        <tr>
                            <td>Reactores</td>
                            <td>un</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Bancos de capacitores</td>
                            <td>un</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>SVC<sup>s</sup></td>
                            <td>un</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Paineis exteriores</td>
                            <td>un</td>
                            <td>486</td>
                        </tr>
                        <tr>
                            <td>Paineis interiores(GIS)</td>
                            <td>un</td>
                            <td>66</td>
                        </tr>
                        <tr>
                            <td>Paineis interiores(AIS)</td>
                            <td>un</td>
                            <td>517</td>
                        </tr>
                        <tr>
                            <td>Bancos de Baterias</td>
                            <td>un</td>
                            <td>200</td>
                        </tr>
                        <tr>
                            <td>Rectificadores</td>
                            <td>un</td>
                            <td>20</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <p class="uk-text-small uk-text-italic uk-text-danger uk-margin-large-left">Fonte: Plano de Negócio da EDM 2020 - 2024</p>

            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Na <b>Região Sul</b>, das 37 subestações em funcionamento, 12 estão a operar no limite da sua capacidade, 6 linhas
                de
                transporte de energia a 66kV operam no seu limite de transferência e carecem de intervenção urgente para evitar a
                sobrecarga dos equipamentos, que se pode traduz ir no seu envelhecimento precoce e/ou colapso
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Com a implementação dos projectos de reforço da rede nomeadamente: Perip, Jica, Hyousung, STIP e Emergência, o
                número de
                subestações sobrecarregadas a nível da Rede de Transporte Sul irá reduzir para 4, nomeadamente: Marracuene,
                Salamanga,
                SE10 e Kongolote
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Na <b>Região Centro</b>, a Direcção de Transporte funciona com um total de 32 Subestações, das quais 27 pertencem à
                EDM, sendo
                que 3 são móveis, localizadas em Tete, Quelimane e Casa Nova. As restantes 24 são fixas, das quais 5 subestações são
                privadas (Jindal, CIM Dondo, CIM Beira, Vale e ICVL
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Actualmente, na região não, há registo de subestações a operar no limite da sua capacidade. Não obstante tal facto,
                2
                linhas de transferência de potência, nomeadamente: DL3 (Matambo - Tete) e CL71 (Dondo - Munhava)) estão a operar no
                seu
                limite térmico.
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                No triénio 2019-2021, está planificada a ligação de cerca de 362.000 novos clientes, no âmbito da universalização do
                acesso, o que resultará na sobrecarga de 8 Subestação da rede de Transporte Centro.
                Se a implementação dos projectos de reforço da rede (PERIP, HYOUSUNG, STIP) for bem-sucedida, o quadro melhora,
                contudo
                permanecendo críticas as subestações da Munhava, Chimoio 1 e Chimoio2.
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Na <b>Região Norte</b>, com o plano de universalização do acesso doméstico à rede, prevê-se para os próximos dois
                anos ligar
                cerca de 250 mil novos clientes, o que resultará no incremento da demande e consequente sobrecarga de 7 Subestações.
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Mesmo com a implementação dos projectos em curso de reforço da rede nesta região (PERIP, HYOUSUNG, MARRUPA, STATCOM
                CUAMBA, LINHA CAIA-NACALA), irá prevalecer a necessidade de se proceder a um aumento da capacidade de transferência
                das
                linhas CL31 e CL32, para evitar restrições e garantir o fornecimento de energia eléctrica de qualidade às Cidade de
                Nampula e de Nacala e aos distritos de Monapo, Ilha de Moçambique e Mussoril, em caso da indisponibilidade da
                central
                flutuante (Karpower) e ou de uma das linhas (CL31 ou CL35).
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Fora os constrangimentos da rede de transporte acima referenciados, o acesso universal impõe ao sistema de
                transporte
                mais desafios no que concerne à disponibilidade de potência, para suprir a demanda, cujo crescimento previsto está
                na
                ordem de 20%, tomando como referência o histórico dos últimos 5 anos (200MW).
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Para o quinquénio 2020 - 2024, estão previstos diversos projectos visando, por um lado, garantir a disponibilidade
                de
                potência para suprir a demanda e, por outro, garantir a segurança na exploração do sistema. Igualmente estão
                previstos
                projectos de melhoria dos processos de gestão dos activos da rede de transporte, modernização dos meios de
                diagnósticos
                de incidentes e consolidação dos procedimentos de O&M.
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Para o quinquénio 2020 - 2024, estão previstos diversos projectos visando, por um lado, garantir a disponibilidade
                de
                potência para suprir a demanda e, por outro, garantir a segurança na exploração do sistema. Igualmente estão
                previstos
                projectos de melhoria dos processos de gestão dos activos da rede de transporte, modernização dos meios de
                diagnósticos
                de incidentes e consolidação dos procedimentos de O&M.
            </p>

            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-large-left">Centro Nacional do Despacho</h4>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                O Centro Nacional de Despacho é uma alavanca fundamental para a gestão global do Sistema Eléctrico Nacional e para a sua
                interligação com as redes dos países vizinhos e centrais de produção.
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Actualmente, a EDM opera com um Centro de Despacho, que assegura apenas o controlo centralizado da rede de transporte da
                zona sul, incluindo a monitorização das interligações com a Eskom e Eswatine, cuja entrada em funcionamento data de
                Março de 2009.
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
               Com os diversos projectos de geração e de transporte, previstos para o presente quinquénio, a EDM é desafiada a acelerar
            a implementação do projecto do Centro Nacional de Despacho, acompanhado de dois centros de controlo regional, para
            desempenhar, de forma eficiente e segura, o seguinte papel:
            </p>
            <ul class="uk-text uk-margin-large-left uk-text-justify" >
                <li class="uk-margin-top">Monitoria e Controlo da rede nacional de transporte (~533kV, 400kV, 275kV, 220kV,110kV e 66kV);</li>
                <li class="uk-margin-small">Monitoria e controlo da geração e balanço da procura e oferta (Controlo de frequência);</li>
                <li class="uk-margin-small">Monitoria e controlo do fluxo energético regional, de acordo com os procedimentos da SAPP, etc..</li>
            </ul>
            <h5 class="uk-margin-large-left uk-text-bold">Vantagens do Centro Nacional de Despacho:</h5>
            <ul class="uk-text uk-margin-large-left uk-text-justify">
                <li class="uk-margin-top">Controlo da rede em tempo real;</li>
                <li class="uk-margin-small">Redução da indisponibilidade do sistema
                </li>
                <li class="uk-margin-small">Aumento da fiabilidade;</li>
                <li class="uk-margin-small">Balanço energético; e</li>
                <li class="uk-margin-small">Redução de operadores nas subestações de risco de acidentes;</li>
            </ul>
        </div>

    </div>
</div>
@endsection
