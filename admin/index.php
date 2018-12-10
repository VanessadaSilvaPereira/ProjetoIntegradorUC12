<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista Fale Conosco</title>
    </head>
    <body>
        
         <h1 align="center"> <i> Lista Fale Conosco </i> </h1> <br>
       
         <?php
       session_start();
       
     
    if (!isset ($_SESSION['admin']) && !$_SESSION['admin'] == TRUE) {
        
        ?>
       
        <form action="entrar.php" method="POST" >
            <input type="text" name="txtLogin" required placeholder="Login" />
            <input type="password" name="txtSenha" required placeholder="Senha: " />
            <input type="submit" value="Entrar" />
        </form>
         
         
         <?php
         if( isset($_REQUEST['loginInvalido']))
             echo '<h3>Login ou senha incorretos!</h3>';
         
    }else{
         
         
         
         
         
         echo '<a href="sair.php" ><button>Sair</button></a>';

         include_once '../model/clsFaleConosco.php';
         include_once '../dao/clsFaleConoscoDAO.php';
         include_once '../dao/clsConexao.php';
    $lista = FaleConoscoDAO::getFaleConosco();
    if ($lista->count() == 0) {

        echo'<h2><b>Nenhuma cadastrado<b><h2>';
    } else {
        ?>

        <table border="3">

            <tr> 
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Mensagem</th>
            </tr>
            <?php
            foreach ($lista as $faleConosco) {

                echo '<tr>
                                <td>' . $faleConosco->getId() . '</td>
                                 <td>' . $faleConosco->getNome() . '</td>
                                 <td>' . $faleConosco->getEmail() . '</td>
                                 <td>' . $faleConosco->getMensagem() . '</td>
                                    
                            </tr>';
                
                 }
            
    }
    
            ?>

        </table>
         
         
        <?php
    }
         
    ?>
   
   
    </body>
</html>
