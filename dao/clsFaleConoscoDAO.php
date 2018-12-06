<?php

class FaleConoscoDAO {
    
    public static function inserir($faleConosco) {
        $sql = "INSERT INTO faleConosco ( nome, email, mensagem ) VALUES ( "
                . " '" . $faleConosco->getNome() . "' , "
                . " '" . $faleConosco->getEmail() . "' , "
                . " '" . $faleConosco->getMensagem() . "' ) ";
        Conexao::executar($sql);
    }
}
