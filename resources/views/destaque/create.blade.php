@extends('admin')
@section('titulo')
    Adicionar imagem de destaque
@endsection

@section('pagina')
    Destaque
@endsection

@section('body-content')
    <div class="uk-section uk-section-small">
        <div class="uk-card uk-card-default uk-width-1-1@s uk-padding">
            <form method="post" class="uk-form-stacked  uk-margin-small-left" action="{{ route('destaque.store') }}">
                @csrf
                <div class="uk-margin" uk-grid>
                    <div class="js-upload uk-placeholder uk-border-rounded uk-margin-left uk-text-center uk-width-1-2@s"
                        style="border: 1px dashed #000">
                        <span uk-icon="icon: cloud-upload"></span>
                        <span class="uk-text-middle">Adicione uma imagem</span>
                        <div uk-form-custom>
                            <input type="file" name="imagem">
                            <span class="uk-link"> Clique aqui</span>
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label uk-text-bold" for="form-stacked-text">Activar esta imagem para
                            cabeçalho</label>
                        <div class="uk-form-controls">
                            <input class="uk-checkbox" type="checkbox" name="is_actived">
                        </div>
                    </div>
                </div>
                <div class="uk-form-control uk-card-footer uk-margin-large-top uk-padding-remove-bottom">
                    <input type="submit" name="save" id="save"
                        class="uk-align-right uk-border-rounded uk-button uk-button-primary" value="Gravar" />
                </div>


            </form>
        </div>
    </div>
@endsection
