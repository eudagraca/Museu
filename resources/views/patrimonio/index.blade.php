@extends('admin')
@section('titulo')
Patrimonio
@endsection

@section('pagina')
Patrimonio
@endsection

@section('body-content')

<div class="uk-overflow-auto uk-background-white uk-section uk-section-small">
    @include('layouts.flash-messages')
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider uk-background-default" id="myTable">
        <thead>
            <tr>
                <th class="uk-table-shrink">#</th>
                <th class="uk-table-expand">Nome</th>
                <th class="uk-table-expand">Localização</th>
                <th class="uk-table-expand">Região</th>
                <th class="uk-table-expand">Data</th>
                <th class="uk-table-shrink">Acção</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patrimonios as $patrimonio)
            <tr>
                <td>{{ $patrimonio->id }}
                <td class="uk-text-truncate">{{ $patrimonio->titulo }}
                </td>
                <td class="uk-text-truncate">{{ $patrimonio->localizacao }}
                </td>
                <td class="uk-text-truncate">{{ $patrimonio->zona }}
                </td>
                <td class="uk-text-truncate">{{ date('d-m-Y', strtotime($patrimonio->created_at)) }}
                </td>
                <td class="uk-text-nowrap"><a href="{{ route('patrimonio.edit', $patrimonio) }}"
                        class="uk-button uk-button-secondary uk-border-rounded">Editar</a>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
