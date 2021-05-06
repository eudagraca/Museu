@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top uk-margin-small-right">
    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-remove-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal" href="#">Patrimonio da rede eléctrica da
                        EDM</a>
                </li>
                <li><a href="#">Transmissão Sul</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove-top uk-margin-remove-right">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Transmissão - Divisão de
                transporte Sul</h4>

            <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                <li class="uk-h2"><a href="#">Subestações</a></li>
                <li><a href="#">Linhas</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>
                    <h3 class="uk-heading-divider  uk-text-bold uk-margin-small-top">Subestações</h3>
                    <div uk-grid>
                        @forelse($patrimonios as $patrimonio)
                        @if ($patrimonio->tipo == 'subestacao')
                        <div class="uk-grid-small uk-width-1-2@m">
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove"
                                uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <a class="uk-inline" href="{{ asset('images/patrimonio/'.$patrimonio->imagem) }}"
                                        data-caption="{{ $patrimonio->titulo }}">
                                        <img src="{{ asset('images/patrimonio/'.$patrimonio->imagem) }}" width="600"
                                            height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">{{ $patrimonio->titulo }}</h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>:
                                            {{ $patrimonio->localizacao }}
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Potência instalada actual:</spa>
                                            {{ $patrimonio->potencia_disponivel }}
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: {{ $patrimonio->nivel }}
                                        </p>

                                        <p class="uk-margin-small-top">
                                            <a href="{{ route('patrimonio.details', $patrimonio->id) }}"
                                                class="uk-button uk-align-right uk-margin-remove uk-text-primary uk-button-text">Mais
                                                detalhes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @empty

                        <p class="uk-text-bolder uk-text-center">Nenhuma subestação para esta região</p>

                        @endforelse
                    </div>
                </li>
                <li>
                    <h3 class="uk-heading-divider uk-width-1-1@s uk-text-bold uk-margin-top">Linhas</h3>
                    <div uk-grid >
                        @forelse ($patrimonios as $patrimonio)
                        @if ($patrimonio->tipo == 'linha')
                        <div class="uk-grid-small uk-width-1-2@m">
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-padding-remove"
                                uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <a class="uk-inline" href="{{ asset('images/patrimonio/'.$patrimonio->imagem) }}"
                                        data-caption="{{ $patrimonio->titulo }}">
                                        <img src="{{ asset('images/patrimonio/'.$patrimonio->imagem) }}" width="600"
                                            height="500" alt="" uk-cover>
                                        <canvas width="600" height="500"></canvas>
                                    </a>
                                </div>
                                <div>
                                    <div class="uk-card-body uk-padding-small uk-padding-left">
                                        <h4 class="uk-text-bold uk-margin-remove">{{ $patrimonio->titulo }}</h4>
                                        <p class="uk-margin-small">
                                            <spa class="uk-text-bold">Localizacação</spa>:
                                            {{ $patrimonio->localizacao }}
                                        </p>
                                        <p class="uk-margin-remove">
                                            <spa class="uk-text-bold">Potência instalada actual:</spa>
                                            {{ $patrimonio->potencia_disponivel }}
                                        </p>
                                        <p class="uk-margin-small-top">
                                            <spa class="uk-text-bold">Níveis de tensão</spa>: {{ $patrimonio->nivel }}
                                        </p>

                                        <p class="uk-margin-small-top">
                                            <a href="{{ route('patrimonio.details', $patrimonio->id) }}"
                                                class="uk-button uk-align-right uk-margin-remove uk-text-primary uk-button-text">Mais
                                                detalhes</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @empty

                        <p class="uk-text-bolder uk-text-center">Nenhuma subestação para esta região</p>

                        @endforelse
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <hr class="uk-margin-large-top uk-width-1-1@s">
    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('patrimonio.show', "geracao") }}">Geração</a></li>
        </ul>
    </div>
</div>
@endsection
