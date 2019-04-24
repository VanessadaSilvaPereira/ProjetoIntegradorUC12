<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Médicos</title>
        <link href="CSS/Estilos.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>

        <div class="tituloPagina">Médicos</div>

        <div id="medico01"><h2>Dr. Jorge Becker </h2>
            <img src="imagens/medico1.jpg" height="250" align="center">

        </div>
        <div id="medico02"> <h2>Dr. Geraldo Franco </h2>
            <img  src="imagens/medico 4.jpg" height="250" align="center" />


        </div>
        <div class="limparFloat"></div>
        <div class="textoMedico" style="padding-left: 2%;margin-left: 35%;"><h5>Fundadores da Clinica Oftalmológica e Clínicos gerais.</h5></div>

        <hr>
        <div id="medico03"><h2>Dr. Vitor Becker</h2>
            <img  src="imagens/medico.jpg" height="250" align="center" />
            <div class="textoMedico">
                <h5>Filho do Doutor Jorge.</h5>
                <h5>Especialista em Cirurgia de retina.</h5>
            </div>
        </div>


        <div class="limparFloat"></div>
        <hr>
        <div id="medico04"><h2>Dr. Adalberto Franco</h2>
            <img  src="imagens/medico 2.jpg" height="250" align="center" />
            <div class="textoMedico"> 
                <h5>Filho do Doutor Geraldo.</h5>
                <h5>Especialista em Cirurgia de catarata e reconstituição do globo ocular.</h5>
            </div>
        </div>

        <div class="limparFloat"></div>

        <?php
        require_once './frmFaleConosco.php';
        ?>
    </body>
</html>