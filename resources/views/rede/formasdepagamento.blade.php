@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">
    <ul class="uk-breadcrumb uk-align-right">
            <li><a href="{{ route('rede.index') }}">Rede da EDM</a></li>
            <li><a href="{{ route('rede.show', "comercial") }}">Comercial</a></li>
            <li><a href="">Formas de Pagamento de Facturas.</a></li>
    </ul>
    <div class="uk-width-1-1@m" id="governanca">
        <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">Rede da EDM</h3>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Comercial</h4>
        <h4 class="uk-heading-bullet uk-text-bolder uk-text-primary uk-margin-left">Formas de Pagamento de Facturas.</h4>

        <p class="uk-dropcap uk-text uk-margin-left uk-margin-right uk-text-justify">
            1. <b> Nos balcões da EDM </b>: Em todas as dependências da EDM, no horário entre as 08:00h e 14:30h, de segunda a sexta-feira.
        </p>

        <p class="uk-text uk-margin-left uk-margin-large-top uk-margin-right uk-text-justify">
            <b>2. Pagamento no ATM</b>

            <ul class="uk-margin-left uk-text uk-text-justify"><li>Pode pagar a sua conta de energia com toda a comodidade e conforto através dos cartões electrónicos da rede VISA, nas
            ATM\'s do Millennium BIM e da Rede Ponto24, inserindo os dados sobre a Entidade, Referência e valor fornecidos na
            Factura..</li>
            </ul>
        </p>

        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            <b>3. Débito Directo</b>

            <ul class="uk-margin-left uk-text uk-text-justify"><li>É um meio de pagamento automático da sua factura através do seu Banco. É flexível e confiável. Para aderir a este
            serviço, contacte o seu Banco e preencha o formulário "Autorização de débito periódico".</li>
            <li>A partir da sua autorização, o Banco passa a efectuar mensalmente o pagamento da sua factura por débito em sua conta
            bancária.</li>
            </ul>
        </p>
        <p class="uk-text uk-margin-left uk-margin-right uk-text-justify">
            <b>4. CREDELEC</b>

            <ul class="uk-margin-left uk-text uk-text-justify"><li>Para a compra de energia pré-paga (Credelec), o cliente deverá ter consigo o número do contador pré-pago e
            certificar-se sempre de que o número é actual e corresponde ao contador instalado na sua residência ou estabelecimento.</li>
            <li>Canais disponíveis para a venda de energia:
                <ul class"uk-margin-left">
                    <li>Postos de venda da EDM e Privados; </li>
                    <li>ATM's (Millennium BIM e Rede Ponto 24);</li>
                    <li>Mobile e Internet Banking (Millennium IZI, BCI Directo, Standard Bank Mobile)</li>
                    <li>Carteira Móvel (M-Pesa; mKesh e e-mola); e</li>
                    <li>Vendedores de rua autorizados (Top-Up; Howard Johnson e recargAqui).</li>
                </ul>
            </li>
            </ul>
        </p>


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
