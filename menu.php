<?php
if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

?>
<header> 
    
    <a href="index.php"><button>Início</button></a>
    
    <a href="Clinica.php"><button>Clinica</button></a>
    
    <a href="Medicos.php"><button>Médicos</button></a>
   

    <a href="consultas.php"><button>Consultas</button></a>

 

    
    |
    <form action="entrar.php" method="POST">
        <input type="text" name="txtLogin" required placeholder="E-mail ou CPF" />
        <input type="password" name="txtSenha" required placeholder="Senha: " />
        <input type="submit" value="Entrar"/>
    </form>
    
   <!--<a href="frmCliente.php"><button>Cadastre-se</button></a> -->
    
    
</header>
<hr>