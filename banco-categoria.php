<?php 

	function listaCategorias($conexao){
		$produtos = array();
		$query = "SELECT * FROM tb_categorias";
		$resultado = mysqli_query($conexao,$query);
		while ($produto = mysqli_fetch_assoc($resultado)) {
			array_push($produtos, $produto);
		}
		return $produtos;
	}