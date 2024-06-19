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
    
    //Construtor
    public function __construct()
    {
        
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    //Retorna o nome
    public function getNome()
    {
        return $this->nome;
    }
    
    //Recebe o nome
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    //Retorna o telefone
    public function getCpf()
    {
        return $this->cpf;
    }
    
    //Recebe o telefone
    public function setCpf($telefone)
    {
        $this->telefone = $telefone;
    }
    
    //Retorna o celular
    public function getRg()
    {
        return $this->rg;
    }
    
    //Recebe o celular
    public function setRg($celular)
    {
        $this->celular = $celular;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    //Retorna o email
    public function getEmail()
    {
        return $this->email;
    }
    
    //Recebe o email
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }
    
    //Recebe o email
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }
}