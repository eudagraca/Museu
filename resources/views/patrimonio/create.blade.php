@extends('admin')

@section('titulo')
Património
@endsection

@section('pagina')
Património
@endsection

@section('body-content')
<div class="uk-section uk-section-small uk-flex uk-flex-center uk-margin-remove uk-width-1-1@s">
    <div class="uk-card uk-card-default uk-width-1-1@s uk-padding">
        <form method="POST" action="{{ route('patrimonio.store') }}" class="uk-form-stacked" enctype="multipart/form-data">
            @csrf
            <div class="uk-card-body uk-margin  uk-grid">
                <div class="uk-margin-small uk-width-1-2@s">
                    <label for="titulo" class="uk-form-label uk-text-bold">
                        {{ __('Titulo') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input uk-border-rounded @error('titulo') uk-form-danger @enderror" id="titulo"
                            name="titulo" type="text" value="{{ old('titulo') }}"  required autofocus>
                        @error('titulo')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="uk-width-1-2@s">
                    <label for="localizacao" class="uk-form-label uk-text-bold">
                        {{ __('Localização') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input uk-border-rounded @error('localizacao') uk-form-danger @enderror"
                            id="localizacao" name="localizacao" type="text" value="{{ old('localizacao') }}"
                            required autofocus>
                        @error('localizacao')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin-small uk-width-1-3@s">
                    <label for="ano" class="uk-form-label uk-text-bold">
                        {{ __('Ano de entrada em serviço') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input uk-border-rounded @error('ano') uk-form-danger @enderror" id="ano"
                            name="ano" type="text" value="{{ old('ano') }}"  required autofocus>
                        @error('ano')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin-small uk-width-1-3@s">
                    <label for="nivel" class="uk-form-label uk-text-bold">
                        {{ __('Níveis de tensão') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input uk-border-rounded @error('nivel') uk-form-danger @enderror" id="nivel"
                            name="nivel" type="text" value="{{ old('nivel') }}"  autofocus>
                        @error('nivel')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="uk-margin-small uk-width-1-3@s">
                    <label for="estado_actual" class="uk-form-label uk-text-bold">
                        {{ __('Estado actual:') }}
                    </label>
                    <div class="uk-form-control">
                        <input class="uk-input uk-border-rounded @error('estado_actual') uk-form-danger @enderror"
                            id="ponta_data" name="estado_actual" type="text" value="{{ old('estado_actual') }}" required
                            autofocus>
                        @error('estado_actual')
                        <span class="uk-text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="js-upload uk-placeholder uk-border-rounded uk-margin uk-text-center uk-width-1-3@s"
                    style="border: 1px dashed #000; margin-left: 40px">
                    <span uk-icon="icon: cloud-upload"></span>
                    <span class="uk-text-middle">Adicione uma imagem</span>
                    <div uk-form-custom>
                        <input type="file" required name="imagem">
                        <span class="uk-link"> Clique aqui</span>
                    </div>
                </div>

                <div class="uk-margin-small uk-width-1-4@s">
                    <label for="tipo" class="uk-form-label uk-text-bold">
                        {{ __('Tipo a registar') }}
                    </label>
                    <div class="uk-form-control">
                        <select name="tipo" required id="tipo" class="uk-select uk-border-rounded" onchange="setVisible();">
                            <option selected>Seleccione</option>
                            <option value="linha">Linha</option>
                            <option value="subestacao">Subestação</option>
                        </select>
                    </div>
                </div>

                <div class="uk-margin-small uk-width-1-3@s">
                    <label for="zona" class="uk-form-label uk-text-bold">
                        {{ __('Zona') }}
                    </label>
                    <div class="uk-form-control">
                        <select name="zona" required id="zona" class="uk-select uk-border-rounded">
                            <option selected>Seleccione</option>
                            <option value="centro">Centro</option>
                            <option value="centro norte">Centro Norte</option>
                            <option value="norte">Norte</option>
                            <option value="sul">Sul</option>
                        </select>
                    </div>
                </div>

                <div id="subestacao" uk-grid hidden>
                    <div class="uk-margin-small-top uk-width-1-3@s">
                        <label for="potencia_instalada_servico" class="uk-form-label uk-text-bold">
                            {{ __('Potência instalada aquando entrada em serviço') }}
                        </label>
                        <div class="uk-form-control">
                            <input
                                class="uk-input uk-border-rounded @error('potencia_instalada_servico') uk-form-danger @enderror"
                                id="potencia_instalada_servico" name="potencia_instalada_servico" type="text"
                                value="{{ old('potencia_instalada_servico') }}"  autofocus>
                            @error('potencia_instalada_servico')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="potencia_disponivel" class="uk-form-label uk-text-bold">
                            {{ __('Potência instalada actual') }}
                        </label>
                        <div class="uk-form-control">
                            <input
                                class="uk-input uk-border-rounded @error('potencia_disponivel') uk-form-danger @enderror"
                                id="potencia_disponivel" name="potencia_disponivel" type="text"
                                value="{{ old('potencia_disponivel') }}"  autofocus>
                            @error('potencia_disponivel')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>


                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="transformadores" class="uk-form-label uk-text-bold">
                            {{ __('Transformadores de potência') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('transformadores') uk-form-danger @enderror"
                                id="transformadores" name="transformadores" type="text"
                                value="{{ old('transformadores') }}"  autofocus>
                            @error('transformadores')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="ponta_data" class="uk-form-label uk-text-bold">
                            {{ __('Ponta/Data:') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('ponta_data') uk-form-danger @enderror"
                                id="ponta_data" name="ponta_data" type="text" value="{{ old('ponta_data') }}"
                                autofocus>
                            @error('ponta_data')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div id="linha" uk-grid hidden>
                    <div class="uk-margin uk-width-1-3@s">
                        <label for="configuracao" class="uk-form-label uk-text-bold">
                            {{ __('Configuração') }}
                        </label>
                        <div class="uk-form-control">
                            <input
                                class="uk-input uk-border-rounded @error('configuracao') uk-form-danger @enderror"
                                id="configuracao" name="configuracao" type="text"
                                value="{{ old('configuracao') }}"  autofocus>
                            @error('configuracao')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-width-1-3@s">
                        <label for="capacidade_linhas" class="uk-form-label uk-text-bold">
                            {{ __('Capacidade das linhas') }}
                        </label>
                        <div class="uk-form-control">
                            <input
                                class="uk-input uk-border-rounded @error('capacidade_linhas') uk-form-danger @enderror"
                                id="capacidade_linhas" name="capacidade_linhas" type="text"
                                value="{{ old('capacidade_linhas') }}"  autofocus>
                            @error('capacidade_linhas')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-width-1-3@s">
                        <label for="circuito" class="uk-form-label uk-text-bold">
                            {{ __('Circuito') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('circuito') uk-form-danger @enderror"
                                id="circuito" name="circuito" type="text"
                                value="{{ old('circuito') }}"  autofocus>
                            @error('circuito')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="comprimento" class="uk-form-label uk-text-bold">
                            {{ __('Comprimento') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('comprimento') uk-form-danger @enderror"
                                id="comprimento" name="comprimento" type="text" value="{{ old('comprimento') }}"
                                autofocus>
                            @error('comprimento')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="barramento_inicial" class="uk-form-label uk-text-bold">
                            {{ __('Barramento inicial') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('barramento_inicial') uk-form-danger @enderror"
                                id="barramento_inicial" name="barramento_inicial" type="text" value="{{ old('barramento_inicial') }}"
                                autofocus>
                            @error('barramento_inicial')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="barramento_final" class="uk-form-label uk-text-bold">
                            {{ __('Barramento final') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('barramento_final') uk-form-danger @enderror"
                                id="barramento_final" name="barramento_final" type="text" value="{{ old('barramento_final') }}"
                                autofocus>
                            @error('barramento_final')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="condutor" class="uk-form-label uk-text-bold">
                            {{ __('Condutor') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('condutor') uk-form-danger @enderror"
                                id="condutor" name="condutor" type="text" value="{{ old('condutor') }}"
                                autofocus>
                            @error('condutor')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="tipo_torres" class="uk-form-label uk-text-bold">
                            {{ __('Tipo de torres') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('tipo_torres') uk-form-danger @enderror"
                                id="tipo_torres" name="tipo_torres" type="text" value="{{ old('tipo_torres') }}"
                                autofocus>
                            @error('tipo_torres')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="tipo_condutor" class="uk-form-label uk-text-bold">
                            {{ __('Tipo de condutor') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('tipo_condutor') uk-form-danger @enderror"
                                id="tipo_condutor" name="tipo_condutor" type="text" value="{{ old('tipo_condutor') }}"
                                autofocus>
                            @error('tipo_condutor')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="tipo_isoladores" class="uk-form-label uk-text-bold">
                            {{ __('Tipo de isoladores') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('tipo_isoladores') uk-form-danger @enderror"
                                id="tipo_isoladores" name="tipo_isoladores" type="text" value="{{ old('tipo_isoladores') }}"
                                autofocus>
                            @error('tipo_isoladores')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin-small uk-width-1-3@s">
                        <label for="cabo_guarda" class="uk-form-label uk-text-bold">
                            {{ __('Cabo de guarda') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input uk-border-rounded @error('cabo_guarda') uk-form-danger @enderror"
                                id="cabo_guarda" name="cabo_guarda" type="text" value="{{ old('cabo_guarda') }}"
                                autofocus>
                            @error('cabo_guarda')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="uk-width-1-1@s uk-margin-small">
                    <label for="nota" class="uk-form-label uk-text-bold">
                        {{ __('Nota') }}
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
                    {{ __('Actualizar') }}
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
