@extends('layouts.single-app')

@section('content')

<div class="uk-margin-large-top uk-margin-remove-bottom">
    <div class="uk-container">
        <h2 class="uk-heading-bullet uk-text-bolder uk-margin-large-left uk-text-primary">Samuel Checo</h2>
        <p class="uk-margin-large-left uk-text-black">Acompanhe de perto a história de vida de Samuel Checo, funcionário
            da EDM</p>
    </div>
</div>


<div class="uk-container uk-margin-large-bottom">

    <p class="uk-text-center uk-text-primary"><span uk-icon="icon: chevron-down; ratio: 1.5"></span></p>

    <hr class="uk-margin-medium-top">

    <hr class="uk-margin-medium-top">
    <div class="uk-width-3-4 uk-align-center uk-box-shadow-hover-medium">
        <iframe src="https://www.youtube.com/embed/KKFwx62zH3s" width="1200" height="600" frameborder="0"
            allowfullscreen uk-responsive uk-video="automute: false"></iframe>
    </div>
</div>

@endsection
