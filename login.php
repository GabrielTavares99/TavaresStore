<?php
	$senha = md5($_POST['senha']);
	$email = $_POST['email'];

	include("conecta.php");
	include("banco-usuario.php");

	$usuario = buscarUsuario($conexao, $email, $senha);

	if ($usuario == null) {
		header("Location: index.php?logado=0");
	}else {
		setcookie("usuario_logado",$usuario['email'], time()+60);
		header("Location: index.php?logado=1");
		//var_dump($usuario);
	}
	die();