@extends('layouts.single-app')

@section('content')



<div>

    <div class="uk-container uk-margin-large-bottom" id="museu">


        <div uk-grid>
            <div class="uk-width-1-1">
                <ul class="uk-breadcrumb uk-align-right uk-margin-large-top">
                    <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                    <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('museu.show', 'details') }}">Museu</a></li>
                    <li><a href="#">Missão</a></li>
                </ul>
            </div>
            <div class="uk-width-expand@m uk-margin-remove">
                <h2 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-primary uk-margin-small-bottom">
                    Missão</h2>
                <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">
                    MISSÃO do MUSEU VIRTUAL da EDM é de promover a Electricidade de Moçambique, enquanto conceito, imagem e paradigma de
                    Electrificação e valor histórico das suas Infraestruturas.
                </p>
            </div>

        </div>
    </div>
    <hr class="uk-margin-medium-top">
</div>

</div>

@endsection