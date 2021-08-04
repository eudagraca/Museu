@extends('admin')
@section('titulo')
Adicionar imagem a galeria
@endsection

@section('pagina')
Galeria
@endsection

@section('body-content')
<div class="uk-section uk-section-small uk-width-1-1@s">
    @include('layouts.flash-messages')
    <div class="uk-card uk-card-default uk-width-1-1@s uk-padding">

        <form method="post" id="dynamic_form" action="{{ route('galeria.store') }}" enctype="multipart/form-data">
            @csrf
            <span id="result"></span>
            <table class="uk-table" id="user_table">
                <thead>
                    <tr>
                        <th class="uk-text-bold">Imagem</th>
                        <th>Descrição</th>
                        <th>Acção</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

            <div class="uk-form-control uk-card-footer uk-margin-top uk-padding-remove-bottom">
                <input type="submit" name="save" id="save"
                    class="uk-align-right uk-border-rounded uk-button uk-button-primary" value="Gravar" />
            </div>

        </form>
    </div>
</div>
<script>
    $(document).ready(function() {

            var count = 1;

            dynamic_field(count);

            function dynamic_field(number) {
                html = '<tr>';
                html += '<td><div class="js-upload uk-border-rounded uk-placeholder uk-text-center" style="border: 1px dashed #000">'+
                        ' <span uk-icon="icon: cloud-upload"></span>'+
                            '<span class="uk-text-middle"> Adicione </span>'+
                            '<div uk-form-custom>'+
                                '<input type="file" name=imagem[]>'+
                            ' <span class="uk-link"> Clique aqui</span>'+
                            '</div>'+
                        '</div></td>';
                html += '<td><textarea class="uk-textarea uk-border-rounded" name="descricao[]" rows="3"></textarea></td>';
                html += '<td><select name="ponto[]" class="uk-select"><option value="Barragem">BARRAGEM</option><option value="Hidroelectrica">HIDROELECTRICA</option><option value="Linha">LINHA</option><option value="Subestacao">SUBESTAÇÃO</option><option value="Outro">OUTRO</option></select></td>';
                if (number > 1) {
                    html +=
                        '<td><button type="button" name="remove" id="" class="uk-button uk-align-right uk-button-danger uk-border-rounded remove">Remover</button></td></tr>';
                    $('tbody').append(html);
                } else {
                    html +=
                        '<td><button type="button" name="add" id="add" class="uk-button uk-align-right uk-button-secondary uk-border-rounded">Adicionar</button></td></tr>';
                    $('tbody').html(html);
                }
            }

            $(document).on('click', '#add', function() {
                count++;
                dynamic_field(count);
            });

            $(document).on('click', '.remove', function() {
                count--;
                $(this).closest("tr").remove();
            });



        });

</script>

@endsection



