@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-subnav uk-subnav-pill" uk-switcher>
        <li><a href="#">Comercial</a></li>
        <li><a href="#">Distribuição</a></li>
        <li><a href="#">Geração</a></li>
        <li><a href="#">Transporte</a></li>
    </ul>

    <ul class="uk-switcher uk-margin">
        <li>
            <div uk-grid uk-grid uk-lightbox="animation: slide"
                uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/Mocuba_Central_Solar.JPG') }}" data-caption="Caption 1">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/Mocuba_Central_Solar.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/Mocuba_Central_Solar.JPG') }}" data-caption="Caption 1">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/Mocuba_Central_Solar.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/372.jpeg') }}" data-caption="Caption 1">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/372.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/Mocuba_Central_Solar.JPG') }}" data-caption="Caption 1">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/Mocuba_Central_Solar.JPG') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/central_chicamba.jpeg') }}" data-caption="Caption 1">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/central_chicamba.jpeg') }}" alt="">
                    </a>
                </div>

                <div>
                    <a class="uk-inline uk-border-rounded" href="{{ secure_asset('/assets/images/Mocuba_Central_Solar.JPG') }}" data-caption="Caption 1">
                        <img style="height: 120px;" src="{{ secure_asset('/assets/images/Mocuba_Central_Solar.JPG') }}" alt="">
                    </a>
                </div>

            </div>
        </li>
        <li><a href="#">2017</a></li>
        <li><a href="#">2018</a></li>
        <li><a href="#">2018</a></li>
    </ul>
</div>

@endsection
