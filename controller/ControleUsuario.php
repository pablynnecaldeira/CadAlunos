<?php
session_start();

class ControleUsuario
{
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "user_cadastro";
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
                // Fechar conexão com o banco de dados
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

        // Precisa agora fazer updateUsuario com os dados inseridos posteriormente no formulario onde tem nome, rg, email, cpf....
}

// Verificar se o formulário de cadastro foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitizar entradas do formulário
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);
        $cpf = htmlspecialchars($_POST['cpf']);
        $rg = htmlspecialchars($_POST['rg']);
        $endereco = htmlspecialchars($_POST['endereco']);

        // Validar e-mail, se necessário

        // Instanciar a classe ControleUsuario
        $ControleUsuario = new ControleUsuario();

        // Cadastrar o usuário (inserção ou atualização)
        $idLogin = $ControleUsuario->cadastrarUsuario($email, $senha);

        // Verificar se o cadastro do login foi bem-sucedido
        if ($idLogin || $idLogin === true) { // Verifica se foi inserção (ID válido) ou atualização (true)
                // Cadastrar dados do usuário
                $ControleUsuario->cadastrarDadosUsuario($nome, $cpf, $rg, $endereco, $email, $idLogin);

                // Exibir mensagem de sucesso e redirecionar
                echo "<script>alert('Usuário cadastrado com sucesso!'); window.location.href='../index.php';</script>";
        } else {
                // Exibir mensagem de erro
                echo "<script>alert('Erro ao cadastrar usuário.'); window.location.href='../view/cadastro.php';</script>";
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