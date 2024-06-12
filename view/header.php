<?php
session_start();
require_once '../controller/Auth.php';

// Verificar se o usuário está logado
Auth::requireLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Cadastro de Usuários</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Cadastro de Usuários</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="dashboard.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_user.php">Cadastrar Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list_users.php">Listar Usuários</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="../controller/logout.php">Logout</a>
    </li>
</ul>
        </div>
    </nav>
