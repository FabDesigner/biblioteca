<?php

include '../../model/Autor.php';

class AutorController {
    //put your code here
    function findAll(){
        $autor = new Autor();
        return $autor->findAll();
    }
}
