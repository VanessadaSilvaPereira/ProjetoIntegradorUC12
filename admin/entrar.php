<?php
//require_once '../dao/clsConexao.php';
//require_once '../model/clsFaleConosco.php';
//require_once '../dao/clsFaleConoscoDAO.php';

$login = $_POST['txtLogin'];
$senha = $_POST['txtSenha'];
if ($login == "admin" && $senha == "123456") {

    session_start();
    $_SESSION['admin'] = TRUE;
    
    header('Location: index.php');
  
} else {
    header('Location: index.php?loginInvalido');
}
?>


