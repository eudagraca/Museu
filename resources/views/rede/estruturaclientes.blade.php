@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
            <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
            <li><a href="{{ route('rede.show', "comercial") }}">Comercial</a></li>
            <li><a href="">Estrutura de Clientes</a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Comercial</h4>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Estrutura de Clientes</h4>

        <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
            A tabela abaixo apresenta o saldo de clientes a 31 de Dezembro de 2019 por delegação, região e por categoria tarifária.
        </p>

        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            A gestão de clientes é uma tarefa extremamente complexa para a função comercial, dado que cerca de 92% são residências e
            não estão georreferenciados, o que torna difícil vencer a batalha contra perdas não técnicas na rede de distribuição.
        </p>

        <div class="uk-width-1-2@m uk-align-center" uk-lightbox="animation: slide">
            <a class="uk-inline" href="{{ secure_asset('assets/images/infraestrutura_cliente.png') }}"
                data-caption="Fonte: Plano de Negócio da EDM 2020 - 2024">
                <img src="{{ secure_asset('assets/images/infraestrutura_cliente.png') }}" class="uk-border-rounded" width="750px"
                    height="133px" alt="" uk-img></a>
        </div>
        <i class="uk-text-small uk-text-danger uk-margin-left uk-margin-right uk-text-justify">
            Fonte: Plano de Negócio da EDM 2020 - 2024
        </i>

        <hr>

        <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
            <ul class="uk-nav uk-nav-default uk-align-left">
                <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
               <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "servicos") }}">Serviço essencial</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "estruturaclientes") }}">Estrutura de clientes</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "atendimentoaocliente") }}">Forma de atentimento</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "formasdepagamento") }}">Forma de pagamento</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "categoriastarifarias") }}">Categorias tarifarias</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "perdasdeenergia") }}">Redução de perdas de energia</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
