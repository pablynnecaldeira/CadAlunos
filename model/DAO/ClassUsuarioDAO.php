<?php
require_once('../ClassUsuario.php');
require_once('Connect.php');
class UsuarioDAO extends Connect
{
    public function insertUsuario(Usuario $usuario)
    {
       $sql = "INSERT INTO usuario(nome,cpf,rg,endereco,email,ativo) VALUES (?,?,?,?,?,?)";
       $statement = $this->connection->prepare($sql);
       $statementDados = array(
           $usuario->getNome(),
           $usuario->getCpf(),
           $usuario->getRg(),
           $usuario->getEndereco(),
           $usuario->getEmail(),
           $usuario->getAtivo(),
       );
       if($statement->execute($statementDados))
            echo 'Registro inserido com sucesso';
        else
        {
            echo 'Erro ao executar o script no banco';
        }    
    }

    public function getUsuarios()
    {
        $sql = "SELECT * FROM usuario";
        // conectando e preparando o Sql pra rodar no banco
        $statement = $this->connection->prepare($sql);
        // executando no banco
        if ($statement->execute()) {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            echo 'Erro ao executar o script no banco';
            return [];
        }
    }
}