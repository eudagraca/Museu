@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-remove-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('apresentacao') }}">Apresentação
                        da
                        EDM</a>
                </li>
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('rede.index') }}">Plano
                        operacional</a></li>
                <li><a href="#">Comercial</a></li>
            </ul>
        </div>
        <div uk-grid class="uk-margin-remove">
            <div class="uk-width-expand@m uk-width-1-1@m uk-padding-remove-left">
                <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Comercial</h4>

                <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
                    Tem como principal missão desenvolver todo esforço comercial de atracção, manutenção e desenvolvimento da base de clientes, por via da comunicação e divulgação, e disponibilização dos produtos e serviços da empresa aos segmentos de clientes de Alta, Média e Baixa Tensão, enquadrados em diversas categorias tarifárias.
                </p>

                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    A função comercial é coordenada centralmente pela Direcção Comercial, cuja missão é executar a visão estratégica da empresa e promover a adopção de políticas comerciais, normas e processos que garantam o alcance de resultados com máxima eficácia e eficiência. Para tal, conta com dois Departamentos dedicadas à gestão dos segmentos de clientes de Grande e Baixo Consumo e integra um Departamento de Marketing e Vendas, através dos quais assegura a implementação e melhoria contínua das políticas e dos processos comerciais. 
                </p>
                <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
                    Sendo que a função comercial da EDM é de cobertura nacional, foi necessário atribuir às Delegações, as competências operacionais de contratação de novos clientes, a gestão da base de clientes, no que respeita ao ciclo de facturação, gestão de dívida e serviços de suporte técnico-comerciais.
                </p>
            </div>
        </div>
    </div>

    <hr>

    <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>

           <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('rede.show', "categoriastarifarias") }}">Categorias tarifarias</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('rede.show', "perdasdeenergia") }}">Redução de perdas de energia</a></li>
        </ul>
    </div>
</div>
@endsection