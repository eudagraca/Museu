@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-primary uk-margin-large-bottom uk-padding-remove-bottom">
        <div class="uk-container" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
            <nav class="uk-navbar uk-background-primary" uk-navbar style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="{{ route('home') }}">
                        <h4 class="uk-heading-bullet uk-text-normal uk-margin-large-left uk-text-primary">Página inicial
                        </h4>
                    </a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active uk-button-text"><a href="{{ route('galeria.show', 'comercial') }}">Comercialização</a></li>
                        <li class="uk-active uk-button-text"><a href="{{ route('galeria.show', 'distribuicao') }}"> Distribuição</a></li>
                        <li class="uk-active">
                            <a href="{{ route('galeria.show', 'geracao') }}">Geração</a>
                        </li>
                        <li class="uk-active uk-button-text"><a href="{{ route('galeria.show', 'transporte') }}"> Transporte</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <div class="uk-container uk-margin-large-bottom">

        <div uk-grid>

            <div class="uk-width-expand@m">
        <h2 class="uk-heading-bullet uk-text-bolder uk-text-primary">Geração</h2>

                <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                    Moçambique desde os primeiros anos da colonização portuguesa estava dividido em Distritos, concelhos, circunscrições e povoações. Gradualmente as sedes dos distritos evoluíram para Vilas e cidades. Foi nessas cidades onde surgiram aglomerados populacionais que conduziram a implantação de instituições e corpos administrativo que fez nascer as Camaras Municipais que impulsionaram o desenvolvimento socioeconómico e urbanístico. Dependendo das fontes de receita de cada região, surgiram cidades economicamente fortes e outras débeis, impulsionadas pelo Plano de Fomento Colonial aliado ao Decreto 24.455 de 10 de Janeiro de 1935, que viria a ser reforçado pelo Decreto 27.071, de 07 de Outubro de 1936.
                </p>
                <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                    O Governo colonial com aqueles Decretos estipulava as Normas e critérios de Concessão das licenças para o abastecimento e exploração de instalações eléctricas. Consciente que a medida não lograra os intentos, em finais de Março de 1964, a Direcção dos Serviços de Administração Civil envia para as camaras Municipais, Governos e Concelhos a transcrição do ofício 593/30/SE, da Repartição dos Serviços Eléctricos do Ministério do Ultramar, instruindo que fosse estimulada a criação de Serviços de Electricidade, por Federação de Municípios para a Distribuição de Energia Eléctrica. (Acta do SMAE 12/64, de 23 de Março)
                </p>

            </div>
        </div>
        <!-- Galeria -->
        <hr class="uk-margin-medium-top">

        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide" uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

            <div>
                <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" data-caption="Caption 1">
                    <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
                </a>
            </div>

            <div>
                <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" data-caption="Caption 1">
                    <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
                </a>
            </div>

            <div>
                <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" data-caption="Caption 1">
                    <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
                </a>
            </div>

            <div>
                <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" data-caption="Caption 1">
                    <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
                </a>
            </div>

            <div>
                <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" data-caption="Caption 1">
                    <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
                </a>
            </div>

            <div>
                <a class="uk-inline" href="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" data-caption="Caption 1">
                    <img style="height: 240px;" src="{{ secure_asset('/assets/images/ponte_iluminada.jpg') }}" alt="">
                </a>
            </div>

        </div>

    </div>
    @endsection
