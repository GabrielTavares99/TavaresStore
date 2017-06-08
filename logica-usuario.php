<?php

function verificaUsuario(){
	if (!usuarioEstaLogado()) {
		header("Location: index.php?falha=1");
	}
}

function usuarioEstaLogado(){
	return isset($_COOKIE["usuario_logado"]);
}

function usuarioLogado(){
	return $_COOKIE["usuarioLogado"];
}

function logaUsuario($email){
	setcookie("usuario_logado",$email, time()+60);
	die();
}