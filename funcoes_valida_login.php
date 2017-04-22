<?php
	function validaLogin($login, $senha){

		//normalmente validar direto de um banco de dados
		$login_bd = 'marcio.almeida';
		$senha_bd = '123456';

		if($login == $login_bd && $senha == $senha_bd){
			return true;
		}

		return false;

	}


?>