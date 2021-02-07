@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
            <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
            <li><a href="">Comercial</a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Comercial</h4>

        <p class="uk-dropcap uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Tem como principal missão desenvolver todo esforço comercial de atracção, manutenção e desenvolvimento da base de
            clientes, por via da comunicação e divulgação, e disponibilização dos produtos e serviços da empresa aos segmentos de
            clientes de Alta, Média e Baixa Tensão, enquadrados em diversas categorias tarifárias.
        </p>

        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            A função comercial é coordenada centralmente pela Direcção Geral Comercial, cuja missão é executar a visão estratégica
            da empresa e promover a adopção de políticas comerciais, normas e processos que garantam o alcance de resultados com
            máxima eficácia e eficiência. Para tal, conta com duas Direcções Centrais dedicadas à gestão dos segmentos de clientes
            de Grande e Baixo Consumo e integra um Departamento de Marketing e Vendas, através dos quais assegura a implementação e
            melhoria contínua das políticas e dos processos comerciais.
        </p>
        <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
            Sendo que a função comercial da EDM é de cobertura nacional, foi necessário atribuir às Delegações, as competências
            operacionais de contratação de novos clientes, a gestão da base de clientes, no que respeita ao ciclo de facturação,
            gestão de dívida e serviços de suporte técnico-comerciais.
        </p>
        <h5 class="uk-margin-large-left uk-text-bold uk-margin-large-right uk-text-justify">
            Serviços essenciais geridos pela função comercial
        </h5>
        <ul class="uk-text uk-margin-large-left uk-text-justify">
            <li>Fornecimento de energia eléctrica em Baixa, Média e Alta tensão;</li>
            <li>Fornecimento de energia em regime temporário (obras, espectáculos, eventos, etc.);</li>
            <li>Ligação de novos clientes;</li>
            <li>Reparação de avarias na rede eléctrica - Piquete;</li>
            <li>Cobrança de facturas (Pós-pago) / Venda de energia (pré-pago);</li>
            <li>Central de Atendimento (1455); Portal do Cliente: <a href="https://cliente.edm.co.mz" class="uk-button uk-button-text uk-text-lowercase uk-text-primary">https://cliente.edm.co.mz;</a> e</li>
            <li>Linha Verde para Denúncias (800 145 145); e</li>
            <li>Provedoria do Cliente.</li>
        </ul>

        <hr>

        <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-large-left">
            <ul class="uk-nav uk-nav-default uk-align-left">
                <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
                <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                        href="{{ route('rede.show', "comercial") }}">Comercial</a></li>
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
