<?php

session_start();
function verificaUsuario(){
	if (!usuarioEstaLogado()) {
		header("Location: index.php?falha=1");
	}
}

function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
	//return isset($_COOKIE["usuario_logado"]);
}

function usuarioLogado(){
	//return $_COOKIE["usuario_Logado"];
	return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
	$_SESSION["usuario_logado"] = $email;
	//setcookie("usuario_logado",$email, time()+60);
}
function logout(){
	session_destroy();
}