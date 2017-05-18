<?php 
	include("cabecalho.php");
	include("conecta.php");
	include("banco-categoria.php");
	include("banco-produto.php");

	$id =  $_POST["id"];

	$produto = buscaProduto($conexao,$id);

 ?>
			<h1>Formulário de edição</h1>
			<form action="altera-produto.php" method="POST">
				<input type="hidden" name="id" value="<?=$produto["id"]?>">	
				<table class="table">
					<tr>
						<td>Nome:</td>
						<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome'] ?>"></td>
					</tr>
					<tr>
						<td>Preço:</td>
						<td><input class="form-control" type="number" name="preco" value="<?=$produto['preco'] ?>"></td>
					</tr>
					<tr>
						<td>Categoria:</td>
						<td>
							<select class="form-control"  name="categoria_id">
								<?php 

									foreach (listaCategorias($conexao) as $categoria) :
										$categoriaSelecionada = $produto['categoria_id'] == $categoria['id'];
										$selecao = $categoriaSelecionada ? "selected='selected'":"";
								 ?>
										<option <?= $selecao ?> value="<?= $categoria['id'] ?>"><?=$categoria["nome"]?>
										</option>
								<?php 
									endforeach;
								 ?>
								 	</select>
						 </td>
					</tr>
					<tr>
						<td></td>
						<td>
							<?php 
								$usado = $produto['usado'] ? "checked = 'checked'" : "";
							?>
							<input type="checkbox" name="usado" <?= $usado ?> value="true"> Usado	
						</td>
					</tr>
					<tr>
						<td>Descrição</td>
						<td><textarea name="descricao" class="form-control"><?=$produto['descricao']?> </textarea></td>
					</tr>
					<tr>
						<td><input class="btn btn-primary" type="submit" value="Editar"></td>
					</tr>
				</table>

				
			</form>
<?php include("rodape.php"); ?>