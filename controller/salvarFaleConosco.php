<?php
include_once '../dao/clsConexao.php';
include_once '../dao/clsFaleConoscoDAO.php';
include_once '../model/clsFaleConosco.php';

if (isset($_REQUEST ['inserir'])) {
    $faleConosco = new FaleConosco();
    $faleConosco->setNome($_POST['txtNome']);
    $faleConosco->setEmail($_POST['txtEmail']);
    $faleConosco->setMensagem($_POST['txtMensagem']);

    FaleConoscoDAO::inserir($faleConosco);

    header("Location: ".$_SERVER['HTTP_REFERER']);
}

