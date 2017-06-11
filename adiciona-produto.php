<?php 
	include("banco-produto.php");
	include("logica-usuario.php");

	if (!usuarioEstaLogado()) {
		header("Location: index.php");
		die();
	}

	$nome = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$categoria_id = $_POST["categoria_id"];
	
	if (array_key_exists("usado", $_POST)) {
		$usado = 1;
	}else{
		$usado = 0;
	}

	include("conecta.php");
	if (insereProduto($conexao,$nome,$preco, $descricao, $categoria_id, $usado)) {
		$_SESSION["success"] = "Adicionado com sucesso!"; 
	}else{
		$msgErro = mysqli_error($conexao);
		$_SESSION["danger"] = "Não foi possível adicionar! ".$msgErro;
	}
	mysqli_close($conexao);

	echo $msgErro;
	header("Location:lista-produto.php");