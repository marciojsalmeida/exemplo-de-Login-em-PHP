<?php 
	
	require_once("funcoes_valida_login.php");

	$login_usuario = $_POST['login'];
	$senha_usuario = $_POST['senha'];

	$usuario_validado = validaLogin($login_usuario, $senha_usuario);

	if($usuario_validado){
		echo 'Acesso Liberado , usuario Logado com sucesso !!';
	} else {
		echo 'Nome de usuário ou senha inválidos';
	}


?>