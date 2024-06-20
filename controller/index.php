<?php
require ('../model/ClassUsuarioDAO.php');
require ('../model/ClassLoginDAO.php');
require ('../model/ClassUsuario.php');

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);
        $cpf = htmlspecialchars($_POST['cpf']);
        $rg = htmlspecialchars($_POST['rg']);
        $endereco = htmlspecialchars($_POST['endereco']);

        $loginDao = new ClassLoginDAO();
        $login = new Login($email, $senha);

        $idLogin = $loginDao->insertLogin($login);

        $userDao = new ClassUsuarioDAO();
        $user = new Usuario($nome, $cpf, $rg, $endereco, $email, true, $idLogin);
        $userDao->insertUsuario($user);

        echo "<script>alert('Cadastro Realizado!')</script>";
        echo "<script>window.location.href='../index.php';</script>";

        break;

    case 'editar':
        $id = $_REQUEST['id'];
        $nome = htmlspecialchars($_POST['nome']);
        $email = htmlspecialchars($_POST['email']);
        $cpf = htmlspecialchars($_POST['cpf']);
        $rg = htmlspecialchars($_POST['rg']);
        $endereco = htmlspecialchars($_POST['endereco']);
        $idLogin = htmlspecialchars($_POST['id_login']);

        $user = new Usuario($nome, $cpf, $rg, $endereco, $email, true, $idLogin);

        $userDAO = new ClassUsuarioDAO();
        $userDAO->updateUsuario($id, $user);

        $loginDAO = new ClassLoginDAO();
        $loginDAO->updateLogin($idLogin, $email);

        echo "<script>alert('Cadastro Atualizado!')</script>";
        echo "<script>window.location.href='../view/listagem/index.php';</script>";
        break;

    case 'deletar':
        $id = $_REQUEST['id'];

        $userDao = new ClassUsuarioDAO();
        $userDao->deleteUsuario($id);

        echo "<script>alert('Cadastro Apagado!')</script>";
        echo "<script>window.location.href='../index.php';</script>";
        break;

    case 'login':
        $email = htmlspecialchars($_POST['email']);
        $senha = htmlspecialchars($_POST['senha']);
        $loginDao = new ClassLoginDAO();
        $logando = $loginDao->login($email, $senha);

        switch ($logando) {
            case '1':
                echo "<h1 id='message' style='width:50%; margin:auto; color: #005594; text-align: center; margin-top: 20%; font-size: 24px;  border-bottom: 1.5px solid #f78b1f;'>Logando...</h1>";
                echo "<script>
                        setTimeout(function() {
                            window.location.href='../view/listagem/index.php';
                        }, 2000); // 2000 milissegundos = 2 segundos
                    </script>";

                break;
            case '2':
                echo "<script>alert('Senha Errada')</script>";
                echo "<script>window.location.href='../index.php';</script>";
                break;
            case '3':
                echo "<script>alert('Usuário Está Inativo!')</script>";
                echo "<script>window.location.href='../index.php';</script>";
                break;
            case '4':
                echo "<script>alert('Usuário Não Possui Cadastro!')</script>";
                echo "<script>window.location.href='../index.php';</script>";
                break;
        }
        break;

    default:
        break;
}