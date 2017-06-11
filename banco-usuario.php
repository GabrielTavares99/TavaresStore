<?php 

	function buscarUsuario($conexao, $email, $senha){
			$query = "SELECT * FROM tb_usuarios WHERE email = '{$email}' AND senha = '{$senha}' ";
			$resultado = mysqli_query($conexao, $query);
			$usuario = mysqli_fetch_assoc($resultado);	
			return $usuario;
	}