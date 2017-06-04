<?php include("cabecalho.php"); ?>
			<h1 id="titulo">Seja Bem-Vindo!</h1>

		<?php 
			if (isset($_GET['logado']) && $_GET['logado'] == 1) :
		?>
			<p class="alert-success">Logado</p>
		<?php 
			else :
		?>
			<p class="alert-danger">Não cadastrado</p>
		<?php 
			endif
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
<?php include("rodape.php"); ?>

<script src="principal.js"></script>