<?php

include_once '../dao/clsConexao.php';
include_once '../dao/clsFaleConoscoDAO.php';
include_once '../model/clsFaleConosco.php';
//require_once '../PHPMailer/PHPMailerAutoload.php';
require_once '../PHPMailer/src/Exception.php';
require_once '../PHPMailer/src/PHPMailer.php';
require_once '../PHPMailer/src/SMTP.php';
require '../PHPMailer/class.phpmailer.php';
require '../PHPMailer/class.smtp.php';

if (isset($_REQUEST ['inserir'])) {
    $faleConosco = new FaleConosco();
    $faleConosco->setNome($_POST['txtNome']);
    $faleConosco->setEmail($_POST['txtEmail']);
    $faleConosco->setAssunto($_POST['txtAssunto']);
    $faleConosco->setMensagem($_POST['txtMensagem']);
    FaleConoscoDAO::inserir($faleConosco);

    $GetPost = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $nome = $GetPost['txtNome'];
    $assunto = $GetPost['txtAssunto'];
    $email = $GetPost['txtEmail'];
    $mensagem = $GetPost['txtMensagem'];

//echo $nome

//    $mail = new PHPMailer\PHPMailer\PHPMailer;
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
//    $mail->SMTPSecure = 'ssl';
    $mail->Username = 'clinicaoftalmobr@gmail.com';
    $mail->Password = 'aidede308';
//    $mail->Password = 'oftalmo2019';
    
//    $mail->Port = 587;
    $mail->Port = 465;

//    $mail->SetFrom('clinicaoftalmobr@gmail.com');
    $mail->SetFrom($email);
    $mail->AddAddress('clinicaoftalmobr@gmail.com');
    $mail->IsHTML(true);
    $mail->Subject = $assunto;
    $mail->Body = $mensagem;

    if (!$mail->send()) {
        echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
    } else {
        echo 'Mensagem enviada.';
    }
    //header("Location: ".$_SERVER['HTTP_REFERER']);
}