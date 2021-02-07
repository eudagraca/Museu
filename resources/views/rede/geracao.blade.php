@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
            <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Geração</h4>

        <p class="uk-dropcap uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            A Função Geração tem como missão, coordenar e implementar a gestão, exploração e manutenção dos meios de
            produção de
            energia eléctrica, gestão sustentável da capacidade de produção de energia, em função da demanda, assessorar
            as
            Delegações na exploração das centrais de emergência e, em coordenação com outras Direcções, desenvolver
            estudos, visando
            a implementação de novas centrais de geração própria.
        </p>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            No presente quinquénio, no parque produtor, prevê-se a recuperação de cerca de 78MW de capacidade produtiva
            que se
            encontra indisponível por motivos de avarias de vária ordem. Desta capacidade, 22 MW serão recuperados na
            Central
            Hídrica de Chicamba, 15.8MW na Central Hídrica de Mavuzi, 40MW na Central Térmica à Gás Natural de Maputo
            (CTM).
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Esta recuperação de capacidade produtiva, vai melhorar em grande medida os níveis de resposta à demanda nos
            diferentes
            subsistemas de transporte de energia ao longo do País.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Para além desta recuperação, prevê-se o aumento de capacidade produtiva em cerca de 45MW, resultante da
            montagem da
            central de emergência de 40MW em Nacala, aumento da capacidade instalada em Temaninho em mais 3 MW e a
            ampliação da
            Mini-hídrica de Cuamba em mais 2.5MW.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Importa referenciar que, pelo facto de a geração ter centrais a funcionar em regimes diferentes,
            nomeadamente (Pick,
            Base load e Mied-merid), o valor global do factor de carga (GLF) e de utilização de energia (EUF), vai
            situar-se nos 52%
            e 53%, respectivamente de 2021 em diante.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            O factor de perda de capacidade não planeada (UCLF) vai melhorar significativamente, visto que a
            indisponibilidade das
            centrais por avarias não planeadas de longo termo, a partir de 2021, será ultrapassada na sequência da
            implementação das
            obras de reabilitação de raiz, o que vai culminar com o aumentado dos seus níveis de fiabilidade.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            A geração da EDM está presente nas três regiões do País, nomeadamente Sul, Centro e Norte. Esta realidade
            impõe que
            sejam alocados recursos, não só humanos, mas também materiais e em equipamentos para a gestão das centrais.
        </p>
        <i class="uk-h4 uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            A tabela abaixo apresenta a capacidade de geração instalada e disponível por central
        </i>
        <div class="uk-margin-large-left uk-margin-large-right uk-margin-top">
            <table class="uk-table uk-table-striped ">
                <thead>
                    <tr>
                        <th>Nome de central</th>
                        <th>Tipo de central</th>
                        <th>Localização</th>
                        <th>Capacidade instalada (MW)</th>
                        <th>Capacidade disponivel (MW)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Corumana</td>
                        <td>Hídrica</td>
                        <td>Maputo</td>
                        <td>16.3</td>
                        <td>16.0</td>
                    </tr>
                    <tr>
                        <td>Chicamnba</td>
                        <td>Hídrica</td>
                        <td>Manica</td>
                        <td>44.0</td>
                        <td>22.0</td>
                    </tr>
                    <tr>
                        <td>Mavuzi</td>
                        <td>Hídrica</td>
                        <td>Manica</td>
                        <td>52.0</td>
                        <td>25.0</td>
                    </tr>
                    <tr>
                        <td>Temane</td>
                        <td>Térmica-Gás</td>
                        <td>Inhambane</td>
                        <td>11.2</td>
                        <td>10.31</td>
                    </tr>
                    <tr>
                        <td>GTG-Beira</td>
                        <td>Términa-Disel</td>
                        <td>Sofala</td>
                        <td>14.0</td>
                        <td>2.0</td>
                    </tr>
                    <tr>
                        <td>Lichinga</td>
                        <td>Hídrica</td>
                        <td>Niassa</td>
                        <td>0.7</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td>Cuamba</td>
                        <td>Hídrica</td>
                        <td>Niassa</td>
                        <td>1.0</td>
                        <td>0.5</td>
                    </tr>
                    <tr>
                        <td>CTM</td>
                        <td>Térmica-Gás</td>
                        <td>Maputo</td>
                        <td>106.0</td>
                        <td>106.0</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td></td>
                        <td>245.2</td>
                        <td>192.3</td>
                    </tr>
                </tfoot>
            </table>
            <p class="uk-text-small uk-text-italic uk-text-danger">Fonte: Plano de Negócio da EDM 2020 - 2024</p>
        </div>
    </div>
</div>
@endsection
