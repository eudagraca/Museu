@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">

    <div class="uk-width-1-1@m" id="organica">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Estrutura Organizacional de Alto Nível</h3>

        <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
            <a class="uk-inline" href="{{ secure_asset('('assets/images/estrutura_organizacional.png') }}" data-caption="Estrutura Organizacional de Alto Nível">
            <img src="{{ secure_asset('('assets/images/estrutura_organizacional.png') }}" class="uk-border-rounded"
                width="850px" height="533px" alt="" uk-img>
        </div>
    </div>
</div>
@endsection
