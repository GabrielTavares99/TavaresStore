<?php 
	include("cabecalho.php"); 
	include("banco-produto.php");
	include("conecta.php");
	include("logica-usuario.php");

	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$categoria_id = $_POST["categoria_id"];
		
	if (array_key_exists('usado', $_POST)) {
		$usado = "true";
	}else{
		$usado = "false";
	}

	if (alteraProduto($conexao,$id,$nome,$preco,$descricao,$categoria_id,$usado)) {
		$_SESSION["success"] = $nome.", editado com sucesso!";
	}else{
		$msgErro = mysqli_error($conexao);
		$_SESSION["danger"] = $nome." não foi editado porque ".$msgErro;
	}
	mysqli_close($conexao);
	header("Location:lista-produto.php");
	die();


