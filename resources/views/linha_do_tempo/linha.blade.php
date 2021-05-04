@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <div uk-grid>
        @foreach ($anos as $item)
        <div class="uk-card uk-card-default uk-padding-small uk-margin-right uk-border-rounded">
            <h4 class="uk-text-bold uk-text-muted uk-margin-small">Linha de tempo</h4>
            <h4 class="uk-text-muted uk-align-right uk-margin-remove">{{ $item->ano }}</h4>
            <br>
            <a href="{{ route('linha_do_tempo.show', $item->ano) }}"
                class="uk-button uk-align-right uk-margin-small-top uk-text-primary uk-button-text">Detalhes</a>
        </div>
        @endforeach
    </div>
</div>

@endsection
