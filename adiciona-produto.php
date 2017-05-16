<?php 
	include("cabecalho.php"); 
	include("banco-produto.php");
?>

	<?php 
		$nome = $_GET["nome"];
		$preco = $_GET["preco"];
		
		include("conecta.php");


		if (insereProduto($conexao,$nome,$preco)) {
	?>
					<p class="text-success">
						Produto <?= $nome ?>, <?= $preco ?> adicionado com sucesso!
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