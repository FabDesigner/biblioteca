}<?php

include '../../conexao/Conexao.php';


class Autor {
    //put your code here


    //put your code here
    private $id;
    private $descricao;
    private $telefone;

    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function findAll() {
        $sql = "SELECT * FROM autor";
        $query = Conexao::prepare($sql);
        $query->Execute();
        return $query->fetchAll();
    }     

    
}



