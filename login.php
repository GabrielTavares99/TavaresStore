<?php
	$senha = md5($_POST['senha']);
	$email = $_POST['email'];

	include("conecta.php");
	include("banco-usuario.php");
	include("logica-usuario.php");

	$usuario = buscarUsuario($conexao, $email, $senha);

	if ($usuario == null) {
		$_SESSION["danger"] = "Login ou Senha inválidos.";
		header("Location: index.php");
	}else {
		logaUsuario($email);
		$_SESSION["success"] = "Usuário logado com sucesso!";
		header("Location: index.php");
		//var_dump($usuario);
	}
	