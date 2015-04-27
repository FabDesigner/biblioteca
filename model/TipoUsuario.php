<?php

include '../../conexao/Conexao.php';

class TipoUsuario {

    //put your code here
    private $id;
    private $descricao;

    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function findAll() {
        $sql = "SELECT * FROM usuario";
        $query = Conexao::prepare($sql);
        $query->Execute();
        return $query->fetchAll();
    }

}
