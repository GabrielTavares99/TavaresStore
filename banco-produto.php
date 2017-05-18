<?php 
	function listaProduto($conexao){
		$produtos = array();
		$consulta = mysqli_query($conexao,"SELECT p.*,c.nome AS categoria_nome FROM tb_produtos AS p JOIN tb_categorias AS c ON p.categoria_id = c.id");
		while ($produto = mysqli_fetch_assoc($consulta)) {
			array_push($produtos,$produto);
		}

		return $produtos;
	}

		function insereProduto($conexao,$nome,$preco,$descricao, $categoria_id, $usado){

		$query = "INSERT INTO tb_produtos (nome,preco,descricao,categoria_id,usado) VALUES ('{$nome}',{$preco},'{$descricao}',{$categoria_id},{$usado})";

		$resultadoDaInsercao = mysqli_query($conexao,$query);

		return $resultadoDaInsercao;

	}

	function removeProduto($conexao,$id){
		$query = "DELETE FROM tb_produtos WHERE id = {$id}";
		return mysqli_query($conexao,$query);
	}

	function buscaProduto($conexao, $id){

		$query = "SELECT * FROM tb_produtos WHERE id = {$id}";
		$consulta = mysqli_query($conexao,$query);
		$produto = mysqli_fetch_assoc($consulta);

		return $produto;
	}

	function alteraProduto($conexao,$id,$nome,$preco,$descricao,$categoria_id,$usado){
		$query = "UPDATE tb_produtos
		SET nome = '{$nome}'
		,preco = {$preco}
		,descricao = '{$descricao}'
		,categoria_id = {$categoria_id}
		,usado = {$usado} 
		WHERE id = '{$id}'";
		
		return mysqli_query($conexao,$query);
	}