@extends('layouts.single-app')

@section('content')
<div class="uk-container uk-margin-large-bottom uk-margin-large-top">

    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('historia.index') }}">História de
                        eletrificação</a></li>

                <li><a href="#">História de comercialização</a></li>
            </ul>
        </div>
        <div uk-grid class="uk-margin-remove-top">
            <div class="uk-width-expand@m uk-width-1-1@m uk-margin-remove">
                <h3 class="uk-heading-bullet uk-text-bolder uk-text-primary">História da Comercialização
                </h3>


                <p class="uk-dropcap uk-text uk-text-justify">As actividades comerciais, no tempo dos Serviços Municipalizados de Água e Electricidade (S.M.A.E), começaram por ser uma secção que estava nos Serviços Administrativos, sendo dirigidas pelo Chefe da 2ª Repartição Luiz de Aguiar Barbosa enquanto a secção de consumos era gerida pelo 1º oficial José Augusto de Campos, desde 13 de Setembro de 1948, que na prática era o Sector comercial. Nessa altura, o Chefe dos Serviços Administrativos era o Dr. Heitor Nunes Pantaleão. Com a emenda dada ao Regulamento dos SMAE, ocorrida em 1954, a secção viria a ser transformada em Serviços e associados com os Serviços Administrativos passando a designar-se Serviços Administrativos e Comerciais, mantendo o Dr. Heitor Nunes como o Chefe dos dois Serviços. Lembramos que existiam os seguintes serviços:</p>
                <ol class="uk-list uk-list-disc uk-list-primary uk-margin-right uk-margin-left" type="a">
                    <li>Serviços de Água</li>
                    <li>Serviços de Electricidade</li>
                    <li>Serviços Administrativos e Comerciais</li>
                    <li>Serviços Auxiliares.</li>
                </ol>
                <p class="uk-text uk-text-justify">A emenda ao Regulamento deu nova redacção, sobretudo no artigo 8º, onde se dizia que a Comissão Administrativa (um órgão com alto pendor decisório no SMAE) teria um secretário, sem voto que era o Chefe dos Serviços Comerciais. Isto denota claramente o valor que o Comercial ganhava no interior dos SMAE. Todos os Serviços existentes no SMAE eram dirigidos por um Chefe de Serviço, subordinados directamente ao Director de Exploração, não obstante, os serviços de cariz comercial compreendiam dois departamentos e duas secções, sendo dirigidos por um chefe de departamento e de secções:</p>
            </div>

            <div class="uk-width-1-5@m uk-align-center" uk-lightbox="animation: slide">
                <a class="uk-inline" href="{{ secure_asset('assets/images/paginas/contador_pos_pago.png') }}"
                    data-caption="Contador de energia pós-pago">
                    <img src="{{ secure_asset('assets/images/paginas/contador_pos_pago.png') }}" class="uk-border-rounded"
                        width="250px" height="50px" alt="" uk-img></a>
                <p class="uk-text-meta">Contador de energia pós-pago</p>
            </div>
            <div class="uk-width-1-1">
                <ol class="uk-list uk-list-disc uk-list-primary uk-margin-right uk-margin-left" type="a">
                    <li>Secretaria</li>
                    <li>Departamento de Consumo</li>
                    <li>Departamento de Contabilidade</li>
                    <li>Armazéns Gerais.</li>
                </ol>
                <p class="uk-text uk-text-justify">No fundo, a reorganização incidiu muito para o Serviço Comercial que era o novo foco e a emenda adoptada procurava induzir agressividade no negócio da indústria de Electricidade. Desta forma, o departamento de Consumo era compreendido pelas secções:</p>
                <ol class="uk-list uk-list-disc uk-list-primary uk-margin-right uk-margin-left" type="a">
                    <li>Leituras</li>
                    <li>Facturacão</li>
                    <li>Propaganda e Vendas.</li>
                </ol>
                <p class="uk-text uk-text-justify">A secção da facturação foi sendo dirigida pelo José Augusto Campos, contudo em princípios de 1948 foi admitida Maria Ricardina Pereira Duraes, aquela que viria a ser o ícone da facturação do SMAE. As primeiras facturações automatizadas aparecem no período de SMAE nos anos de 1954, com aquisição de equipamento da firma SPANOS LDA e nos anos subsequentes as facturas eram impressas. </p>

                <p class="uk-text uk-text-justify">Com a criação da EDM o Serviço Comercial passou a assegurar, para além da realização de Leituras e Facturação, a Cobrança, Serviços de Atendimento público, Novas Ligações, Vistorias e Fiscalização. Segundo José Manuel Muholove, trabalhador de informática reformado:</p>

                <p class="uk-text uk-margin-left uk-text-italic uk-margin-right uk-text-justify">Quando foi criada a EDM em 27 de Agosto de 1977, o processo de Facturação era através de Cartões ICR de 80 Colunas, processados pelo IBM S3.  <br><br>
                        Mais tarde fez-se upgrade para Cartões de 96 Colunas processados no IBM S70 e nos anos 1992 fez-se a migração para um Sistema da Empresa ICL conhecido por Billing System.
              </p>

                <p class="uk-text uk-margin-right uk-text-justify">No <i>Billing System</i>, instalado em Maputo em 1992, para além de facturação de consumidores da Cidade de Maputo, eram também facturados consumidores da Matola, Beira, Chimoio, Nampula e Nacala. Os operadores destas Cidades levavam as Leituras da sua Cidade para Maputo para serem introduzidos no Sistema para se facturar. Regressavam para as suas cidades com as facturas para irem cobrar. No mês seguinte voltavam para Maputo com Leituras e Canhotos das cobranças efectuadas para serem Introduzidos no Sistema, fazer a reconciliação dos valores facturados e cobrados e depois voltar a facturar para o período seguinte.
                </p>

                <p class="uk-text uk-text-justify">Para a facturação nas outras Áreas de Distribuição, consideradas na altura de Área de pequena dimensão, em 1995 foi implementado um Sistema paralelo ao do Billing System, conhecido por Sistema ACCESS, que inicialmente foi instalado na Áreas Operacional da Região Sul, começando por Chokwe seguindo Xai-Xai e mais tarde Inhambane. O Sistema ACESS foi evoluindo gradualmente, de tal sorte que até nos anos de 1997 abarcava completamente o Sul de Moçambique e nos anos seguintes, devido a capacidade e potencialidade associado ao uso simples, progrediu para Tete, Quelimane, Mocuba e nos anos de 2000 atingiu as Áreas de Pemba e Lichinga e mais tarde Angoche e Cuamba. A gestão do Sistema ACCESS era feita pelo técnico do OINF, Analista em Sistemas informáticos, ora perecido, Dr. Roberto Carlos Pereira.
                </p>

                <p class="uk-text uk-text-justify">Tendo em vista a redução de perdas e melhorias de serviços de atendimento ao cliente, foram introduzidos os Projectos NOVA IMAGEM e Sistema de Pré-pagamento de Electricidade vulgo CREDELEC.
                </p>

                <p class="uk-text uk-text-justify">Importa destacar que com a implementação do Sistema CREDELEC, em 1994, o sector comercial ganhou inúmeras vantagens. A EDM reduziu os serviços de leituras e distribuição de facturas, facturação por estimativas, reclamações dos clientes pela facturação indevida devido à falta de leituras, entre outras vantagens.
                </p>
            </div>

        </div>
    </div>
<hr>
 <div class="uk-width-1-2@s uk-width-2-5@m uk-margin-left uk-margin-remove-bottom uk-margin-top">
        <ul class="uk-nav uk-nav-default uk-align-left">
            <li class="uk-nav-header uk-text-bold uk-text-primary">Próximas páginas relacionadas</li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.geracao') }}">História de geração</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.transporte') }}">História de transporte</a></li>
            <li class="uk-flex uk-flex-left"><a class="uk-button uk-button-text"
                    href="{{ route('eletrificacao.distribuicao') }}">História de
                    distribuição</a></li>
        </ul>
    </div>

</div>
@endsection
