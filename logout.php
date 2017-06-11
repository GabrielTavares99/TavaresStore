<?php

	include("logica-usuario.php");
	logout();
	session_start();
	$_SESSION["success"] = "Deslogado com sucesso, sentirei saudade.";
	header("Location: index.php");
	