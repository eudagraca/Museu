@extends('admin')
@section('titulo')
Lista de imagens da galeria
@endsection

@section('pagina')
Galeria
@endsection

@section('body-content')

<div class="uk-overflow-auto uk-background-white uk-section uk-section-small">

    @include('layouts.flash-messages')
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider uk-background-default" id="myTable">
        <thead>
            <tr>
                <th class="uk-table-shrink">Imagem</th>
                <th class="uk-table-expand">Descrição</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galerias as $item)
            <tr>
                <td><img class="uk-preserve-width uk-border-rounded" src="{{ secure_asset('images/galeria/'.$item->imagem) }}"
                        width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">{{ $item->descricao }}</a>
                </td>
                <td class="uk-text-nowrap uk-align-right">
                    <form method="POST" action="{{ route('galeria.destroy', $item->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <div class="form-group">
                            <input type="submit" class="uk-button uk-button-danger uk-border-rounded" value="Apagar">
                        </div>
                    </form>
                    </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
