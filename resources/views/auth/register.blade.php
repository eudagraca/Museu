@extends('admin')
@section('titulo')
Adicionar imagem a galeria
@endsection

@section('pagina')
Galeria
@endsection

@section('body-content')
<div class="conntainer">
    @include('layouts.flash-messages')
    <div class="uk-section uk-padding uk-section-small uk-flex uk-flex-center uk-width-1-1@s">
        <div class="uk-card uk-card-default uk-width-1-1@s uk-padding">
            <form method="POST" action="{{ route('usuario.store') }}" class="uk-form-stacked">
                @csrf
                <div class="uk-card-body uk-margin  uk-grid">
                    <div class="uk-margin uk-width-1-2@s">
                        <label for="name" class="uk-form-label">
                            {{ __('Nome do usuário') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input @error('name') uk-form-danger @enderror" id="name" name="name"
                                type="text" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-width-1-2@s">
                        <label for="email" class="uk-form-label">
                            {{ __('E-mail') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input @error('email') uk-form-danger @enderror" id="email" name="email"
                                type="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                            @error('email')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label for="username" class="uk-form-label">
                            {{ __('Nome de acesso') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input @error('username') uk-form-danger @enderror" id="username"
                                name="username" type="text" value="{{ old('username') }}" required
                                autocomplete="username" autofocus>
                            @error('username')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-width-1-2@s">
                        <label for="password" class="uk-form-label">
                            {{ __('Senha') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input @error('password') uk-form-danger @enderror" id="username"
                                name="password" type="text" required autocomplete="password" autofocus>
                            @error('password')
                            <span class="uk-text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="uk-width-1-2@s uk-margin-top">
                        <label for="password-confirm" class="uk-form-label">
                            {{ __('Confirme a Senha') }}
                        </label>
                        <div class="uk-form-control">
                            <input class="uk-input @error('password-confirm') uk-form-danger @enderror"
                                id="password-confirm" type="text" required name="password-confirm"
                                autocomplete="new-password" autofocus>
                        </div>
                    </div>
                </div>
                <div class="uk-form-control uk-card-footer">
                    <button type="submit" class="uk-button uk-align-right uk-border-rounded uk-button-secondary">
                        {{ __('Registar usuário') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
