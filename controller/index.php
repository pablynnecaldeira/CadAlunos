<?php
include ('./ControleUsuario.php');

$controleUsuario = new ControleUsuario();

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);
        $cpf = htmlspecialchars($_POST['cpf']);
        $rg = htmlspecialchars($_POST['rg']);
        $endereco = htmlspecialchars($_POST['endereco']);

        $idLogin = $controleUsuario->cadastrarUsuario($email, $senha);
        $controleUsuario->cadastrarDadosUsuario($nome, $cpf, $rg, $endereco, $email, $idLogin);
        echo "<script>window.location.href='../view/listagem/index.php';</script>";
        break;

    case 'editar':
        $id = $_REQUEST['id'];
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $cpf = htmlspecialchars($_POST['cpf']);
        $rg = htmlspecialchars($_POST['rg']);
        $endereco = htmlspecialchars($_POST['endereco']);
        print_r($id);
        print_r($endereco);
        print_r($rg);
        print_r($cpf);
        print_r($email);
        print_r($nome );

        $controleUsuario->editarUsuario($id, $nome, $email, $cpf, $rg, $endereco);
        echo "<script>window.location.href='../view/listagem/index.php';</script>";
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