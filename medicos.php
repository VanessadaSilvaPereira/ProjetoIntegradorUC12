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
        
   
      
        
        <div id="medico01">
            <div>Fundadores da Clinica Oftalmológica e Clínicos gerais.</div>
            <h3>Dr. Jorge Becker </h3>
             <img src="imagens/medico1.jpg" height="250" align="center">
             
             <div id="medico02"> <h3>Dr. Geraldo Franco </h3>
            <img  src="imagens/medico 4.jpg" height="250" align="center">

            </div>
        
        </div>
     
        <div id="medico03"><h3>Dr. Vitor Becker</h3>
                    <img  src="imagens/medico.jpg" height="250" align="center"><br>
                    Filho do Doutor Jorge.
                    Especialista em Cirurgia de retina.<br><br></div>
                    
        <div id="medico04"><h3>Dr. Adalberto Franco</h3>
                    <img  src="imagens/medico 2.jpg" height="250" align="center"><br>
                    Filho do Doutor Geraldo.<br>
                    Especialista em Cirurgia de catarata e reconstituição do globo ocular.</div>
                   
                    
                     
      
    </body>
     <?php
        require_once './frmFaleConosco.php';
        ?>
</html>
