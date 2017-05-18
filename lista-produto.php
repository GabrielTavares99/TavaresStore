<?php 

	include("cabecalho.php");

	include("conecta.php");

	include("banco-produto.php");


	$produtos = listaProduto($conexao);

	$cont_linhas = 1;

?>

<?php 
	if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) :
?>
		<p class="alert-success">Produto removido com sucesso.</p>
<?php 
	endif
?>

	<table class="table table-bordered table-hover">
		<thead class="thead">
			<tr>
				<th>#</th>
				<th>Nome</th>
				<th>Preço</th>
				<th>Descrição</th>
				<th>Status</th>
				<th>Categoria</th>
				<th>Operações</th>
				<th>Operações</th>
			</tr>
		</thead>
		<tbody>
		<?php 
			foreach ($produtos as $produto) :
		?>
		<tr>
			<th scope="row">
				<?php 
					echo $cont_linhas;
					$cont_linhas+=1;
				?>
			</td>

			<td><?= $produto['nome']?></td>
			<td><?= $produto['preco'] ?></td>
			<td><?= substr($produto['descricao'],0,35); ?></td>
			<td>
				<?php
					if ($produto['usado'] == true) {
						echo "Usado";
					}else{
						echo "Não usado";
					}
				?>
				
			</td>
			<td><?= $produto['categoria_nome'] ?></td>
				<form action="altera-produto-formulario.php" method="POST">
						<td>
							<input type="hidden" name="id" value="<?=$produto["id"]?>">
							<input type="submit" value="Alterar" class="btn btn-primary">
						</td>
				</form>

			<td>
				<form action="remove-produto.php" method="POST">
					<input type="submit" value="Remover" class="btn btn-danger">
					<input type="hidden" name="id" value="<?=$produto["id"]?>">	
				</form>
			</td>
		</tr>
		<?php 
			endforeach;
		?>
		</tbody>
	</table>
<?php

	include("rodape.php");
 ?>