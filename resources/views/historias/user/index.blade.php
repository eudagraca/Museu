@extends('layouts.single-app')

@section('content')

<div uk-grid>
    <div class="uk-width-1-1">
        <ul class="uk-breadcrumb uk-align-right uk-margin-top">
            <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

            <li><a href="#">Contacto</a></li>
        </ul>
    </div>
    <div class="uk-container uk-margin-large-bottom">

        <div uk-grid>

            <div class="uk-width-expand@m">
                <h2 class="uk-heading-bullet uk-text-bolder uk-text-primary">Histórias de vida</h2>
                <p class="uk-margin-large-left uk-text-normal">Acompanhe de perto historias de vida dos funcionarios da
                    Electricidade de Moçambique</p>

            </div>
        </div>

        <div class="uk-container uk-margin-large-bottom">
            <p class="uk-text-center uk-text-primary"><span uk-icon="icon: arrow-down; ratio: 1.5"></span></p>
            <hr class="uk-margin-small-top">
            <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid
                uk-scrollspy="target: > a; cls: uk-animation-fade; delay: 500">

                <a href="videos/antonio.html" class="uk-display-block uk-link-toggle uk-width-medium">

                    <div class="uk-card">
                        <div class="uk-card-media-top">
                            <img class="uk-border-circle" style="height: 200px;"
                                src="{{ secure_asset('/assets/images/historias/antonio_chamusso.png') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h5 class="uk-text-primary uk-text-bold">António Chamusso</h5>
                        </div>
                    </div>
                </a>

                <a href="videos/fatima.html" class="uk-display-block uk-link-toggle uk-width-medium">
                    <div class="uk-card">
                        <div class="uk-card-media-top">
                            <img class="uk-border-circle" style="height: 200px;"
                                src="{{ secure_asset('/assets/images/historias/fatima_artur.png') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h5 class="uk-text-primary uk-text-bold">Fátima Artur</h5>
                        </div>
                    </div>
                </a>

                <a href="videos/joao.html" class="uk-display-block uk-link-toggle uk-width-medium">
                    <div class="uk-card">
                        <div class="uk-card-media-top">
                            <img class="uk-border-circle" style="height: 200px;"
                                src="{{ secure_asset('/assets/images/historias/joao_cumbe.png') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h5 class="uk-text-primary uk-text-bold">João Cumbe</h5>
                        </div>
                    </div>
                </a>


                <a href="videos/samuel.html" class="uk-display-block uk-link-toggle uk-width-medium">
                    <div class="uk-card">
                        <div class="uk-card-media-top">
                            <img class="uk-border-circle" style="height: 200px;"
                                src="{{ secure_asset('/assets/images/historias/samuel_checo.png') }}" alt="">
                        </div>
                        <div class="uk-card-body">
                            <h5 class="uk-text-primary uk-text-bold">Samuel Checo</h5>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>

@endsection