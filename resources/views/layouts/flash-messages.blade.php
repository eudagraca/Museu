@if ($message = Session::get('success'))
<div class="uk-alert-success" uk-alert>
    <a href="#" class="uk-alert-close" uk-close></a>
    <p>{{ $message }}</p>
</div>
@endif


@if ($message = Session::get('error'))
<div class="uk-alert-danger" uk-alert>
    <a href="#" class="uk-alert-close" uk-close></a>
    <p>{{ $message }}</p>
</div>
@endif


@if ($message = Session::get('warning'))
<div class="uk-alert-warning" uk-alert>
    <a href="#" class="uk-alert-close" uk-close></a>
    <p>{{ $message }}</p>
</div>
@endif


@if ($message = Session::get('info'))
<div class="uk-alert-primary" uk-alert>
    <a href="#" class="uk-alert-close" uk-close></a>
    <p>{{ $message }}</</p>
</div>
@endif


@if ($errors->any())
<div class="uk-alert-danger" uk-alert>
    <a href="#" class="uk-alert-close" uk-close></a>
   <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
