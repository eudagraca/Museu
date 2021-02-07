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
                                                <li><a class="uk-button-text"
                                                        href="{{ route('museu.show', 'missao') }}">Equipa</a></li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('museu.show', 'missao') }}">Midiateca do Museu
                                                        Virtual</a></li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('museu.show', 'missao') }}">Missão</a></li>
                                            </ul>
                                        </li>
                                        <li class="uk-parent uk-active uk-text-uppercase">
                                            <a class="uk-button-text" href="#">EDM</a>
                                            <ul class="uk-nav-sub">
                                                <li><a class="uk-button-text"
                                                        href="{{ route('apresentacao') }}">Apresentação</a></li>
                                                <li><a class="uk-button-text" href="{{ route('apresentacao') }}">Mapa de
                                                        rede de distribuição</a></li>
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
                                                        href="{{ route('galeria.show', 'comercial') }}">Comercial</a>
                                                </li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('galeria.show', 'distribuicao') }}">Distribuição</a>
                                                </li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('galeria.show', 'geracao') }}">Geração</a></li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('galeria.show', 'transporte') }}">Transporte</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="uk-active uk-button-text uk-text-uppercase"><a
                                                href="{{ route('historia.user') }}">Histórias de
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
                                        <li class="uk-active uk-button-text uk-text-uppercase"><a
                                                href="#">Infraestruturas
                                                de R.E.N</a></li>
                                        <li class="uk-parent uk-active uk-text-uppercase">
                                            <a class="uk-button-text" href="#">Evolução tecnológica</a>
                                            <ul class="uk-nav-sub">
                                                <li><a class="uk-button-text"
                                                        href="{{ route('evolucao.show', 'Comercialização') }}">Comercialização</a>
                                                </li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('evolucao.show', 'Distribuição') }}">Distribuição</a>
                                                </li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('evolucao.show', 'Geração') }}">Geração</a></li>
                                                <li><a class="uk-button-text"
                                                        href="{{ route('evolucao.show', 'Transporte') }}">Transporte</a>
                                                </li>

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
                <img class="uk-align-center" src="{{ secure_asset('assets/images/logo-edm.png') }}" alt="">
                <p class="uk-heading-bullet uk-h2 uk-text-bold">Museu Virtual da Electricidade de Moçambique</p>

                <a href="#modal-full" uk-toggle style="width: 35%; background-color: #fa7f22; color: white"
                    class="uk-button uk-button-primary uk-border-rounded uk-align-center uk-box-shadow-hover-medium uk-margin-large-top">Entrar
                    no museu</a>
            </div>
        </div>
    </div>
</div>


@endsection
