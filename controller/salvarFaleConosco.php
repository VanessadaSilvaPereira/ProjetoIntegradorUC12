<?php
include_once '../dao/clsConexao.php';
include_once '../dao/clsFaleConoscoDAO.php';
include_once '../model/clsFaleConosco.php';
require 'PHPMailer/src/OAuth.php';

if (isset($_REQUEST ['inserir'])) {
    $faleConosco = new FaleConosco();
    $faleConosco->setNome($_POST['txtNome']);
    $faleConosco->setEmail($_POST['txtEmail']);
    $faleConosco->setAssunto($_POST['txtAssunto']);
    $faleConosco->setMensagem($_POST['txtMensagem']);

    FaleConoscoDAO::inserir($faleConosco);

    
        //require './PHPMailer/';
    

        
    
    header("Location: ".$_SERVER['HTTP_REFERER']);
}


function mandarEmail(){
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Username = 'clinicaoftalmobr@gmail.com';
    $mail->Password = 'oftalmo2019';
    $mail->Port = 587;
    
    $mail->setFrom('clinicaoftalmobr@gmail.com');
    $mail->addReplyTo(($_POST['txtEmail']));
    $mail->addAddress(($_POST['txtEmail']), "");
    //$mail->addAddress('email@email.com.br', 'Contato');
    //$mail->addCC('email@email.com.br', 'Cópia');
    //$mail->addBCC('email@email.com.br', 'Cópia Oculta');
    
    $mail->isHTML(true);
    $mail->Subject = 'Assunto do email';
    $mail->Body    = 'Este é o conteúdo da mensagem em <b>HTML!</b>';
    $mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';
    //$mail->addAttachment('/tmp/image.jpg', 'nome.jpg');

}
if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}