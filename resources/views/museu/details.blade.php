@extends('layouts.single-app')

@section('content')

<div class="uk-container uk-margin-large-bottom" id="museu">


    <div uk-grid>
        <div class="uk-width-1-1">
            <ul class="uk-breadcrumb uk-align-right uk-margin-large-top">
                <li><a class="uk-text-primary uk-active uk-text-normal" href="{{ route('home') }}">Inicio</a></li>

                <li><a href="#">Museu</a></li>
            </ul>
        </div>
        <div class="uk-width-expand@m uk-margin-remove">
            <h2 class="uk-heading-bullet uk-margin-large-right uk-text-bold uk-text-primary uk-margin-small-bottom">
                O Museu</h2>
            <p class="uk-text uk-dropcap uk-margin-left uk-margin-large-right uk-text-justify">
                Museu da Eletricidade de Moçambique será um Museu Industrial da iniciativa empresarial, que surge no
                seio da política da
                Empresa Eletricidade de Moçambique (EDM),com objectivo de preservação do património elétrico e
                divulgação da evolução da
                EDM no seu todo.
            </p>
            <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">
                Em Moçambique, não existe uma rede de museus da indústria, da técnica, ou sequer um Museu Nacional
                vocacionado para esta
                área de desenvolvimento do país, apesar de no passado recente ter existido um património industrial
                e tecnológico
                importante, na posse de grandes companhias privadas e instituições do Estado, tais como os casos dos
                Caminhos de Ferro
                de Moçambique e dos Correios, Telégrafos e Telefones, entre outros.
            </p>
            <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">
                Os CAMINHOS DE FERRO DE MOÇAMBIQUE criaram o primeiro Museu Industrial em Moçambique, recolhendo
                parte dos equipamentos
                e maquinismos existentes no país, como são o caso das duas locomotivas que se encontram no átrio da
                estação ferroviária
                de Maputo. Este Museu teve um longo período de gestação, iniciado ainda na década de 1970, tendo
                sido finalmente
                inaugurado em 11 de junho de 2015.
            </p>
        </div>

    </div>

    <div class="uk-width-1-1">
        <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">
            Uma outra iniciativa foi igualmente tentada pela empresa TELECOMUNICAÇÕES DE MOÇAMBIQUE, na década
            de 1990, chegando a
            ter uma infraestrutura destinada a acolher o património a expor. Recolheu ainda alguns maquinismos e
            equipamentos,
            procedido à sua limpeza e manutenção, usando funcionários da empresa, já aposentados.
        </p>
        <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">
            O Museu da ELECTRICIDADE DE MOÇAMBIQUE, ganha assim uma especial relevância, pela quase inexistência
            de outras
            infraestruturas museológicas destinadas a preservar o património industrial. O âmbito do Museu da
            ELECTRICIDADE DE
            MOÇAMBIQUE ultrapassa a história da empresa, e o público interessado não só abrangem os seus
            trabalhadores activos e
            reformados e as suas famílias no seu todo, como também estudantes das diversas instituições de
            ensino técnico do país a
            que se junta ainda um vasto público ávido de conhecer aspectos ainda desconhecidos da história de
            Moçambique. Pois, o
            Museu da ELECTRICIDADE DE MOÇAMBIQUE, pode mostrar o percurso da empresa, participando na criação de
            uma identidade
            comum, ser usado como meio auxiliar do ensino das ciências e das técnicas nos níveis básico e
            secundário, na
            pós-graduação da história das ciências e técnicas bem como da museologia.
        </p>
        <p class="uk-text uk-margin-left uk-margin-large-right uk-text-justify">
            Considerando que a instalação do Museu Permanente é um processo a médio e longo prazo, a EDM
            decidiu, a curto prazo,
            desenvolver acções com vista a tornar o Museu conhecido, tanto ao nível da EDM, assim como pelo
            público em geral e,
            simultaneamente, fazer a sensibilização para as questões da salvaguarda e proteção do Património da
            Eletricidade.<br>
            Uma dessas acções é a criação do presente “Museu Virtual da EDM”, para mostrar a evolução
            tecnológica da EDM e da
            eletrificação de Moçambique, narrativas ou depoimentos de alguns trabalhadores envolvidos na
            operação de equipamentos e
            em projectos de eletrificação e documentos relevantes (fotos, documentos, notícias).
        </p>
    </div>
</div>
<hr class="uk-margin-medium-top">

@endsection