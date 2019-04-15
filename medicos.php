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
            
            <div class="textoMedico" style="width: 350px; text-align: center; margin-left: 10%;">Fundadores da Clinica Oftalmológica e Clínicos gerais.</div>

            <div id="medico02"> <h2>Dr. Geraldo Franco </h2>
                <img  src="imagens/medico 4.jpg" height="250" align="center"


            </div>

        </div>

    </div>
    <hr>
    <div id="medico03"><h2>Dr. Vitor Becker</h2>
        <img  src="imagens/medico.jpg" height="250" align="center">
        <div class="textoMedico"><p>Filho do Doutor Jorge.</p>
            <p>Especialista em Cirurgia de retina.</p></div></div>
    <hr>
    <div id="medico04"><h2>Dr. Adalberto Franco</h2>
        <img  src="imagens/medico 2.jpg" height="250" align="center">
        <div class="textoMedico"> <p>Filho do Doutor Geraldo.</p>
            <p>Especialista em Cirurgia de catarata e reconstituição do globo ocular.</p></div></div>




</body>
<?php
require_once './frmFaleConosco.php';
?>
</html>
