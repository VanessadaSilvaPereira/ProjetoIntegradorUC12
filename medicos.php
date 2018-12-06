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
      
                    echo 'Dr. Jorge Becker <br> ';
                    echo 'Dr. Geraldo Franco <br> ';
                    echo 'Fundadores da Clinica Oftalmológica e Clínicos gerais <br><br> ';
                    
                    echo 'Dr. Vitor Becker <br> ';
                    echo 'Filho do Doutor Jorge. <br> '
                    . 'Especialista em Cirurgia de retina';
                    
                    echo 'Dr. Adalberto Franco <br><br>';
                    echo 'Filho do Doutor Geraldo.<br>'
                    . 'Especialista em Cirurgia de catarata e reconstituição do globo ocular';
                   
                     
                 
        ?> 
    </body>
     <?php
        require_once './frmFaleConosco.php';
        ?>
</html>
