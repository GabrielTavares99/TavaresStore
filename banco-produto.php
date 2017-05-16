<?php 
	function listaProduto($conexao){
		$produtos = array();
		$consulta = mysqli_query($conexao,"SELECT * FROM tb_produtos");
		while ($produto = mysqli_fetch_assoc($consulta)) {
			array_push($produtos,$produto);
		}

		return $produtos;
	}

		function insereProduto($conexao,$nome,$preco,$descricao){

		$query = "INSERT INTO tb_produtos (nome,preco,descricao) VALUES ('{$nome}','{$preco}','{$descricao}')";

		$resultadoDaInsercao = false;

		$resultadoDaInsercao = mysqli_query($conexao,$query);

		return $resultadoDaInsercao;

	}

	function removeProduto($conexao,$id){
		$query = "DELETE FROM tb_produtos WHERE id = {$id}";
		return mysqli_query($conexao,$query);
	}