<?php
include ('./ControleUsuario.php');

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);
        $cpf = htmlspecialchars($_POST['cpf']);
        $rg = htmlspecialchars($_POST['rg']);
        $endereco = htmlspecialchars($_POST['endereco']);

        $ControleUsuario = new ControleUsuario();
        $idLogin = $ControleUsuario->cadastrarUsuario($email, $senha);
        $ControleUsuario->cadastrarDadosUsuario($nome, $cpf, $rg, $endereco, $email, $idLogin);
        echo "<script>window.location.href='../view/listagem/index.html';</script>";
        break;

    case 'atualizar':
        break;

    case 'deletar':
        break;

    case 'login':
        break;

    case 'logout':
        break;

    default:
        break;
}