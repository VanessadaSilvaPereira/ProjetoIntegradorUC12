<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Exames</title>
        <link href="CSS/Estilos.css" rel="stylesheet" type="text/css">
        <script src="jquery-3.3.1.js"></script>
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>

        <div class="tituloPagina">Exames</div>


        <div id="div01">
            <h3 class="flip1">Exame de Retina<img src="imagens/setas.png"></h3>
            <div class="painel1">
                <p>Mapeamento de retina, também conhecido como exame de fundo de olho ou fundoscopia.</p>
                <p>É um exame em que o oftalmologista consegue observar os nervos, 
                    vasos sanguíneos e o tecido do olho responsável pela captação das imagens, 
                    podendo detectar alterações e permitir a indicação do tratamento.</p></div>

            
            <h3 class="flip2">Exame de Refração<img src="imagens/setas.png"></h3>
            <div class="painel2">
                <p>Também conhecido como exame de visão, é o teste mais comum realizado por oftalmologistas,
                    pois ele indica como está a 
                    visão do paciente e se é necessário o uso de lentes corretivas.</p>
                <p>Esse teste pode identificar problemas como miopia, hipermetropia e astigmatismo.
                <p>Ele é realizado por meio de um projetor e do Refrator de Greens.</p>
                <p>O primeiro apresenta imagens e letras a uma determinada distância
                    para que o paciente tente identificá-los.
                    O segundo encontra a lente adequada para corrigir o problema.</p>
                <p>Esse exame é bem simples e indicado como avaliação inicial
                    para todas as pessoas que apresentam alguma dificuldade visual, 
                    o ideal é que seja realizado anualmente.</p></div>

            
            <h3 class="flip3">Avaliação Externa<img src="imagens/setas.png"></h3>
            <div class="painel3">
                <p>Esse exame é o primeiro contato do médico com o paciente.</p>
                <p>Nele, é possível identificar vermelhidão, edemas nas pálpebras, 
                    secura nos olhos ou qualquer outra alteração externa.</p>
                <p>Por meio desse contato inicial, o profissional poderá ditar
                    a continuidade do tratamento com os exames oftalmológicos adequados.</p></div>

            
            <h3 class="flip4">Teste Ortóptico<img src="imagens/setas.png"></h3>
            <div class="painel4">
                <p>Esse exame testa os músculos ligados à movimentação dos olhos e identifica alterações sensoriais, 
                    podendo reconhecer sinais de estrabismo e ambliopia.</p>
                <p>Ele é indicado para avaliar o alinhamento dos olhos e a posição do olhar.</p>
                <p>Pacientes com suspeitas das condições mencionadas e que apresentam visão dupla 
                    ou embaçada devem procurar um médico para realização do teste.</p></div>

            
            <h3 class="flip5">Oftalmoscopia<img src="imagens/setas.png"></h3>
            <div class="painel5">
                <p>A oftalmoscopia — conhecida também como exame de fundo de olho — checa as condições do fundo do globo ocular.<br>
                    Por meio dela é possível verificar regiões como a retina, vasos sanguíneos e o disco óptico.</p>
                <p>Para a realização desse exame, o médico dilata a pupila do paciente e projeta um feixe de luz no interior do olho.<br>
                    O objetivo é identificar doenças como glaucoma, diabetes ou hipertensão ocular.</p>
                <p>Ele deve ser realizado anualmente, no entanto, 
                    o ideal é que seja estipulada uma frequência com o oftalmologista,
                    de acordo com o histórico e necessidade do paciente.</p></div>
        </div>


        <div id="div02">

            <h3 class="flip6">Topografia Corneana<img src="imagens/setas.png"></h3>
            <div class="painel6">
                <p>Por meio desse exame, é possível fazer o mapeamento topográfico do relevo da córnea e
                    determinar a curvatura corneana.</p>
                <p>Ele é indicado a pacientes pré-operatórios de cirurgias corretivas — miopia, 
                    hipermetropia, astigmatismo e cataratas.</p>
                <p>Esse exame é essencial para identificar doenças de maneira precoce e também
                    é importante para pacientes em adaptação de lentes de contato.</p></div>


            <h3 class="flip7">Biomicroscopia<img src="imagens/setas.png"></h3>
            <div class="painel7">
                <p>Exame feito para verificar as condições da conjuntiva,
                    pálpebras e parte anterior dos olhos.</p></div>

            <h3 class="flip8"> Fundo de Olho<img src="imagens/setas.png"></h3> 
            <div class="painel8">
                <p>Com o uso do oftalmoscópio o oftalmologista consegue ver e avaliar como está o nervo ótico, 
                    retina e os vasos da retina</p></div>

            <h3 class="flip9">Teste do olhinho<img src="imagens/setas.png"></h3>
            <div class="painel9">
                <p>Feito em bebês ainda nas primeiras semanas de vida é um exame que pode detectar doenças como catarata,
                    glaucoma congênito, tumores, inflamações intraoculares e hemorragias.</p>
                <p>Com o oftalmoscópio o oftalmologista detecta o reflexo da retina que, 
                    quando saudável irá refletir tons de vermelho, laranja ou amarelo.</p></div>

            <h3 class="flip10">Exames Complementares<img src="imagens/setas.png"></h3>
            <div class="painel10">
                <p>Em consultas regulares são solicitados exames de rotina, como os apresentados.</p>
                <p>No entanto, nem sempre é possível chegar a um diagnóstico apenas com eles. Em alguns casos específicos, 
                    o médico solicitará exames complementares — ultrassom,
                    topografia, tonometria, tomografias, angiografia, entre outros.<p>
                <p>Por meio desses exames oftalmológicos, o médico pode chegar a um diagnóstico detalhado e, 
                    assim, escolher o melhor tratamento para devolver a saúde ocular do paciente.</p>
                <p>Em caso de algum dos sintomas citados,
                    é necessário procurar um médico para um tratamento adequado.</p></div>

        </div>

        <div class="limparFloat"></div>

        <script>

            $(".flip1").click(function () {
                $(".painel1").slideToggle(1000);
            });

            $(".flip2").click(function () {
                $(".painel2").slideToggle(1000);
            });

            $(".flip3").click(function () {
                $(".painel3").slideToggle(1000);
            });

            $(".flip4").click(function () {
                $(".painel4").slideToggle(1000);
            });

            $(".flip5").click(function () {

                $(".painel5").slideToggle(1000);

            });

            $(".flip6").click(function () {
                $(".painel6").slideToggle(1000);

            });
            $(".flip7").click(function () {
                $(".painel7").slideToggle(1000);

            });
            $(".flip8").click(function () {
                $(".painel8").slideToggle(1000);

            });
            $(".flip9").click(function () {
                $(".painel9").slideToggle(1000);

            });
            $(".flip10").click(function () {
                $(".painel10").slideToggle(1000);

            });



        </script>

        <style>
            h3 img{
                width:22px; margin-left:5px;
                
            }

            .painel1, .painel2, .painel3, .painel4, .painel5, .painel6, .painel7, .painel8, .painel9, .painel10{
                width: 90%;
                font-size: 20px;
                display: none;
            }
            .flip1, .flip2, .flip3, .flip4, .flip5, .flip6, .flip7, .flip8, .flip9, .flip10{
                font-size: 25px;
            }
            #div01{
                width: 35%;
                position:relative;
                float: left;
                border: black 1px dashed;
                margin: 50px;
                padding: 2%;
            }

            #div02{
                padding: 2%;
                margin: 50px;
                width: 35%;

                position: relative;
                margin-bottom: auto;
                float:left;
                border: black 1px dashed;
            }

        </style>

    </body>
    <?php
    require_once './frmFaleConosco.php';
    ?>
</html>
