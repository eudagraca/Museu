@extends('layouts.single-app')

@section('content')


    <div class="uk-child-width-1-1@s uk-light" uk-grid>
        <div>
            <div class="uk-background-blend-lighten uk-background-secondary uk-background-image@m uk-background-cover uk-height-large uk-panel uk-flex uk-flex-middle uk-flex-center"
                style="background-image: url({{ asset('assets/images/ponte_iluminada.jpg') }}); width:100%; height: 650px">


                {{-- Menu --}}
                <div id="modal-full" class="uk-modal-full" uk-modal>
                    <div class="uk-modal-dialog">
                        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                        <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                            <div class="uk-padding-large">
                                {{-- <h3>O Museu</h3> --}}
                                <p>
                                <div class="uk-width-1-2@s uk-width-1-2@m">
                                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="multiple: true">
                                        <li class="uk-parent uk-active uk-text-uppercase">
                                            <a class="uk-button-text" href="#">Museu</a>
                                            <ul class="uk-nav-sub">
                                                <li><a class="uk-button-text" href="{{ route('museu.show', 'missao') }}">Equipa</a></li>
                                                <li><a class="uk-button-text" href="{{ route('museu.show', 'missao') }}">Midiateca do Museu Virtual</a></li>
                                                <li><a class="uk-button-text" href="{{ route('museu.show', 'missao') }}">Missão</a></li>
                                            </ul>
                                        </li>
                                        <li class="uk-parent uk-active uk-text-uppercase">
                                            <a class="uk-button-text" href="#">EDM</a>
                                            <ul class="uk-nav-sub">
                                                <li><a class="uk-button-text"
                                                        href="{{ route('apresentacao') }}">Apresentação</a></li>
                                                <li><a class="uk-button-text" href="{{ route('apresentacao') }}">Mapa de rede de distribuição</a></li>
                                                <li><a class="uk-button-text" href="#">Missão</a></li>
                                            </ul>
                                        </li>
                                        <li class="uk-active uk-text-uppercase">
                                            <a class="uk-button-text" href="{{ route('historia.edm') }}">História</a>
                                        </li>
                                        <li class="uk-text-uppercase uk-parent uk-active">
                                            <a class="uk-button-text" href="#">Galeria</a>
                                            <ul class="uk-nav-sub">
                                                <li><a class="uk-button-text"
                                                        href="{{ route('galeria.show', 'comercial') }}">Comercial</a></li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('galeria.show', 'distribuicao') }}">Distribuição</a>
                                                </li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('galeria.show', 'geracao') }}">Geração</a></li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('galeria.show', 'transporte') }}">Transporte</a></li>
                                            </ul>
                                        </li>
                                        <li class="uk-active uk-button-text uk-text-uppercase"><a href="{{ route('historia.user') }}">Histórias de
                                                vida</a></li>
                                        <li class="uk-active uk-button-text uk-text-uppercase"><a
                                                href="{{ route('contacto') }}">Contacto</a></li>

                                    </ul>
                                </div>
                                </p>
                            </div>
                            <div class="uk-padding-large uk-flex uk-flex-right">
                                <p>

                                <div class="uk-width-1-3@s uk-width-1-2@m">

                                    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="multiple: true">
                                        <li class="uk-active uk-button-text uk-text-uppercase"><a href="#">Infraestruturas
                                                de R.E.N</a></li>
                                        <li class="uk-parent uk-active uk-text-uppercase">
                                            <a class="uk-button-text" href="#">Evolução tecnológica</a>
                                            <ul class="uk-nav-sub">
                                                <li><a class="uk-button-text" href="{{ route('evolucao.show', 'Comercialização') }}">Comercialização</a></li>
                                                <li><a class="uk-button-text" href="{{ route('evolucao.show', 'Distribuição') }}">Distribuição</a></li>
                                                <li><a class="uk-button-text" href="{{ route('evolucao.show', 'Geração') }}">Geração</a></li>
                                                <li><a class="uk-button-text" href="{{ route('evolucao.show', 'Transporte') }}">Transporte</a></li>

                                            </ul>
                                        </li>
                                        <li class="uk-active uk-text-uppercase">
                                            <a class="uk-button-text" href="#">Projecto de electrificação</a>
                                        </li>
                                    </ul>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>


                <div>
                    <img class="uk-align-center" src="{{ asset('assets/images/logo-edm.png') }}" alt="">
                    <p class="uk-heading-bullet uk-h2 uk-text-bold">Museu Virtual da Electricidade de Moçambique</p>

                    <a href="#modal-full" uk-toggle style="width: 35%; background-color: #fa7f22; color: white"
                        class="uk-button uk-button-primary uk-border-rounded uk-align-center uk-box-shadow-hover-medium uk-margin-large-top">Entrar
                        no museu</a>
                </div>
            </div>
        </div>
    </div>



    {{-- <div class="uk-container uk-margin-large-bottom">
        <h2 class="uk-heading-bullet uk-text-bolder uk-margin-large-left uk-text-primary">Museu Virtual</h2>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            O Museu da Electicidade de Moçambique é um espaço pedagógico de carácter científico e tecnológico, onde, de
            forma lúdica e interactiva, poder-se-á ter acesso a informações sobre o passado e o presente desta
            instituição.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            O conteúdo do presente Museu Virtual, nomeadamente as fotografias dos objectos inseridas nas
            galerias, os textos e as histórias de vida estarão patentes no futuro museu físico, que será aberto num
            lugar e data a anunciar oportunamente.
        </p>

        <!-- Galeria -->
        <hr class="uk-margin-medium-top">
        <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid
            uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
            <div>
                <div class="uk-card ">
                    <div class="uk-card-media-top">
                        <img class="uk-border-rounded" style="height: 180px;"
                            src="{{ URL::asset('storage/local/images/categoria/geracao.jpg') }}" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h5 class="uk-text-bold">Geração</h5>
                        <a href="pages/geracao.html"
                            class="uk-button uk-button-primary uk-border-rounded uk-box-shadow-hover-medium">Visitar</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card ">
                    <div class="uk-card-media-top">
                        <img class="uk-border-rounded" style="height: 180px;"
                            src="{{ URL::asset('storage/local/images/categoria/transmissao.jpg') }}" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h5 class="uk-text-bold">Transmissão</h5>
                        <a href="pages/transmissao.html"
                            class="uk-button uk-button-primary uk-border-rounded uk-box-shadow-hover-medium">Visitar</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card">
                    <div class="uk-card-media-top">
                        <img class="uk-border-rounded" style="height: 180px;"
                            src="{{ URL::asset('storage/local/images/categoria/distribuicao.jpg') }}" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h5 class="uk-text-bold">Distribuição</h5>
                        <a href="pages/distribuicao.html"
                            class="uk-button uk-button-primary uk-border-rounded uk-box-shadow-hover-medium">Visitar</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="uk-card ">
                    <div class="uk-card-media-top uk-border-rounded">
                        <img class="uk-border-rounded" style="height: 180px;"
                            src="{{ URL::asset('storage/local/images/categoria/comercial.jpg') }}" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h5 class="uk-text-bold">Comercial</h5>
                        <a href="pages/comercial.html"
                            class="uk-button uk-button-primary uk-border-rounded uk-box-shadow-hover-medium">Visitar</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection
