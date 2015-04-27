<?php

include '../../model/TipoUsuario.php';

class TipoUsuarioController {
    //put your code here
    function findAll(){
        $usuario = new TipoUsuario();
        return $usuario->findAll();
    }
}
