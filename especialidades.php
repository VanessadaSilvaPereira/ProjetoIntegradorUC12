<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Especialidades</title>
        <link href="CSS/Estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>

        <div class="tituloPagina" >Especialidades</div>
    
    <ul class="demo-3">
        <li><h3>OFTALMOLOGIA GERAL</h3></li>
        <li>
            <figure>
                <img src="imagens/olhosCastanhos.jpg" width="125%" alt=""/>
                <figcaption>
                   
                    <p>Especialidade cuja função é preservar
                        a saúde ocular, diagnosticando e tratando patologias nos olhos.
                        promovendo a prevenção de patologias oculares e prescrevendo 
                        lentes corretivas para otimizar a visão para longe 
                        e perto.</p>
                </figcaption>
            </figure>
        </li>
    </ul>
    
    
    
    
    <ul class="demo-3">
        <li>
        <li><h3>CIRURGIA DE CATARATA</h3></li>
            <figure>
                <img src="imagens/idoso1.jpg" width="135%" alt=""/>
                <figcaption>
                    
                    <p>Consiste na quebra
                        e aspiração do cristalino opaco.</p>
                        <p>Após a retirada da catarata, 
                            implanta-se a lente intra-ocular dobrável através de uma microincisão 
                            realizada na córnea
                            com benefício de dar mais precisão, previsibilidade
                            e reprodutibilidade a cirurgia de catarata.</p>
                </figcaption>
            </figure>
        </li>
    </ul>
    
    <ul class="demo-3">
        <li>
        <li><h3>OFTALMOPEDIATRIA</h3></li>
            <figure>
                <img src="imagens/olhosbebê.jpg" width="100%" alt=""/>
                <figcaption>
                    <p>Os cuidados com a visão são importantes em todas as fases da vida, 
                        sendo que a prevenção deve começar após a alta da maternidade com o teste do olhinho. 
                        Ele é um exame realizado em bebês, e que pode detectar e prevenir diversas patologias oculares, 
                        assim como o agravamento das mesmas, como uma cegueira irreversível.</p>
                </figcaption>
            </figure>
        </li>
    </ul>
    <div class="limparFloat"></div>
    
     <ul class="demo-3">
        <li>
        <li><h3>CIRURGIA REFRATIVA A LASER</h3></li>
            <figure>
                <img src="imagens/laser.jpg" width="120%" alt=""/>
                <figcaption>
                    <p>A cirurgia refrativa a laser corrige os erros refrativos de miopia, hipermetropia e astigmatismo.</p>
                    <p>Esses erros refrativos se dão devido a não focalização da imagem sobre a retina,
                        e possuem como principais sintomas: perda de visão, desconforto ocular, dores de cabeça,
                        lacrimejamento e ardor nos olhos.</p>
                </figcaption>
            </figure>
        </li>
    </ul>
    
    
    <ul class="demo-3">
        <li>
        <li><h3>VISÃO SUBNORMAL</h3></li>
            <figure>
                <img src="imagens/visaosubOK.jpg" width="100%" alt=""/>
                <figcaption>
                    <p>É a especialidade que trata pacientes portadores de baixa visão,
                        que através de recursos ópticos especiais como lupas e lunetas,
                        podem ter facilitadas suas atividades do dia a dia.</p>
                    <p>Principais causas:</p>
                    <p>Doenças congênitas e degenerativas da retina e glaucoma.</p>
                </figcaption>
            </figure>
        </li>
    </ul>
    
    <ul class="demo-3">
        <li>
        <li><h3>NEURO-OFTALMOLOGIA</h3></li>
            <figure>
                <img src="imagens/neurooftalmologia.jpg" width="100%" alt=""/>
                <figcaption>
                    <p>É a especialidade que trata doenças oculares ligadas a alterações do nervo óptico
                        e da motilidade ocular relacionadas ao comando cerebral.</p>
                    <p>Principais doenças:</p>
                    <p>Neuropatias óticas (distúrbios que envolvem toxicidade ou isquemia do nervo óptico
                        e neurites ópticas (condições inflamatórias ou desmielinizantes do nervo ótico).</p>
                </figcaption>
            </figure>
        </li>
    </ul>
    
   



    <div class="limparFloat"></div>
    <style>
        .demo-3 {
            /*margin: 1%;*/
            position:relative;
            width:28%;
            overflow:hidden;
            float:left;
            
        }
        .demo-3 figure {
            margin:0;
            padding:0;
            position:relative;
        }
        .demo-3 figure img {
            display:block;
            position:relative;
            z-index:10;
            margin:-15px 0;
        }
        .demo-3 figure figcaption {
            display:block;
            position:absolute;
            z-index:5;
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            box-sizing:border-box;
        }
        .demo-3 figure p {
            display:block;
            font-family:'Lato';
            font-size:16px;
            margin:0;
            color:#fff;
            text-align:left;
        }
        .demo-3 figure figcaption {
            top:0;
            left:0;
            width:100%;
            height:100%;
            padding:15px;
            background-color:blueviolet;
            text-align:center;
            backface-visibility:hidden;
            -webkit-transform:rotateY(-180deg);
            -moz-transform:rotateY(-180deg);
            transform:rotateY(-180deg);
            -webkit-transition:all .5s;
            -moz-transition:all .5s;
            transition:all .5s;
        }
        .demo-3 figure img {
            backface-visibility:hidden;
            -webkit-transition:all .5s;
            -moz-transition:all .5s;
            transition:all .5s;
        }
        .demo-3 figure:hover img,figure.hover img {
            -webkit-transform:rotateY(180deg);
            -moz-transform:rotateY(180deg);
            transform:rotateY(180deg);
        }
        .demo-3 figure:hover figcaption,figure.hover figcaption {
            -webkit-transform:rotateY(0);
            -moz-transform: rotateY(0);
            transform: rotateY(0);
        }
        h3{
            text-align: center;
            /*border: 2px solid black;*/
        }

    </style>


    <?php
    require_once './frmFaleConosco.php';
    ?> 
</body>
</html> 
<!--https://hospitalfranciscovilar.com.br/especialidades/-->