<?php
class Usuario
{
    private $idUsuario;
    private $nome;
    private $cpf;
    private $rg;
    private $endereco;
    private $email;
    private $ativo;
    private $idLogin;

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function getNome()
    {
        return $this->nome;
    }
    
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getCpf()
    {
        return $this->cpf;
    }
    
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    public function getRg()
    {
        return $this->rg;
    }
    
    public function setRg($rg)
    {
        $this->rg = $rg;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }
    
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    public function getIdLogin()
    {
        return $this->idLogin;
    }
    
    public function setIdLogin($idLogin)
    {
        $this->idLogin = $idLogin;
    }
}