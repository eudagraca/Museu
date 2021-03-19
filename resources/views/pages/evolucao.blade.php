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
                        <li class="uk-active uk-button-text"><a href="#" uk-scroll>{{ request()->evolucao }}</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="uk-container uk-margin-large-bottom">
        <h3 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-primary uk-margin-small-bottom">Evolução tecnológica de serviços de electricidade</h3>

        <div uk-grid>
            <div class="uk-width-expand@m uk-margin-left uk-margin-top">
                <h4 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-secondary uk-margin-small-bottom">{{ request()->evolucao }}</h4>

                <p class="uk-text uk-dropcap uk-text-justify">
                    As primeiras iniciativas visando estabelecer a iluminação pública nas principais povoações da costa
                    moçambicana datam da segunda metade do século XIX. Estes candeeiros, abastecidos a petróleo, foram pela
                    primeira vez usados no baile que o então Capitão-General de Moçambique, realizado para celebrar o
                    casamento do Rei D. Luís I de Portugal, em 18 de Julho de 18631. O mesmo viria a ocorrer em outras
                    povoações como, por exemplo, na Beira, tendo-se estabelecido 30 candeeiros públicos, abastecidos a
                    petróleo, logo em 18922.
                </p>

                <ul uk-tab>
                    <li><a href="#">2020</a></li>
                    <li><a href="#">2019</a></li>
                    <li><a href="#">2018</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">

                    <li class="uk-grid">
                        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                            <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                                <div class="uk-margin-small-bottom">
                                    <a class="uk-inline uk-border-rounded uk-text-bold uk-flex uk-flex-center"
                                        href="{{ secure_asset('('assets/images/logo-edm.png') }}"
                                        data-caption="Provincia de Manica - Barragem da Chicamba.">
                                        <img src="{{ secure_asset('('assets/images/logo-edm.png') }}" alt="">
                                    </a>
                                </div>

                            </div>

                            <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                                <div class="uk-margin-small-bottom">
                                    <a class="uk-inline uk-text-bold uk-flex uk-flex-center"
                                        href="{{ secure_asset('('assets/images/linha-do-tempo.png') }}"
                                        data-caption="Provincia de Manica - Barragem da Chicamba.">
                                        <img src="{{ secure_asset('('assets/images/linha-do-tempo.png') }}" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>

                    <li class="uk-grid">
                        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                            <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                                <div class="uk-margin-small-bottom">
                                    <a class="uk-inline uk-border-rounded uk-text-bold uk-flex uk-flex-center"
                                        href="{{ secure_asset('('assets/images/logo-edm.png') }}"
                                        data-caption="Provincia de Manica - Barragem da Chicamba.">
                                        <img src="{{ secure_asset('('assets/images/logo-edm.png') }}" alt="">
                                    </a>
                                </div>

                            </div>

                            <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                                <div class="uk-margin-small-bottom">
                                    <a class="uk-inline uk-text-bold uk-flex uk-flex-center"
                                        href="{{ secure_asset('('assets/images/linha-do-tempo.png') }}"
                                        data-caption="Provincia de Manica - Barragem da Chicamba.">
                                        <img src="{{ secure_asset('('assets/images/linha-do-tempo.png') }}" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>

                    <li class="uk-grid">
                        <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
                            <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                                <div class="uk-margin-small-bottom">
                                    <a class="uk-inline uk-border-rounded uk-text-bold uk-flex uk-flex-center"
                                        href="{{ secure_asset('('assets/images/ponte_iluminada.jpg') }}"
                                        data-caption="Provincia de Manica - Barragem da Chicamba.">
                                        <img src="{{ secure_asset('('assets/images/ponte_iluminada.jpg') }}" alt="">
                                    </a>
                                </div>

                            </div>

                            <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                                <div class="uk-margin-small-bottom">
                                    <a class="uk-inline uk-text-bold uk-flex uk-flex-center"
                                        href="{{ secure_asset('('assets/images/linha-do-tempo.png') }}"
                                        data-caption="Provincia de Manica - Barragem da Chicamba.">
                                        <img src="{{ secure_asset('('assets/images/linha-do-tempo.png') }}" alt="">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            {{--
            <div class="uk-width-1-3@m" uk-lightbox="animation: slide">
                <div class="uk-margin-small-bottom">
                    <a class="uk-inline uk-text-bold uk-flex uk-flex-center"
                        href="{{ secure_asset('('assets/images/linha-do-tempo.png') }}"
                        data-caption="Provincia de Manica - Barragem da Chicamba.">
                        <img src="{{ secure_asset('('assets/images/linha-do-tempo.png') }}" alt="">
                    </a>
                </div>

            </div> --}}
        </div>

    </div>
@endsection
