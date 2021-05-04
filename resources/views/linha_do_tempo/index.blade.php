@extends('admin')
@section('titulo')
Linhas do tempo
@endsection

@section('pagina')
Linhas do tempo
@endsection

@section('body-content')

<div class="uk-overflow-auto uk-background-white uk-section uk-section-small">
    @include('layouts.flash-messages')
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider uk-background-default" id="myTable">
        <thead>
            <tr>
                <th class="uk-table-shrink">Ano</th>
                <th class="uk-table-expand">Descrição</th>
                <th class="uk-table-shrink">Acção</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($linhasTempo as $linhaTempo)
            <tr>
                <td>{{ $linhaTempo->ano }}
                <td class="uk-text-truncate">{{ $linhaTempo->nota }}
                </td>
                <td class="uk-text-nowrap"><a href="{{ route('linhaTempo.edit', $linhaTempo->id) }}" class="uk-button uk-button-secondary uk-border-rounded">Editar</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
