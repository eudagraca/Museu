@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-top">
    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-remove-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('linha_do_tempo') }}">Linha do tempo</a>
                </li>
                <li><a href="#">{{ $ano }}</a></li>
            </ul>
        </div>
        <div uk-grid>
            @foreach ($linhasTempo as $item)
            <div class="uk-card uk-card-default uk-padding-small uk-margin-right uk-border-rounded">
                <h6 class="uk-text-bold uk-text-muted uk-margin-small">{{ $item->ano }}</h6>
                <p class="uk-text-muted uk-align-right uk-margin-remove">{{ $item->nota }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
