<?php
if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

?>
<header> 
    
    <a href="index.php"><button>Início</button></a>
    
    <a href="especialidades.php"><button>Especialidades</button></a>
    
    <a href="Medicos.php"><button>Médicos</button></a>
   

    <a href="exames.php"><button>Exames</button></a>

 

    
    |
    <!--<form action="entrar.php" method="POST">
        <input type="text" name="txtLogin" required placeholder="E-mail ou CPF" />
        <input type="password" name="txtSenha" required placeholder="Senha: " />
        <input type="submit" value="Entrar"/>
    </form>
    
   <!--<a href="frmCliente.php"><button>Cadastre-se</button></a> -->
    
    
</header>
<hr>