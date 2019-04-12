<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Clinica M171</title> 
        <link href="CSS/Estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <?php
        require_once 'menu.php';
        ?>


        <div style="background-color:cornflowerblue; width: auto; margin-top:5%;" ><div id="imagemInicial"><img src="imagens/inicial.jpg" height="250" align="center"></div></div>

        <div id="comoVemos"> <h2>Como é que nós vemos ?</h2>

            <ul>
                <li>A luz reflete-se nos objetos e segue em linha reta para o olho.</li>
                <li>A luz passa através da córnea, para dentro da pupila e através do cristalino.</li>
                <li>A córnea e o cristalino ajustam-se à luz (refratam) para que a retina foque.</li>
                <li>Os fotorrecetores na retina convertem a luz em impulsos elétricos.</li>
                <li>Os impulsos elétricos atravessam o nervo ótico até ao cérebro.</li>
                <li>O cérebro processa os sinais para criar uma imagem.</li>
            </ul>
            
        </div>
        <div class="limparFloat"></div>


        <div id="historiaClinica"><div id="TituloHistoriaClinica"><h1><i>História da Clínica</div></i></h1>

                <p>Clínica de Oftamologia com mais de 25 anos de experiência.
                    Localizada na cidade de Três Lagoas.</p>
                <p>Foi Fundade pelos DRs. Jorge e Geraldo.
                    Hoje seguida por seus filhos na mesma profissão.</p>
                <p>No início de suas carreiras, seus procedimentos se dividiam em atendimentos na
                    clínica e em salas alugadas no Hospital da cidade.</p>
                <p>Através da nova visão dos filhos empreenderam em Clínica própria para procedimentos
                    mais amplos e complexos.</p></div>

    </body>
    <?php
    require_once './frmFaleConosco.php';
    ?>
</html>
