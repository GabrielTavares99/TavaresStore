<?php include("cabecalho.php"); ?>
			<h1 id="titulo">Seja Bem-Vindo!</h1>

		<?php 
			if (isset($_GET['logado']) && $_GET['logado'] == 1) :
		?>
			<!--<p class="alert-success">Logado</p>-->
		<?php 
			elseif(isset($_GET['logado']) && $_GET['logado']==0) :
		?>
			<p class="alert-danger">Usuário não encotrado ou incorreto!</p>
		<?php 
			endif
		?>
		
		<?php 
			if (isset($_COOKIE['usuario_logado'])) :
		?>
			<p class="alert-success">Você está logado como <?= $_COOKIE['usuario_logado'] ?></p>
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

<script src="principal.js"></script>