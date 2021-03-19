@extends('admin')
@section('titulo')
    Lista de imagens da galeria
@endsection

@section('pagina')
    Galeria
@endsection

@section('body-content')

<div class="uk-overflow-auto uk-background-white uk-section uk-section-small">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider uk-background-default">
        <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <th class="uk-table-shrink">Imagem</th>
                <th class="uk-table-expand">Descrição</th>
                <th colspan="2">Acção</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-rounded" src="{{ URL::secure_asset('('storage/local/images/logo-edm.png') }}" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td class="uk-text-nowrap"><button class="uk-button uk-button-secondary uk-border-rounded">E</button></td>
                <td class="uk-text-nowrap"><button class="uk-button uk-button-danger uk-border-rounded">X</button></td>

            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td class="uk-text-nowrap"><button class="uk-button uk-button-secondary uk-border-rounded">E</button></td>
                <td class="uk-text-nowrap"><button class="uk-button uk-button-danger uk-border-rounded">X</button></td>

            </tr>
        </tbody>
    </table>
</div>
@endsection
