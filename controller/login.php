<?php
session_start();

// Verificar se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar as credenciais do usuário (substitua esta verificação por uma consulta ao banco de dados)
    $email = $_POST['email']; // Supondo que o campo do formulário seja chamado 'email'
    $senha = $_POST['senha']; // Supondo que o campo do formulário seja chamado 'senha'

    // Incluir aqui a lógica para se conectar ao banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "user_cadastro";

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Consulta SQL para verificar se as credenciais estão corretas
    $sql = "SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuário encontrado, verificar senha
        $row = $result->fetch_assoc();
        if (password_verify($senha, $row['senha'])) {
            // Senha correta, definir variável de sessão para indicar login bem-sucedido
            $_SESSION['loggedin'] = true;
            header("Location: ../view/dashboard.php");
        } else {
            // Senha incorreta, exibir mensagem de erro
            $error = "E-mail ou senha incorretos.";
            echo "<script>alert('E-mail ou senha incorretos.'); window.location.href='../index.php';</script>";
        }
    } else {
        // Usuário não encontrado, exibir mensagem de erro
        $error = "E-mail ou senha incorretos.";
        echo "<script>alert('E-mail ou senha incorretos.'); window.location.href='../index.php';</script>";
    }
    
    // Fechar conexão com o banco de dados
    $conn->close();
    
}
