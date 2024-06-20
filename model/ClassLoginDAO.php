<?php

require_once 'Connect.php';
include 'ClassLogin.php';

class ClassLoginDAO extends Connect
{
    public function insertLogin(Login $login)
    {
        $sql = "INSERT INTO login(email,senha) VALUES (?,?)";
        $statement = $this->connection->prepare($sql);
        $statementDados = array(
            $login->getEmail(),
            $login->getSenha()
        );
        if ($statement->execute($statementDados)) {
            return $this->connection->lastInsertId();
        } else {
            echo 'Erro ao executar o script no banco';
        }
    }

    public function updateLogin($idLogin, $email)
    {
        $sql = "UPDATE login SET email = ? WHERE idlogin = ?";
        $statement = $this->connection->prepare($sql);
        $statementDados = array(
            $email,
            $idLogin
        );
        if ($statement->execute($statementDados)) {
            echo 'Registro atualizado com sucesso';
        } else {
            echo 'Erro ao executar o script no banco';
        }
    }

    public function login($email, $senha)
    {
        $sqlUsuario = "SELECT * FROM usuario WHERE email = ? ";
        $statement = $this->connection->prepare($sqlUsuario);
        $statementDados = array($email);
        $statement->execute($statementDados);
        $res = $statement->fetchAll(PDO::FETCH_ASSOC);

        if ($res) {  // Verifica se contém usuário com o email indicado
            $user = $res[0];
            if ($user['ativo'] == 1) {  // Verifica se o usuário está ativo
                $sqlLogin = "SELECT * FROM login WHERE email = ?";
                $statement = $this->connection->prepare($sqlLogin);
                $statementDados = array($email);
                $statement->execute($statementDados);
                $res = $statement->fetchAll(PDO::FETCH_ASSOC);
                $user = $res[0];

                if ($user['email'] === $email && $user['senha'] === $senha) {
                    return '1'; // Email e Senha Corretos
                } else {
                    return '2'; // Senha Errada
                }
            }
            return '3'; // Usuário Inativo
        }
        return '4'; // Usuario não existe
    }
}