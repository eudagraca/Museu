@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
            <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
            <li><a href="{{ route('rede.show', "comercial") }}">Comercial</a></li>
            <li><a href="">Formas de Atendimento ao Cliente</a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Comercial</h4>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Formas de Atendimento ao Cliente</h4>

        <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
            1. <b>Presencial </b>: O cliente dirige-se à dependência da EDM para expor a sua preocupação.
        </p>

        <p class="uk-text uk-margin-left uk-margin-large-top uk-margin-right uk-text-justify">
            <b>2. Ao telefone</b>

            <ul class="uk-margin-left uk-text uk-text-justify"><li>Para a participação de avarias de natureza eléctrica, reclamações, sugestões, ou informações diversas, a EDM dispõe de
            uma Central de Atendimento, que pode ser acedida através do número 1455 (sem prefixo e válido para todas as redes ou
            operadoras).</li>
            <li>Para os casos de denúncias, o cliente deve contactar a EDM através da Linha Verde para Denúncias, pelo número 800 145
            145 (chamada grátis) ou através da Provedoria do Cliente.</li>
            </ul>
        </p>

        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            <b>3. Provedoria do Cliente</b>

            <ul class="uk-margin-left uk-text uk-text-justify"><li>Em caso de insatisfação, perante a resposta obtida em primeira instância, ou simplesmente devido à inacção ou silêncio
            da Empresa, o cliente pode dirigir-se à Provedoria do Cliente pelos contactos acima mencionados ou ainda através do
            portal: <span class="uk-button uk-button-text uk-text-lowercase uk-text-primary uk-text-bold">https://cliente.edm.co.mz.</span></li>
            <li>Para os casos de denúncias, o cliente deve contactar a EDM através da Linha Verde para Denúncias, pelo número 800 145
            145 (chamada grátis) ou através da Provedoria do Cliente.</li>
            </ul>
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
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text" href="{{ route('rede.show', "servicos") }}">Serviço essencial</a></li>
                <li class="uk-flex uk-flex-left" ><a class="uk-button uk-button-text" href="{{ route('rede.show', "estruturaclientes") }}">Estrutura de clientes</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text" href="{{ route('rede.show', "atendimentoaocliente") }}">Forma de atentimento</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text" href="{{ route('rede.show', "formasdepagamento") }}">Forma de pagamento</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text" href="{{ route('rede.show', "categoriastarifarias") }}">Categorias tarifarias</a></li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text" href="{{ route('rede.show', "perdasdeenergia") }}">Redução de perdas de energia</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
