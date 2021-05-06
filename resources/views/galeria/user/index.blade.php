@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-subnav uk-subnav-pill" uk-switcher>
        <li><a href="#">BARRAGENS</a></li>
        <li><a href="#">HIDROELÉCTRICAS</a></li>
        <li><a href="#">LINHAS</a></li>
        <li><a href="#">SUBESTAÇÕES</a></li>
        <li><a href="#">GENÉRICAS</a></li>
    </ul>

    <ul class="uk-switcher uk-margin">

        {{-- BARRAGEM  --}}
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
                @foreach($galeria as $item)
                @if (strtoupper($item->ponto) == 'BARRAGEM')

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ asset('images/galeria/'.$item->imagem) }}"
                        data-caption="{{$item->descricao}}">
                        <img style="height: 120px;" src="{{ asset('images/galeria/'.$item->imagem) }}" alt="">
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </li>
        {{-- HIDROELECTRICA  --}}
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
                @foreach($galeria as $item)
                @if (strtoupper($item->ponto)== 'HIDROELECTRICA')

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ asset('images/galeria/'.$item->imagem) }}"
                        data-caption="{{$item->descricao}}">
                        <img style="height: 120px;" src="{{ asset('images/galeria/'.$item->imagem) }}" alt="">
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </li>
        {{-- LINHA  --}}
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
                @foreach($galeria as $item)
                @if (strtoupper($item->ponto)== 'LINHA')

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ asset('images/galeria/'.$item->imagem) }}"
                        data-caption="{{$item->descricao}}">
                        <img style="height: 120px;" src="{{ asset('images/galeria/'.$item->imagem) }}" alt="">
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </li>
        {{-- SUBESTAÇÃO  --}}
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
                @foreach($galeria as $item)
                @if (strtoupper($item->ponto)== 'SUBESTAÇÃO')

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ asset('images/galeria/'.$item->imagem) }}"
                        data-caption="{{$item->descricao}}">
                        <img style="height: 120px;" src="{{ asset('images/galeria/'.$item->imagem) }}" alt="">
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </li>
        {{-- GENERICA  --}}
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">
                @foreach($galeria as $item)
                @if (!in_array(strtoupper($item->ponto), ['SUBESTAÇÃO', 'LINHA', 'HIDROELECTRICA', 'BARRAGEM']))

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ asset('images/galeria/'.$item->imagem) }}"
                        data-caption="{{$item->descricao}}">
                        <img style="height: 120px;" src="{{ asset('images/galeria/'.$item->imagem) }}" alt="">
                    </a>
                </div>
                @endif
                @endforeach
            </div>
        </li>



    </ul>
</div>

@endsection
