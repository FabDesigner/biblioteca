<?php

include '../../model/Editora.php';

class EditoraController {
    //put your code here
    function findAll(){
        $editora = new Editora();
        return $editora->findAll();
    }
}

