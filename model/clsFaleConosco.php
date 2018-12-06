<?php

class FaleConosco {
    private $id, $nome, $email, $mensagem;
    
    function __construct($id, $nome, $email, $mensagem) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->mensagem = $mensagem;
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
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

    function setEmail($email) {
        $this->email = $email;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }



}
