<?php
	
	// Matando a sessão
	session_start();
	
	unset($_SESSION['logado']);
	unset($_SESSION['nome']);
	unset($_SESSION['id']);

	session_destroy();

	// Redirecionando para login
	header('Location: ../login.php');

?>