<?php 
	error_reporting(E_ALL ^ E_NOTICE);
	include("mostra-alerta.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Minha loja</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
</head>

<body>

	<!-- CRIANDO O MENU -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- CRIANDO O CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand"> Tavares Store</a>
				</div>
				
				<!-- ITEMS -->
				<div >
					<ul class="nav navbar-nav">
						<li><a href="produto-formulario.php">Adiciona Produto</a></li>
						<li><a href="lista-produto.php">Lista Produto</a></li>
					</ul>
				</div>

			<!-- O CONTAINER ACABA AQUI -->
			</div>

		</div>

	<!-- CONTAINER DO CONTEÚDO GERAL DO SITE -->
    	<div class="container">

        	<div class="principal">

	        <?php 
				mostraAlerta("danger");
				mostraAlerta("success");
        	?>