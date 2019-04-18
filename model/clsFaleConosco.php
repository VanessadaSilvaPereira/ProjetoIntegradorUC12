<?php

class FaleConosco {
    private $id, $nome,$assunto, $email, $mensagem;
    
    function __construct($id = NULL, $nome = NULL, $assunto=NULL, $email = NULL , $mensagem = NULL) {
        $this->id = $id;
        $this->nome = $nome;
        $this->assunto = $assunto;
        $this->email = $email;
        $this->mensagem = $mensagem;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }
    function getAssunto() {
        return $this->assunto;
    }

    function getEmail() {
        return $this->email;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setAssunto($assunto) {
        $this->assunto = $assunto;
    }
    
    function setEmail($email) {
        $this->email = $email;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }



}
