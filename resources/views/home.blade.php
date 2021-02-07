@extends('layouts.single-app')

@section('content')

<div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
        uk-slideshow="min-height: 200; max-height: 450; animation: scale; autoplay: true; autoplay-interval: 5000">
        <ul class="uk-slideshow-items uk-background-contain">
            <li class="uk-background-contain uk-flex uk-flex-center uk-flex-middle">
                <img src="{{ asset('assets/images/subestacao.jpeg') }}" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-background-secondary">
                    <p class="uk-margin-remove uk-text-normal" style="color: white">Hidroelectrica de Revue Sussundenga
                        Manica</p>
                </div>
            </li>
            <li class="uk-background-contain uk-flex uk-flex-center uk-flex-middle">
                <img src="{{ asset('assets/images/372.jpeg') }}" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-background-secondary uk-position-bottom uk-text-center">
                    <p class="uk-margin-remove uk-text-normal" style="color: white">372.jpeg.</p>
                </div>
            </li>
            <li class="uk-background-contain uk-flex uk-flex-center uk-flex-middle">
                <img src="{{ asset('assets/images/betonagem_infraestrutura.jpeg') }}" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-background-secondary">
                    <p class="uk-margin-remove uk-text-normal" style="color: white">Betonagem da infraestrutura.</p>
                </div>
            </li>
            <li class="uk-background-contain uk-flex uk-flex-center uk-flex-middle">
                <img src="{{ asset('assets/images/subestacao_n2.jpeg') }}" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-background-secondary">
                    <p class="uk-margin-remove uk-text-normal" style="color: white">Subestação n*2 (S.E.2) da cidade
                        de Maputo, 30/11 Kv.</p>
                </div>
            </li>
            <li class="uk-background-contain uk-flex uk-flex-center uk-flex-middle">
                <img src="{{ asset('assets/images/central_de_chicamba.jpeg') }}">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-background-secondary">
                    <p class="uk-margin-remove uk-text-normal">Central de chicamba, conditas de agua</p>
                </div>
            </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
            uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
            uk-slideshow-item="next"></a>
    </div>
    <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
</div>


<div class="uk-container uk-margin-large-bottom" id="museu">
    <h2 class="uk-heading-bullet uk-text-bolder uk-margin-large-left uk-text-primary">Museu Virtual</h2>

    <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
        O Museu da Electicidade de Moçambique é um espaço pedagógico de carácter científico e tecnológico, onde, de
        forma lúdica e interactiva, poder-se-á ter acesso a informações sobre o passado e o presente desta
        instituição.
    </p>
</div>

<div class="uk-container uk-margin-large-bottom" id="museu">
    <h2 class="uk-heading-bullet uk-text-bolder uk-margin-large-left uk-text-primary">Missão</h2>

    <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
        MUSEU VIRTUAL da EDM tem como proposito a promoção de Electricidade de Moçambique, enquanto conceito, imagem e paradigma
        de Electrificação e valor histórico das suas Infraestruturas.
    </p>
</div>

<div class=" uk-background-secondary">
    <p class="uk-text-center uk-margin-remove uk-padding-small uk-text-light">
        &copy; Todos direitos reservados
        <script>
            document.write(new Date().getFullYear());
        </script>, Electricidade de Moçambique.
    </p>
</div>
@endsection
