

<?php 

	include("cabecalho.php");

	include("conecta.php");

	include("banco-produto.php");


	$produtos = listaProduto($conexao);

?>

<?php 
	if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) :
?>
		<p class="alert-success">Produto removido com sucesso.</p>
<?php 
	endif
?>

	<table class="table table-striped table-bordered">
		<?php 
			foreach ($produtos as $produto) :
		?>
		<tr>
			<td><?= $produto['nome']?></td>
			<td><?= $produto['preco'] ?></td>
			<td><?= substr($produto['descricao'],0,35); ?></td>
			<td>
				<form action="remove-produto.php" method="POST">
					<input type="hidden" name="id" value="<?=$produto["id"]?>">
					<input type="submit" value="Remover" class="btn btn-danger">		
				</form>
			</td>
		</tr>
		<?php 
			endforeach;
		?>
	</table>
<?php

	include("rodape.php");
 ?>