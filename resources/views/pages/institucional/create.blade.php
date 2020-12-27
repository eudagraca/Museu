@extends('admin')

@section('titulo')
    Criar uma Página institucional
@endsection

@section('pagina')
    Página Institucional
@endsection

@section('body-content')
    <div class="uk-section uk-section-small uk-flex uk-flex-center uk-margin-remove uk-width-1-1@s">
        <div class="uk-card uk-card-default uk-width-1-1@s uk-padding">
            <form method="POST" action="{{ route('institucional.store') }}" class="uk-form-stacked">
                @csrf
                <div class="uk-card-body uk-margin  uk-grid">
                    <div class="uk-margin uk-width-1-2@s">
                        <label for="titulo" class="uk-form-label uk-text-bold">
                            {{ __('Titulo') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('titulo') uk-form-danger @enderror" id="titulo" name="titulo"
                                type="text" value="{{ old('titulo') }}" required autofocus>
                            @error('titulo')
                                <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-width-1-2@s">
                        <label for="ficheiro" class="uk-form-label uk-text-bold">
                            {{ __('Ficheiro') }}
                        </label>
                        <div class="uk-form-control">
                            <div uk-form-custom="target: true" class="uk-width-1-1">
                                <input type="file" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" value="{{ old('ficheiro') }}" name="ficheiro">
                                <input class="uk-input uk-border-rounded @error('ficheiro') uk-form-danger @enderror" type="text"
                                    placeholder="Seleccione o ficheiro" disabled>
                            </div>
                            @error('ficheiro')
                                <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-width-1-1@s">
                        <label for="texto" class="uk-form-label uk-text-bold">
                            {{ __('Descrição') }}
                        </label>
                        <div class="uk-form-control">
                            <textarea class="uk-textarea uk-border-rounded @error('texto') uk-form-danger @enderror" id="texto" name="texto"
                                rows="4">{{ old('texto') }}</textarea>
                            @error('texto')
                                <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                {{-- Imagens --}}
                <table class="uk-table" id="user_table">
                    <thead>
                        <tr>
                            <th class="uk-text-bold">Imagem</th>
                            <th>Descrição</th>
                            <th>Acção</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <div class="uk-form-control uk-card-footer">
                    <button type="submit" class="uk-button uk-align-right uk-border-rounded uk-button-secondary">
                        {{ __('Publicar a página') }}
                    </button>
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
                html += '<td><div class="js-upload uk-placeholder uk-border-rounded uk-text-center" style="border: 1px dashed #000">'+
                        ' <span uk-icon="icon: cloud-upload"></span>'+
                            '<span class="uk-text-middle"> Adicione uma imagem </span>'+
                            '<div uk-form-custom>'+
                                '<input type="file" name=imagem[] accept="image/x-png,image/gif,image/jpeg" >'+
                            ' <span class="uk-link"> Clique aqui</span>'+
                            '</div>'+
                        '</div></td>';
                html += '<td><textarea class="uk-textarea uk-border-rounded" name="descricao[]" rows="3"></textarea></td>';
                if (number > 1) {
                    html +=
                        '<td><button type="button" name="remove" id="" class="uk-button uk-button-danger uk-align-right uk-border-rounded remove">Remove</button></td></tr>';
                    $('tbody').append(html);
                } else {
                    html +=
                        '<td><button type="button" name="add" id="add" class="uk-button uk-button-secondary uk-align-right uk-border-rounded">Adicionar</button></td></tr>';
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
