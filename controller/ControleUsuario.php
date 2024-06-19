<?php
session_start();

class ControleUsuario
{
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "dbpoo";
        private $conn;

        public function __construct()
        {
                // Criar conexão
                $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

                // Verificar conexão
                if ($this->conn->connect_error) {
                        die("Conexão falhou: " . $this->conn->connect_error);
                }
        }

        public function __destruct()
        {
                $this->conn->close();
        }

        public function cadastrarUsuario($email, $senha)
        {
                // Verificar se o usuário já existe pelo email
                $stmt = $this->conn->prepare("SELECT idlogin FROM login WHERE email = ?");
                if (!$stmt) {
                        die("Erro na preparação da consulta: " . $this->conn->error);
                }

                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                        // Atualizar a senha se o usuário já existir
                        $stmt = $this->conn->prepare("UPDATE login SET senha = ? WHERE email = ?");
                        if (!$stmt) {
                                die("Erro na preparação da consulta: " . $this->conn->error);
                        }

                        $senhaHashed = password_hash($senha, PASSWORD_DEFAULT);
                        $stmt->bind_param("ss", $senhaHashed, $email);

                        if ($stmt->execute()) {
                                $stmt->close();
                                return true; // Indica que a senha foi atualizada com sucesso
                        } else {
                                $stmt->close();
                                die("Erro ao atualizar senha: " . $this->conn->error);
                        }
                } else {
                        // Inserir novo registro se o usuário não existir
                        $stmt = $this->conn->prepare("INSERT INTO login (email, senha) VALUES (?, ?)");
                        if (!$stmt) {
                                die("Erro na preparação da consulta: " . $this->conn->error);
                        }

                        $senhaHashed = password_hash($senha, PASSWORD_DEFAULT);
                        $stmt->bind_param("ss", $email, $senhaHashed);

                        if ($stmt->execute()) {
                                $idLogin = $stmt->insert_id;
                                $stmt->close();
                                return $idLogin; // Retorna o ID do novo login inserido
                        } else {
                                $stmt->close();
                                die("Erro ao cadastrar login: " . $this->conn->error);
                        }
                }
        }

        public function cadastrarDadosUsuario($nome, $cpf, $rg, $endereco, $email, $idLogin)
        {
                // Inserir na tabela usuario
                $stmt = $this->conn->prepare("INSERT INTO usuario (nome, cpf, rg, endereco, email, idLogin) VALUES (?, ?, ?, ?, ?, ?)");
                if (!$stmt) {
                        die("Erro na preparação da consulta: " . $this->conn->error);
                }

                $stmt->bind_param("sssssi", $nome, $cpf, $rg, $endereco, $email, $idLogin);

                if ($stmt->execute()) {
                        $stmt->close();
                        return true;
                } else {
                        $stmt->close();
                        die("Erro ao cadastrar usuário: " . $this->conn->error);
                }
        }

        public function listarUsuarios()
        {
                $sql = "
                        SELECT 
                            u.id_usuario,
                            u.nome,
                            u.cpf,
                            u.rg,
                            u.endereco,
                            u.email AS email,
                            u.ativo,
                            l.idlogin,
                            l.senha
                        FROM 
                            usuario u
                        JOIN 
                            login l ON u.idLogin = l.idlogin";

                $result = $this->conn->query($sql);
                return $result;
        }

        public function pegarUsuarioPorId($id)
        {
                $sql = "
                        SELECT 
                            u.id_usuario,
                            u.nome,
                            u.cpf,
                            u.rg,
                            u.endereco,
                            u.email AS email,
                            u.ativo,
                            l.idlogin,
                            l.senha
                        FROM 
                            usuario u
                        JOIN 
                            login l ON u.idLogin = l.idlogin
                        WHERE 
                            u.id_usuario = $id;";

                $result = $this->conn->query($sql);
                return $result;
        }

        public function editarUsuario($id, $nome, $email, $cpf, $rg, $endereco)
        {
                // atualizar dados
        }
}

/*

SCRIPT PARA CRIAR DB DE TESTE PARA O QUE PRECISAMOS:

LIGAR XAMP E ABRIR PHPMYADMIN

CRIAR DB "user_cadastro"

EXECUTAR SQL PARA CRIAR TABELAS :

CREATE TABLE login (
idlogin INT NOT NULL AUTO_INCREMENT,
email VARCHAR(150) NOT NULL,
senha VARCHAR(150) NOT NULL,
PRIMARY KEY (idlogin)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE usuario (
id_usuario INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(150) NOT NULL,
cpf VARCHAR(11) NOT NULL,
rg VARCHAR(11) NOT NULL,
endereco VARCHAR(150) NOT NULL,
email VARCHAR(100) NOT NULL,
ativo TINYINT(1) NOT NULL DEFAULT 1,
idLogin INT,
PRIMARY KEY (id_usuario),
FOREIGN KEY (idLogin) REFERENCES login(idlogin)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


*/