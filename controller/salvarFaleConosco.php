<?php
include_once '../dao/clsConexao.php';
include_once '../dao/clsFaleConoscoDAO.php';
include_once '../model/clsFaleConosco.php';
require_once '../PHPMailer/PHPMailerAutoload.php';

if (isset($_REQUEST ['inserir'])) {
    $faleConosco = new FaleConosco();
    $faleConosco->setNome($_POST['txtNome']);
    $faleConosco->setEmail($_POST['txtEmail']);
    $faleConosco->setAssunto($_POST['txtAssunto']);
    $faleConosco->setMensagem($_POST['txtMensagem']);
    FaleConoscoDAO::inserir($faleConosco);
    header("Location: ".$_SERVER['HTTP_REFERER']);
}

$GetPost= filter_input_array(INPUT_POST,FILTER_DEFAULT);
$nome=$GetPost['txtNome'];
$assunto=$GetPost['txtAssunto'];
$email=$GetPost['txtEmail'];
$mensagem=$GetPost['txtMensagem'];

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'clinicaoftalmobr@gmail.com';
    $mail->Password = 'oftalmo2019';
    $mail->Port = 587;
    
    $mail->SetFrom('clinicaoftalmobr@gmail.com','contato');
    $mail->AddAddress($email,$nome);
    $mail->IsHTML(true);
    $mail->Subject=$assunto;
    $mail->isHTML(true);
    $mail->Body=$mensagem;
    
if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}