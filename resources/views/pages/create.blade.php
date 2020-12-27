@extends('admin')

@section('titulo')
    Criar uma Página
@endsection

@section('pagina')
    Página
@endsection

@section('body-content')
    <div class="uk-section uk-section-small uk-flex uk-flex-center uk-margin-remove uk-width-1-1@s">
        <div class="uk-card uk-card-default uk-width-1-1@s uk-padding">
            <form method="POST" action="{{ route('pagina.store') }}" class="uk-form-stacked">
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
                                <input type="file" value="{{ old('ficheiro') }}" name="ficheiro">
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
                <div class="uk-form-control uk-card-footer">
                    <button type="submit" class="uk-button uk-align-right uk-border-rounded uk-button-secondary">
                        {{ __('Publicar a página') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
