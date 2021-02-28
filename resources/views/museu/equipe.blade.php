@extends('layouts.single-app')

@section('content')



<div>

    <div class="uk-container uk-margin-large-bottom" id="museu">


        <div uk-grid>
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb uk-align-right uk-margin-large-top">
                    <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                    <li><a class="uk-text-primary uk-active uk-text-normal"
                            href="{{ route('museu.show', 'details') }}">Museu</a></li>
                    <li><a href="#">Equie técnica</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@m uk-margin-remove">
                <h2 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-primary uk-margin-small-bottom">
                    Equipe técnica</h2>
                <div class="uk-container uk-margin-large-bottom">
                    <p class="uk-text-center uk-text-primary"><span uk-icon="icon: arrow-down; ratio: 1.5"></span></p>
                    <hr class="uk-margin-small-top">
                    <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid
                        uk-scrollspy="target: > a; cls: uk-animation-fade; delay: 500">


                        <div class="uk-card">
                            <div class="uk-card-media-top">
                                <img class="uk-border-rounded" style="height: 200px;"
                                    src="{{ secure_asset('/assets/images/historias/antonio_chamusso.png') }}" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h5 class="uk-text-primary uk-text-bold">Eng. Fabião Cumbe</h5>
                                <p class="uk-text-bolder">Director da academia da EDM</p>
                            </div>
                        </div>

                        <div class="uk-card">
                            <div class="uk-card-media-top">
                                <img class="uk-border-rounded" style="height: 200px;"
                                    src="{{ secure_asset('/assets/images/equipe/Jeronimo.JPG') }}" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h5 class="uk-text-primary uk-text-bold">Jerónimo Nhussi</h5>
                                <p class="uk-text-bolder">Chefe do departamento de gestão de conhecimento</p>
                            </div>
                        </div>

                        <div class="uk-card">
                            <div class="uk-card-media-top">
                                <img class="uk-border-rounded" style="height: 200px;"
                                    src="{{ secure_asset('/assets/images/historias/antonio_chamusso.png') }}" alt="">
                            </div>
                            <div class="uk-card-body">
                                <h5 class="uk-text-primary uk-text-bold">Rodriguez Laidone</h5>
                                <p class="uk-text-bolder">Musiólogo</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr class="uk-margin-medium-top">
</div>

</div>

@endsection