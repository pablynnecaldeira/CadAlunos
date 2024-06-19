<?php

class Login{
    private $idLogin;
    private $email;
    private $senha;

    function getIdLogin(){
        return $this->idLogin;
    }

    function setIdLogin($id){
        $this->idLogin = $id;
    }

    function getEmail(){
        return $this->email;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function getSenha(){
        return $this->senha;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }
}