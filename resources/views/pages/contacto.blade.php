@extends('layouts.app')

@section('content')
    <div class="uk-section uk-section-primary uk-margin-large-bottom uk-padding-remove-bottom">
        <div class="uk-container" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
            <nav class="uk-navbar uk-background-primary" uk-navbar style="position: relative; z-index: 980;">
                <div class="uk-navbar-left">
                    <a class="uk-navbar-item uk-logo" href="{{ route('home') }}">
                        <h4 class="uk-heading-bullet uk-text-normal uk-margin-large-left uk-text-primary">Página inicial
                        </h4>
                    </a>
                </div>

            </nav>
        </div>
    </div>

    <div class="uk-container uk-margin-large-bottom">
        <h2 class="uk-heading-bullet uk-text-bold uk-text-primary uk-margin-small-bottom">
            Contacto</h2>
        <div uk-grid>
            <div class="uk-width-1-2@s">

                <form class="uk-form-stacked ">

                    <div>

                        <div class="uk-margin">
                            <label class="uk-text-normal uk-form-label uk-text-bold" for="nome">Nome<span class="uk-text-danger uk-text-small uk-text-light"> *</span></label>
                            <input type="text" name="nome" id="nome" class="uk-input" placeholder="Nome">
                        </div>

                        <div class="uk-margin">
                            <label class="uk-text-normal uk-form-label uk-text-bold" for="telefone">Telefone<span class="uk-text-warning uk-text-small uk-text-light"> Opcional</span></label>
                            <input type="text" name="telefone" id="telefone" class="uk-input" placeholder="Telefone">
                        </div>

                        <div class="uk-margin">
                            <label class="uk-text-normal uk-form-label uk-text-bold" for="email">Endereço email<span class="uk-text-danger uk-text-small uk-text-light"> *</span></label>
                            <input type="text" name="email" id="email" class="uk-input" placeholder="Endereço email">
                        </div>

                        <div class="uk-margin">
                            <label class="uk-text-normal uk-form-label uk-text-bold" for="conteudo">Mensagem<span class="uk-text-danger uk-text-small uk-text-light"> *</span></label>
                            <textarea rows="3" name="conteudo" id="conteudo" class="uk-textarea"
                                placeholder="Conteúdo da mensagem"></textarea>
                        </div>

                        <p class="uk-text-lighter uk-margin-remove-bottom"><span class="uk-text-danger">(*)</span> Campos obrigatórios</p>

                        <div class="uk-margin uk-align-right">
                            <button
                                class="uk-button uk-button-primary uk-border-rounded uk-box-shadow-hover-xlarge">Enviar</button>
                        </div>

                    </div>

                </form>
            </div>


            <div class="uk-width-1-2@s uk-margin-top">

                <p class="uk-text uk-text-justify">
                    Caro visitante, pode entrar em contacto connosco apartir do formulário ao lado. Teremos imenso prazer em poder conversar | sanar as suas dúvidas. <br>Até logo! :)
                </p>
            </div>
        </div>

    </div>
@endsection
