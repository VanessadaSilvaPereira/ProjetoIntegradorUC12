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
    </body>

 <ul class="demo-3">
        <li>
            <figure>
                <img src="imagens/consultorio.jpg" width="100%" alt=""/>
                <figcaption>
                    <h2>Reconstituição do globo ocular</h2>
                    <p>Os procedimentos cirúrgicos que ajudam a recuperar a superfície ocular:</p>
                    <p>A membrana amniótica é previamente preparada a partir de uma placenta humana, e passa por um 
                        processamento especial antes de ser utilizada. Esta membrana tem propriedades anti-inflamatórias,
                        consegue diminuir os vasos da córnea e facilita a cicatrização. Pode ser usada isoladamente nas 
                        queimaduras agudas, nas perdas parciais das células tronco, no alívio da dor de certos edemas de 
                        córnea, ou nos casos de úlceras de córnea que não respondem ao tratamento convencional.</p>
                    <p>Também pode ser associada ao transplante de limbo, principalmente para refazer as áreas internas
                        das pálpebras e melhorar as condições gerais do olho.</p>
                </figcaption>
            </figure>
        </li>
    </ul>
    <div class="limparFloat"></div>
    <ul class="demo-3">
        <li>
            <figure>
                <img src="imagens/olhosCastanhos.jpg" width="120%" alt=""/>
                <figcaption>
                    <h2>OFTALMOLOGIA</h2>
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
            <figure>
                <img src="imagens/idoso1.jpg" width="130%" alt=""/>
                <figcaption>
                    <h2>CIRURGIA DE CATARATA</h2>
                    <p>consiste na quebra
                        e aspiração do cristalino opaco
                        . Após a retirada da catarata, 
                        . implanta-se a lente intra-ocular dobrável através de uma microincisão 
                        realizada na córnea. 
                        . com benefício de dar mais precisão, previsibilidade
                        e reprodutibilidade a cirurgia de catarata.</p>
                </figcaption>
            </figure>
        </li>
    </ul>
    <ul class="demo-3">
        <li>
            <figure>
                <img src="imagens/olhosbebê.jpg" width="100%" alt=""/>
                <figcaption>
                    <h2>TRANSPLANTE DE MEMBRANA AMNIÓTICA</h2>
                    <p>A membrana amniótica tem propriedades anti-inflamatórias,
                        consegue diminuir os vasos da córnea e facilita a cicatrização.
                        Pode ser usada isoladamente nas queimaduras agudas,
                        nas perdas parciais das células tronco, no alívio da dor de certos edemas de córnea,
                        ou nos casos de úlceras de córnea que não respondem ao tratamento convencional.</p>

<!--                    <p>Também pode ser associada ao transplante de limbo, 
                        principalmente para refazer as áreas internas das pálpebras e melhorar as condições gerais do olho.</p>-->
                </figcaption>
            </figure>
        </li>
    </ul>
    <div class="limparFloat"></div>

    <!-- <div class="divespecialidades" >A retina é uma fina camada de células que reveste a parte mais interna do olho. Ela é
         responsável por transformar o estímulo luminoso num estímulo neurológico que é transmitido
         ao nervo óptico. Por sua vez, o nervo óptico leva estas informações para o cérebro que,
         após seu o processamento, se transforma no que chamamos de visão. A retina ainda não pode
         ser transplantada ou “trocada”, por isso qualquer dano que ocorra com ela, pode ser irreversível.
         Doenças da retina podem ser graves e, se não tratadas a tempo, podem levar a uma cegueira irrecuperável.</div>
 
     <div class="divespecialidades" > Muitas doenças sistêmicas como o diabetes e a hipertensão arterial podem causar danos na retina
         e provocar perda de visão.</div>-->

    <style>
        .demo-3 {
            margin: 2%;
            position:relative;
            width:25%;
            height:500px;
            overflow:hidden;
            float:left;
            
        }
        .demo-3 figure {
            margin:0;
            padding:0;
            position:relative;
            margin-left:-50px;
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
        .demo-3 figure h2 {
            font-family:'Lato';
            color:#fff;
            font-size:18px;
            text-align:left;
        }

        .demo-3 figure p {
            display:block;
            font-family:'Lato';
            font-size:20px;
            line-height:18px;
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
            background-color:darkturquoise;
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
            -moz-transform:rotateY(0);
            transform:rotateY(0);
        }

    </style>


    <?php
    require_once './frmFaleConosco.php';
    ?> 

</html> 
https://hospitalfranciscovilar.com.br/especialidades/