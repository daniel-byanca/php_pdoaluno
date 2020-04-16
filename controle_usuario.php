<?php 
require 'classes/Usuario.php';
require 'classes/UsuarioDAO.php';

$usuario = new Usuario();
$usuarioDAO = new UsuarioDAO();

$acao = $_GET['acao'];
$id = '';
if(isset($_GET['id']) && $_GET['id'] != '') {
	$id = $_GET['id'];
}

if($acao == 'deletar') {

	$usuarioDAO->deletar($id);
	$msg = 'Usuario excluída com sucesso';

} else if($acao == 'cadastrar') {

	$usuario->setNome($_POST['nome']);
	$usuario->setEmail($_POST['email']);
	$usuario->setSenha($_POST['senha']);
	$usuarioDAO->insereUsuario($usuario);
	$msg = 'Usuario cadastrada com sucesso';

} else if($acao == 'editar') {

	$usuario->setId($_POST['id']);
	$usuario->setNome($_POST['nome']);
	$usuario->setEmail($_POST['email']);
	$usuario->setSenha($_POST['senha']);
	$usuarioDAO->alteraUsuario($usuario);
	$msg = 'Usuario alterada com sucesso';
	
}


header("Location: usuarios.php?msg=$msg");