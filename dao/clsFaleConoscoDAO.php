<?php

class FaleConoscoDAO {
    
    public static function inserir($faleConosco) {
        $sql = "INSERT INTO faleConosco ( nome, email,assunto, mensagem ) VALUES ( "
                . " '" . $faleConosco->getNome() . "' , "
                . " '" . $faleConosco->getEmail() . "' , "
                . " '" . $faleConosco->getAssunto() . "' , "
                . " '" . $faleConosco->getMensagem() . "' ) ";
        Conexao::executar($sql);
    }
    public static function getFaleConosco() {
        $sql = "SELECT * FROM faleConosco";
        $result = Conexao::consultar($sql);

        $lista = new ArrayObject();
        if ($result != NULL) {
            while (list($_id, $_nome, $_email,$_assunto, $_mensagem) = mysqli_fetch_row($result)) {
                

                $faleConosco = new FaleConosco();
                $faleConosco->setId($_id);
                $faleConosco->setNome($_nome);
                $faleConosco->setEmail($_email);
                $faleConosco->setAssunto($_assunto);
                $faleConosco->setMensagem($_mensagem);
                $lista->append($faleConosco);

            }
        }
        return $lista;
    }
    
}
