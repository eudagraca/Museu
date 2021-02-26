@extends('layouts.app')

@section('content')


<div class="uk-child-width-1-1@s uk-light" uk-grid>
    <div>
        <div class="uk-background-blend-lighten uk-background-secondary uk-background-image@m uk-background-cover uk-background-muted uk-height-large uk-panel uk-flex uk-flex-middle uk-flex-center"
            style="background-image: url({{ secure_asset('assets/images/subestacao.jpeg') }}); width:100%; height: 600px; background-color: hsl(0, 0%, 30%);">
            <div>
                <div class="uk-flex uk-flex-center uk-background-default uk-padding-small uk-light">
                    <img style="min-height: 50px !important" src="{{ secure_asset('assets/images/logo_edm.png') }}" alt=""
                        srcset="">
                </div>
                <h3
                    class="uk-h3 uk-text-bold uk-padding-small uk-margin-remove-top uk-background-default uk-text- uk-text-primary uk-align-center">
                    Seja bem vindo ao Museu da EDM</h3>
                <a class="uk-button uk-button-primary uk-align-center" href="{{ route('home')}}">Entrar no museu</a>
            </div>
        </div>
    </div>
</div>


@endsection
