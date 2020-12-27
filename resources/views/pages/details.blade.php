@extends('layouts.app')
@section('content')
<div class="uk-section uk-section-primary uk-margin-large-bottom">
    <div class="uk-container">
    <h2 class="uk-heading-bullet uk-text-bolder uk-margin-large-left uk-text-primary">Informação Comercial</h2>

    </div>
</div>


<div class="uk-container uk-margin-large-bottom">

    <div uk-grid>

        <div class="uk-width-expand@m">
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                As actividades comerciais, no tempo dos Serviços Municipalizados de Água e Electricidade (S.M.A.E), começaram por ser uma secção que estava nos Serviços Administrativos, sendo dirigidas pelo Chefe da 2ª Repartição Luiz de Aguiar Barbosa enquanto a secção de consumos era gerida pelo 1º oficial José Augusto de Campos, desde 13 de Setembro de 1948, que na prática era o Sector comercial. Nessa altura o Chefe dos Serviços Administrativos era o Dr. Heitor Nunes Pantaleão.
            </p>
            <p class="uk-text uk-margin-large-left uk-margin-large-right uk-text-justify">
                Com a emenda dada ao Regulamento dos SMAE ocorrida em 1956, a secção viria a ser transformada em Serviços e associados com os Serviços Administrativos passando a designar-se Serviços Administrativos e Comerciais, mantendo o Dr. Heitor Nunes como o Chefe dos dois Serviços. Lembremos que existiam os seguintes serviços:
            </p>

        </div>

        <div class="uk-width-1-5@m">
            <a href="../public/assets/documentos/comercial.pdf" target="_blank" class="uk-text-primary uk-text-bold uk-button uk-button-secondary uk-border-rounded uk-box-shadow-hover-large">PDF <span uk-icon="file-pdf"></span></a>

        </div>
    </div>
    <!-- Galeria -->
    <hr class="uk-margin-medium-top">

    <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide" uk-scrollspy="cls: uk-animation-slide-bottom; target: .uk-card; delay: 300; repeat: true">

        <div>
            <a class="uk-inline" href="../public/assets/images/slide/image_01.jpg" data-caption="Caption 1">
                <img style="height: 240px;" src="../public/assets/images/slide/image_01.jpg" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="../public/assets/images/slide/image_03.jpg" data-caption="Caption 1">
                <img style="height: 240px;" src="../public/assets/images/slide/image_03.jpg" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="../public/assets/images/slide/image_02.jpg" data-caption="Caption 1">
                <img style="height: 240px;" src="../public/assets/images/slide/image_02.jpg" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="../public/assets/images/slide/image_03.jpg" data-caption="Caption 1">
                <img style="height: 240px;" src="../public/assets/images/slide/image_03.jpg" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="../public/assets/images/slide/image_02.jpg" data-caption="Caption 1">
                <img style="height: 240px;" src="../public/assets/images/slide/image_02.jpg" alt="">
            </a>
        </div>

        <div>
            <a class="uk-inline" href="../public/assets/images/slide/image_02.jpg" data-caption="Caption 1">
                <img style="height: 240px;" src="../public/assets/images/slide/image_02.jpg" alt="">
            </a>
        </div>

    </div>

</div>

@endsection
