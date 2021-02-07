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
                    <li class="uk-active uk-button-text"><a href="#governanca">Modelo de governança</a></li>
                    <li class="uk-active uk-button-text"><a href="#organica">
                            Distribuição</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>  --}}



<div class="uk-container uk-margin-large-bottom uk-margin-large-top">


    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Apresentação da EDM</h3>

        <p class="uk-dropcap uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
           A Empresa Nacional de Electricidade de Moçambique Empresa Estatal, (EDM-E.E) foi criada em 27 de Agosto de 1977, através
        do Decreto Lei nº 38/77 de 27 de Agosto, que resultou da integração de vários Serviços Municipais de Água e
        Electricidade (SMAE), Sociedade Hidro-Eléctrica do Revué (SHER), Sociedade Nacional de Estudos e Financiamentos de
        Empreendimentos Ultramarinos (SONEFE), Serviços Municipalizados de Electricidade (SME) e Serviços de Água e
        Electricidade (SAE). Em 1995 a EDM foi transformada numa empresa pública, ao abrigo do decreto nº 28/95, com a
        designação da EDM-Electricidade de Moçambique, Empresa Pública (EDM – E.P).
        </p>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">O sector de energia é considerado prioritário a nível do Governo, que está empenhado em levar a cabo medidas para atrair
        o investimento privado nesta área e promover o desenvolvimento da rede nacional de energia.</p>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">Em Outubro de 1997, acompanhando as tendências internacionais que apontavam para uma maior liberalização dos mercados, é
        promulgado a Lei de Electricidade (Lei 21/97 de 1 de Outubro) que altera alguns princípios presentes no quadro nacional
        e aprova a regulamentação específica que estabelece a Política Energética (resolução 05/98 de 3 de Março), que confere à
        EDM o papel de Gestor da Rede Nacional de Transporte de Energia Eléctrica e o Regulamento da Lei de Electricidade que
        define as competências e os procedimentos relativos à atribuição de concessões de Produção, Transporte, Distribuição e
        Comercialização de Energia Eléctrica.</p>

        <div class="uk-margin-large-left uk-margin-large-right">
            <h4>Objecto do Negócio da EDM</h4>
            <ul class="uk-list uk-list-disc uk-list-primary uk-margin-large-right uk-margin-large-left">
                <li>Estabelecimento e exploração dos meios de produção próprios e dos que fazem parte do património do Estado colocado à
                disposição da EDM, afectos à produção de energia eléctrica</li>
                <li>Transformação, conversão, transporte, distribuição e comercialização de energia eléctrica no território nacional e
                fora dele;</li>
                <li>Gestão e operação da rede nacional de transporte de energia eléctrica, na qualidade de Gestor de Rede Nacional de
                Transporte (RNT) e</li>
                <li>Realização de trabalhos de instalação, de reparação e de renovação de bens afectos a exploração do serviço público.</li>
            </ul>
        </div>


    </div>

    <hr>

    <div class="uk-width-1-1@m" id="organica">
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary">Missão da EDM</h4>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Produzir, transportar, distribuir e comercializar energia eléctrica de boa qualidade, de forma sustentável, para
            iluminar e potenciar a industrialização do país.
        </p>
    </div>

    <div class="uk-width-1-1@m">
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary">Visão</h4>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Transformar a EDM numa Utilidade Inteligente e Sustentável, que dá acesso à energia eléctrica de qualidade a cada
            moçambicano e exerce liderança no Mercado Regional.
        </p>
    </div>

    <div class="uk-width-1-1@m" >
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary">Valores</h4>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Integridade, Transparência, Igualdade, Competitividade e Espírito de Equipa.
        </p>
    </div>

</div>
@endsection
