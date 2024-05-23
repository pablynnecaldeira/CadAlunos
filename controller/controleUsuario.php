<?php 
require_once '';
require_once '';

$id = @$_POST['index'];
$nome = @$_POST['nome'];
$email = @$_POST['email'];
$acao = @$_GET['ACAO'];


// $novoUsuario = new ClassUsuario();
$novoUsuario-> setIdUsuario($id);
$novoUsuario-> setNome($nome);
$novoUsuario-> setEmail($email);

$classUsuarioDAO = new $ClassUsuarioDAO();

switch ($_REQUEST["acao"]){
    case "cadastrarUsuario";
    function buscarUsuario($idUsuario) {} 
    break;

    case "inserirUsuario";
    function inserirUsuario() {} 
    break;

    case "listarUsuarios";
    function listarUsuarios() {}
    break;

    case "alterarUsuario";
    function alterarUsuario($alterarUsuario) {
            // $pdo Conexao::getInstance();
    }
    break;

    case "excluirUsuarios";
    function excluirUsuarios($idUsuario) {
            // $pdo Conexao::getInstance();
    }
    break;
}
?>