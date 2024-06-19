<?php
require_once('../ClassUsuario.php');
require_once('Connect.php');
class UsuarioDAO extends Connect
{
    public function insertUsuario(Usuario $usuario)
    {
       $sql = "INSERT INTO usuario(nome,cpf,rg,endereco,email,ativo,idLogin) VALUES (?,?,?,?,?,?,?)";
       $statement = $this->connection->prepare($sql);
       $statementDados = array(
           $usuario->getNome(),
           $usuario->getCpf(),
           $usuario->getRg(),
           $usuario->getEndereco(),
           $usuario->getEmail(),
           $usuario->getAtivo(),
           $usuario->getIdLogin()
       );
       if($statement->execute($statementDados))
            return true;
        else
        {
            return false;
        }    
    }

    public function updateUsuario(Usuario $usuario)
    {
        $sql = "UPDATE usuario SET nome = ?, cpf = ?, rg = ?, endereco = ?, email = ?, ativo = ?, idLogin = ? WHERE id_usuario = ? ";
        $statement = $this->connection->prepare($sql);
        $statementDados = array(
            $usuario->getNome(),
            $usuario->getCpf(),
            $usuario->getRg(),
            $usuario->getEndereco(),
            $usuario->getEmail(),
            $usuario->getAtivo(), 
            $usuario->getIdUsuario(),
            $usuario->getIdLogin()
        );
        if ($statement->execute($statementDados)) {
             echo 'Registro atualizado com sucesso';
             } else {
                 echo 'Erro ao executar o script no banco';
                }
            }

    public function deleteUsuario($id_usuario)
    {
        $sql = " UPDATE usuario SET ativo = 0 WHERE $id_usuario ? ";
        $statement = $this->connection->prepare($sql);
        if ($statement->execute(array($id_usuario))) {
            return true;
        } else {
            return false;
        }
    }

    public function getUsuarios()
    {
        $sql = "SELECT * FROM usuario where ativo = 1";
        // conectando e preparando o Sql pra rodar no banco
        $statement = $this->connection->prepare($sql);
        // executando no banco
        if ($statement->execute()) {
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            return [];
        }
    }
}