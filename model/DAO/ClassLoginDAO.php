<?php
require_once('../ClassLogin.php');
require_once('Connect.php');

class LoginDAO extends Connect
{
    public function insertLogin(Login $login)
    {
        $sql = "INSERT INTO login(email,senha) VALUES (?,?)";
        $statement = $this->connection->prepare($sql);
        $statementDados = array(
            $login->getEmail(),
            $login->getSenha()
        );
        if($statement->execute($statementDados))
            echo 'Registro inserido com sucesso';
        else
        {
            echo 'Erro ao executar o script no banco';
        }    
    }

    public function updateLogin(Login $login)
    {
        $sql = "UPDATE login SET email = ?, senha = ? WHERE idlogin = ?";
        $statement = $this->connection->prepare($sql);
        $statementDados = array(
            $login->getEmail(),
            $login->getSenha(),
            $login->getIdLogin()
        );
        if ($statement->execute($statementDados))
        {
            echo 'Registro atualizado com sucesso';
        } else {
            echo 'Erro ao executar o script no banco';
        }
    }

    public function getLoginByEmail($email)
    {
        $sql = "SELECT idlogin, email, senha FROM login WHERE email = ?";
        $statement = $this->connection->prepare($sql);
        $statement->execute(array($email));
        $row = $statement->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            $login = new Login();
            $login->setIdLogin($row['idlogin']);
            $login->setEmail($row['email']);
            $login->setSenha($row['senha']);
            return $login;
        } else {
            return null;
        }
    }
}