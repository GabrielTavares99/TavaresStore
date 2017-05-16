<?php 
	include("cabecalho.php"); 
	include("banco-produto.php");
?>

	<?php 
		$nome = $_POST["nome"];
		$preco = $_POST["preco"];
		$descricao = $_POST["descricao"];
		
		include("conecta.php");


		if (insereProduto($conexao,$nome,$preco, $descricao)) {
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