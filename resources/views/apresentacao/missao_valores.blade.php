@extends('layouts.single-app')

@section('content')

<div class="uk-container uk-margin-large-bottom uk-margin-large-top">



    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-remove-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('apresentacao') }}">Apresentação da EDM</a>
                </li>
                <li><a href="#">Missão | Visão e Valores</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove" id="apresentacao">


            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Missão</h3>

            <p class="uk-text uk-margin-left uk-margin-remove-top uk-margin-right uk-text-justify">
                Produzir, transportar, distribuir e comercializar energia eléctrica de boa qualidade, de forma
                sustentável, para
                iluminar e potenciar a industrialização do país.
            </p>

            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Visão</h3>

            <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">Transformar a EDM numa Utilidade
                Inteligente e Sustentável, que dá acesso à energia eléctrica de qualidade a cada
                moçambicano e exerce liderança no Mercado Regional.</p>

            <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Valores</h3>

            <p class="uk-text uk-margin-left uk-text-justify uk-margin-right ">Integridade, Transparência, Igualdade,
                Competitividade e Espírito de Equipa.</p>

        </div>

    </div>

</div>
@endsection