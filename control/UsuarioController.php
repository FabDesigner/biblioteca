<?php

include '../../model/Usuario.php';

class UsuarioController {
    //put your code here
    
    function findAll(){
        $usuario = new Usuario();
        return $usuario->findAll();
    }
    
}

