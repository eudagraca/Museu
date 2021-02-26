@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
        <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
        <li><a href="">Distribuição</a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Distribuição</h4>

        <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
            A função de distribuição de energia eléctrica é coordenada centralmente pela Direcção de Distribuição, cuja
            responsabilidade é de definir políticas e harmonizar os procedimentos de instalação, operação, manutenção,
            automação e
            gestão de uma maneira uniforme dos activos do segmento Distribuição da EDM, que compreende os seguintes
            níveis de
            tensão: 0.23/0.4kV, 6.6kV, 11kV, 19.1kV (SWER), 22kV e 33kV.
        </p>

        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            A infra-estrutura de distribuição é composta por Mini-subestações, linhas aéreas, linhas subterrâneas,
            postos de
            transformação, armários e quadros de distribuição.
        </p>
        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            A Direcção de Distribuição tutela 5 Direcções Regionais, nomeadamente: Norte, Centro, Sul, Cidade de Maputo
            e Província
            de Maputo e 23 Delegações.
        </p>
        <i class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            O mapa ao lado apresenta as províncias e delegações de jurisdição de cada Direcção Regional.
        </i>
        <div class="uk-grid">
            <div class="uk-width-1-5@m uk-align-center" uk-lightbox="animation: slide">
                <a class="uk-inline" href="{{ secure_asset('assets/images/provincias_delegacoes.png') }}"
                    data-caption="Fonte: Plano de Negócio da EDM 2020 – 2024">
                    <img src="{{ secure_asset('assets/images/provincias_delegacoes.png') }}" class="uk-border-rounded"
                        width="250px" height="133px" alt="" uk-img></a>
            </div>
            <div class="uk-width-expand@m uk-align-center">
                <table class="uk-table uk-table-striped ">
                    <thead>
                        <tr>
                            <th>Descrição do elemento da rede</th>
                            <th>Unidades</th>
                            <th>M. Cidade</th>
                            <th>M. Provincia</th>
                            <th>Sul</th>
                            <th>Norte</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cumprimento da rede de média tensão</td>
                            <td>Km</td>
                            <td>918</td>
                            <td>1813</td>
                            <td>3971</td>
                            <td>7037</td>
                            <td>5756</td>
                            <td>19495</td>
                        </tr>
                        <tr>
                            <td>Cumprimento da rede de baixa tensão</td>
                            <td>Km</td>
                            <td>2225</td>
                            <td>5187</td>
                            <td>3596</td>
                            <td>6400</td>
                            <td>6903</td>
                            <td>24311</td>
                        </tr>
                        <tr>
                            <td>Quantidade de Postos de transformação Públicos</td>
                            <td>Un</td>
                            <td>1785</td>
                            <td>1176</td>
                            <td>1271</td>
                            <td>1877</td>
                            <td>1511</td>
                            <td>7620</td>
                        </tr>
                        <tr>
                            <td>Quantidade de Postos de transformação Privados</td>
                            <td>Un</td>
                            <td>773</td>
                            <td>1282</td>
                            <td>599</td>
                            <td>1443</td>
                            <td>1060</td>
                            <td>5157</td>
                        </tr>
                        <tr>
                            <td colspan="7" class="uk-text-center">Racios de densificação da Rede de Distribuição</td>
                        </tr>
                        <tr>
                            <td>Densificação da Rede MT(qtyPT<sup>s</sup>/km)</td>
                            <td>un/Km</td>
                            <td>2.79</td>
                            <td>1.36</td>
                            <td>0.47</td>
                            <td>0.47</td>
                            <td>0.45</td>
                            <td>0.66</td>
                        </tr>
                        <tr>
                            <td>Densificação da Rede MT(qtyPT<sup>s</sup>/km)</td>
                            <td>un/Km</td>
                            <td>145.79</td>
                            <td>65.16</td>
                            <td>74.54</td>
                            <td>97.13</td>
                            <td>87.02</td>
                            <td>88.55</td>
                        </tr>

                    </tbody>
                </table>
                <p class="uk-text-small uk-text-italic uk-text-danger">Fonte: Plano de Negócio da EDM 2020 - 2024</p>
            </div>
        </div>
        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            O facto de a maior parte da população moçambicana residir nas zonas rurais é evidenciado pelos rácios de
            densificação
            que constam da tabela acima.
        </p>
        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            Com a excepção da Região da Cidade de Maputo, outras regiões têm uma média de 80 clientes por quilómetro de
            rede de
            distribuição em baixa tensão e menos de 1 (um) posto de transformação por quilómetro de rede de média
            tensão. Assim,
            para a universalização do acesso de energia à população, a EDM irá apostar, não só na expansão da rede para
            novos
            centros de consumos, mas também na densificação, que consiste em maximizar a exploração das infra-estruturas
            existentes.
        </p>
    </div>
    <hr>
    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('rede.show', "comercial") }}">Comercial</a></li>
        </ul>
    </div>
</div>
@endsection
