@extends('layouts.single-app')

@section('content')


    <div class="uk-container uk-margin-large-bottom uk-margin-large-top">
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

                <div class="uk-margin-small">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Localização | endereço</label>
                    <div class="uk-form-controls">

                        <label id="form-stacked-text" >Direção da Academia da EDM</label><br>
                        <label id="form-stacked-text">Av, Eduardo Mondlane nº 1352, 2º Andar, Maputo - Moçambique</label>
                    </div>
                </div>
                <div class="uk-margin-small">
                    <label class="uk-form-label uk-text-bold" for="form-stacked-text">Telefone</label>
                    <div class="uk-form-controls">
                        <label id="form-stacked-text" >+258 843400098 <br> </label>
                        <label id="form-stacked-text" >+258 829970091</label>
                    </div>
                </div>

                <p class="uk-text uk-text-justify">
                    Caro visitante, pode entrar em contacto connosco apartir do formulário ao lado. Teremos imenso prazer em poder conversar | sanar as suas dúvidas. <br>Até logo! :)
                </p>
            </div>
        </div>

    </div>
@endsection
