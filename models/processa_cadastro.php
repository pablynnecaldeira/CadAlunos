<?php
// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclua aqui a lógica para se conectar ao banco de dados
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

    // Limpar e validar os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Hash da senha (recomendado para segurança)
    $hashed_senha = password_hash($senha, PASSWORD_DEFAULT);

    // Preparar e executar a consulta SQL para inserir os dados
    $sql = "INSERT INTO login (email, senha) VALUES ('$email', '$hashed_senha')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Usuário cadastrado com sucesso!'); window.location.href='../index.php';</script>";
        exit();
    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }

    // Fechar conexão com o banco de dados
    $conn->close();
} else {
    // Se o formulário não foi enviado corretamente, redirecione de volta para a página de cadastro
    header("Location: cadastro.php");
    exit();
}
