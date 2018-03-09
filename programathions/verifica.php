<?php
	
	//inicia sessao
	session_start();

	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];

	//verifica se login e senha estao certos
	if ($usuario == "admin" and $senha == "12345") {
		echo "Parabéns, acertou";
		
		$_SESSION['nome'] = "Administrador";
		$_SESSION['login'] = "admin";
		

		header("Location:index.php");


	}else{
		echo "Dados inválidos";
		
		header("Location:index.php?erro=1");

	}