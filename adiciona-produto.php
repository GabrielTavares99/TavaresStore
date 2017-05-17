<?php 
	include("cabecalho.php"); 
	include("banco-produto.php");
?>

	<?php 
		$nome = $_POST["nome"];
		$preco = $_POST["preco"];
		$descricao = $_POST["descricao"];
		$categoria_id = $_POST["categoria_id"];
		
		if (array_key_exists('usado', $_POST)) {
			$usado = "true";
		}else{
			$usado = "false";
		}

		include("conecta.php");


		if (insereProduto($conexao,$nome,$preco, $descricao, $categoria_id, $usado)) {
	?>
					<p class="text-success">
						Produto <?= $nome ?>, <?=$preco?>,<?=$descricao?> adicionado com sucesso!
					</p>
	<?php 
		}else{
			?>
			<?php $msg = mysqli_error($conexao); ?>
					<p class="text-danger">
						Produto <?= $nome ?>, não foi adicionado! <?= $msg; ?>
					</p>
			<?php
		}
		

		mysqli_close($conexao);
	 ?>


<?php include("rodape.php"); ?>