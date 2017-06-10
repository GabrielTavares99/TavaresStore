<?php 
	include("cabecalho.php");
	include("logica-usuario.php");
?>

		<h1 id="titulo">Seja Bem-Vindo!</h1>

		<?php 
			if (isset($_GET["logout"]) && $_GET["logout"] == 1) :
		?>
			<p class="alert-success">Deslogado com sucesso! Sentirei saudade :´(</p>
		<?php
			endif;
			if (isset($_GET["falha"])) :
		?>
			<p class="alert-danger">Você precisa estar logado!</p>
		<?php		
			endif;

			if( isset($_GET['logado']) && $_GET['logado']==0 ) :
		?>
			<p class="alert-danger">Usuário não encotrado ou incorreto!</p>
		<?php 
			endif
		?>
		
		<?php 
			if (usuarioEstaLogado()) :
		?>
			<p class="alert-success">Você está logado como <?= usuarioLogado() ?></p>
			<a href="logout.php">Deslogar</a>
		<?php 
			else :
		?>
			<form method="POST" action="login.php" class="form">
				<h2>Login</h2>
				<table class="table">
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" class="form-control"> </td>
					</tr>
					<tr>
						<td>Senha</td>
						<td><input type="password" name="senha" class="form-control"></td>
					</tr>
					<tr>
						<td><button type="submit" class="btn btn-primary">Entrar</button></td>
					</tr>
				</table>
			</form>
		<?php endif ?>
<?php include("rodape.php"); ?>
<!--
<script src="principal.js"></script>