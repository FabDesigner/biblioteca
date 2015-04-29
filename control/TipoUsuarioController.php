<?php

include '../../model/TipoUsuario.php';

class TipoUsuarioController {
    //put your code here
    function findAll(){
        $tipo_usuario = new TipoUsuario();
        return $tipo_usuario->findAll();
    }
}
