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
                <li><a href="#">Detalhes</a></li>
            </ul>
        </div>
        <div class="uk-width-1-1@m uk-margin-remove-top uk-margin-remove-right">
            <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Detalhes</h4>


            <div class="uk-child-width-expand@s uk-text-center" uk-grid>
                <div class="uk-width-1-3@m">
                    <div class="uk-card  uk-card-body"><a class="uk-inline"
                            href="{{ asset('images/patrimonio/'.$patrimonio->imagem) }}"
                            data-caption="{{ $patrimonio->titulo }}">
                            <img src="{{ asset('images/patrimonio/'.$patrimonio->imagem) }}" width="300" height="300"
                                alt="" uk-cover>
                            <canvas width="300" height="300"></canvas>
                        </a></div>
                </div>
                <div class="uk-width-expand@m uk-margin-top">
                    <div class="uk-card uk-card-body uk-text-left">
                        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
                            <div class="uk-padding-remove"><span class="uk-text-bold">Localizacação: </span>
                                {{ $patrimonio->localizacao??'N/A' }}</div>
                            <div><span class="uk-text-bold">Ano de entrada em serviço:
                                </span>{{ $patrimonio->ano??'N/A' }}
                            </div>
                            <div><span class="uk-text-bold">Potência instalada aquando entrada em serviço:
                                </span>{{ $patrimonio->potencia_instalada_servico??'N/A' }}</div>


                        </div>

                        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>

                            <div class="uk-padding-remove"><span class="uk-text-bold">Potência instalada actual:
                                </span>{{ $patrimonio->potencia_disponivel??'N/A' }}</div>
                            <div><span class="uk-text-bold">Níveis de tensão: </span>
                                {{ $patrimonio->nivel??'N/A' }}
                            </div>
                            <div><span class="uk-text-bold">Transformadores de potência:
                                </span>{{ $patrimonio->transformadores??'N/A' }}
                            </div>

                        </div>

                        @if ($patrimonio->tipo == "linha")

                        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
                            <div class="uk-padding-remove"><span class="uk-text-bold">Barramento inicial: </span>
                                {{ $patrimonio->barramento_inicial??'N/A' }}
                            </div>
                            <div><span class="uk-text-bold">Barramento final:
                                </span>{{ $patrimonio->barramento_final??'N/A' }}
                            </div>
                            <div><span class="uk-text-bold">Capacidade da linha:
                                </span>{{ $patrimonio->capacidade_linhas??'N/A' }}</div>
                        </div>

                        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
                            <div class="uk-padding-remove"><span class="uk-text-bold">Condutor: </span>
                                {{ $patrimonio->condutor??'N/A' }}
                            </div>
                            <div><span class="uk-text-bold">Circuito:
                                </span>{{ $patrimonio->circuito??'N/A' }}
                            </div>
                            <div><span class="uk-text-bold">Comprimento:
                                </span>{{ $patrimonio->comprimento??'N/A' }}</div>
                        </div>

                        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
                            <div class="uk-padding-remove"><span class="uk-text-bold">Tipo de postes: </span>
                                {{ $patrimonio->tipo_torres??'N/A' }}
                            </div>
                            <div><span class="uk-text-bold">Tipo de condutor:
                                </span>{{ $patrimonio->tipo_condutor??'N/A' }}
                            </div>
                            <div><span class="uk-text-bold">Tipo de isoladores:
                                </span>{{ $patrimonio->tipo_isoladores??'N/A' }}</div>
                        </div>
                        <div class="uk-grid-divider uk-child-width-expand@s" uk-grid>
                            <div class="uk-padding-remove"><span class="uk-text-bold">Cabo de guarda:
                                </span>{{ $patrimonio->cabo_guarda??'N/A' }}</div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div><span class="uk-text-bold">Nota:
                </span>{{ $patrimonio->nota??'N/A' }}</div>


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
