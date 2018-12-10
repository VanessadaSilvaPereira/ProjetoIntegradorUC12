<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Médicos</title>
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>
        
         <br><br><br><br>
        <h1 align="center"> <i>Médicos</i> </h1>
        
        <?php
      
                    echo '<h3>Dr. Jorge Becker </h3> ';
                    echo '<h3>Dr. Geraldo Franco </h3> ';
                    echo 'Fundadores da Clinica Oftalmológica e Clínicos gerais. <br><br> ';
                    
                    echo '<h3>Dr. Vitor Becker</h3>';
                    echo 'Filho do Doutor Jorge.'
                    . 'Especialista em Cirurgia de retina.<br><br>';
                    
                    echo '<h3>Dr. Adalberto Franco</h3>';
                    echo 'Filho do Doutor Geraldo.<br>'
                    . 'Especialista em Cirurgia de catarata e reconstituição do globo ocular.';
                   
                     
                 
        ?> 
    </body>
     <?php
        require_once './frmFaleConosco.php';
        ?>
</html>
