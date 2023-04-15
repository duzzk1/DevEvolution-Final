<?php
class Usuario{
    
    private $id;
    private $usuario;
    private $password;
    private $isAdmin;
    
    function getId() {
        return $this->id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getPassword() {
        return $this->password;
    }

    function getisAdmin() {
        return $this->isAdmin;
    }


    function setId($id) {
        $this->id = $id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setPassword($password) {
         $this->password = $password;
    }

    function setisAdmin($isAdmin) {
         $this->isAdmin = $isAdmin;
    }


    
}