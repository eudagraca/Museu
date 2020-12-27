@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-primary uk-margin-large-bottom uk-padding-remove-bottom">
        <div class="uk-container" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
            <nav class="uk-navbar uk-background-primary" uk-navbar style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="{{ route('home')}}">
            <h4 class="uk-heading-bullet uk-text-normal uk-margin-large-left uk-text-primary">Página inicial</h4>
            </a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active uk-button-text"><a href="#" uk-scroll>Museu</a></li>
                        <li class="uk-active">
                            <a href="#missao" uk-scroll>Missão</a>
                        </li>
                        <li class="uk-active uk-button-text"><a href="#equipe" uk-scroll> Equipe e Mediateca</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="uk-container uk-margin-large-bottom" id="museu">
        <div uk-grid>
            <div class="uk-width-expand@m uk-margin-large-right uk-margin-large-left">
                <h2 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-primary uk-margin-small-bottom">O Museu</h2>
                <p class="uk-text uk-dropcap uk-margin-large-left uk-margin-large-right uk-text-justify">
                    As primeiras iniciativas visando estabelecer a iluminação pública nas principais povoações da costa
                    moçambicana datam da segunda metade do século XIX. Estes candeeiros, abastecidos a petróleo, foram pela
                    primeira vez usados no baile que o então Capitão-General de Moçambique, realizado para celebrar o
                    casamento do Rei D. Luís I de Portugal, em 18 de Julho de 18631. O mesmo viria a ocorrer em outras
                    povoações como, por exemplo, na Beira, tendo-se estabelecido 30 candeeiros públicos, abastecidos a
                    petróleo, logo em 18922.
                </p>
                <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                    Em 1946 foi constituída a Sociedade Hidro-Eléctrica do Revué (SHER), com a concessão da exploração de
                    energia hidroeléctrica do rio Revué e seus afluentes, na área de Chimoio.
                </p>

            </div>
        </div>
        <hr class="uk-margin-medium-top">
    </div>

    {{-- Missao --}}
    <div class="uk-container uk-margin-large-bottom" id="missao">

        <div uk-grid>
            <div class="uk-width-expand@m uk-margin-large-right uk-margin-large-left">
                <h2 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-primary uk-margin-small-bottom">Missão</h2>
                <p class="uk-text uk-dropcap uk-margin-large-left uk-margin-large-right uk-text-justify">
                    As primeiras iniciativas visando estabelecer a iluminação pública nas principais povoações da costa
                    moçambicana datam da segunda metade do século XIX. Estes candeeiros, abastecidos a petróleo, foram pela
                    primeira vez usados no baile que o então Capitão-General de Moçambique, realizado para celebrar o
                    casamento do Rei D. Luís I de Portugal, em 18 de Julho de 18631. O mesmo viria a ocorrer em outras
                    povoações como, por exemplo, na Beira, tendo-se estabelecido 30 candeeiros públicos, abastecidos a
                    petróleo, logo em 18922.
                </p>
                <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                    Em 1946 foi constituída a Sociedade Hidro-Eléctrica do Revué (SHER), com a concessão da exploração de
                    energia hidroeléctrica do rio Revué e seus afluentes, na área de Chimoio.
                </p>

            </div>
        </div>
        <hr class="uk-margin-medium-top">

    </div>

    {{-- Equipe --}}
    <div class="uk-container uk-margin-large-bottom" id="equipe">

        <div uk-grid>
            <div class="uk-width-expand@m uk-margin-large-right uk-margin-large-left">
                <h2 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-primary uk-margin-small-bottom">Equipe e Midiateca</h2>
                <p class="uk-text uk-dropcap uk-margin-large-left uk-margin-large-right uk-text-justify">
                    As primeiras iniciativas visando estabelecer a iluminação pública nas principais povoações da costa
                    moçambicana datam da segunda metade do século XIX. Estes candeeiros, abastecidos a petróleo, foram pela
                    primeira vez usados no baile que o então Capitão-General de Moçambique, realizado para celebrar o
                    casamento do Rei D. Luís I de Portugal, em 18 de Julho de 18631. O mesmo viria a ocorrer em outras
                    povoações como, por exemplo, na Beira, tendo-se estabelecido 30 candeeiros públicos, abastecidos a
                    petróleo, logo em 18922.
                </p>
                <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                    Em 1946 foi constituída a Sociedade Hidro-Eléctrica do Revué (SHER), com a concessão da exploração de
                    energia hidroeléctrica do rio Revué e seus afluentes, na área de Chimoio.
                </p>

            </div>
        </div>
        <hr class="uk-margin-medium-top">

    </div>
@endsection
