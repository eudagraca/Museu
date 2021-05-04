@extends('admin')

@section('titulo')
Linha do tempo
@endsection

@section('pagina')
Linha do tempo
@endsection

@section('body-content')
<div class="uk-section uk-section-small uk-flex uk-flex-center uk-margin-remove uk-width-1-1@s">
    <div class="uk-card uk-card-default uk-width-1-1@s uk-padding">
        <form method="POST" action="{{ route('linhaTempo.store') }}" class="uk-form-stacked">
            @csrf
            <div class="uk-card-body uk-margin  uk-grid">
                <div class="uk-margin-small uk-width-1-3@s">
                    <label for="titulo" class="uk-form-label uk-text-bold">
                        {{ __('Ano') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input uk-border-rounded @error('ano') uk-form-danger @enderror" id="ano"
                            name="ano" type="date" value="{{ old('ano') }}"  required autofocus>
                        @error('ano')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="uk-width-expand@m">
                    <label for="nota" class="uk-form-label uk-text-bold">
                        {{ __('Detalhes') }}
                    </label>
                    <div class="uk-form-control">
                        <textarea class="uk-textarea uk-border-rounded @error('nota') uk-form-danger @enderror"
                            id="nota" name="nota" rows="4">{{ old('nota') }}</textarea>
                        @error('nota')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="uk-form-control uk-card-footer">
                <button type="submit" class="uk-button uk-align-right uk-border-rounded uk-button-secondary">
                    {{ __('Registar') }}
                </button>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    window.onload = function() {
    var tipo = document.getElementById("tipo");
    var tipoValue = document.getElementById("tipo").value;

        if(tipoValue == "linha"){
            document.getElementById("linha").setAttribute("hidden", false);
            document.getElementById("subestacao").setAttribute("hidden", true);
        }else if(tipoValue == "subestacao"){
            document.getElementById("subestacao").setAttribute("hidden", false);
            document.getElementById("linha").setAttribute("hidden", true)
        }
    }

    function setVisible() {
        var tipoValue = document.getElementById("tipo").value;
        if(tipoValue == "linha"){
            document.getElementById("linha").removeAttribute("hidden");
            document.getElementById("subestacao").setAttribute('hidden', 'true');
        }else if(tipoValue == "subestacao"){
            document.getElementById("subestacao").removeAttribute("hidden");
            document.getElementById("linha").setAttribute('hidden', 'true');
        }
    }
</script>
@endsection
