<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-produto.php");
	include("logica-usuario.php");

	$id = $_POST['id'];
	removeProduto($conexao, $id);

	$_SESSION["success"] = "Removido com sucesso!";
	header("Location: lista-produto.php");

	die();