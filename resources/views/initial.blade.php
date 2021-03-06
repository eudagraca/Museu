@extends('layouts.app')

@section('content')


<div class="uk-child-width-1-1@s uk-light" uk-grid>
    <div>
        <div class="uk-background-blend-lighten uk-background-secondary uk-background-image@m uk-background-cover uk-background-muted uk-height-large uk-panel uk-flex uk-flex-middle uk-flex-center"
            style="background-image: url({{ asset('assets/images/subestacao.jpeg') }}); width:100%; height: 600px; background-color: hsl(0, 0%, 30%);">
            <div>
                <div class="uk-flex uk-flex-center uk-background-default uk-padding-small uk-light">
                    <img style="min-height: 50px !important" src="{{ asset('assets/images/logo_edm.png') }}" alt=""
                        srcset="">
                </div>
                <h3
                    class="uk-h3 uk-text-bold uk-padding-small uk-margin-remove-top uk-background-default uk-text- uk-text-primary uk-align-center">
                    Museu Virtual da EDM</h3>
                <a class="uk-button uk-button-primary uk-align-center" href="{{ route('home')}}">Início</a>
            </div>
        </div>
    </div>
</div>

<div class=" uk-background-primary">
    <p class="uk-text-center uk-custom-text-white uk-margin-remove uk-padding-small uk-text-light">
        &copy; Todos direitos reservados
        <script>
            document.write(new Date().getFullYear());
        </script>, Electricidade de Moçambique.
    </p>
</div>


@endsection
