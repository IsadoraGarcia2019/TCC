<?php

	// ======================
	//    Logoff de $_SESSION
	// ======================

	session_start();

	unset($_SESSION['logado']);
	unset($_SESSION['id_usuario']);
	unset($_SESSION['nome_usuario']);

	session_destroy();

	// Matando a sessão
	session_start();
	
	unset($_SESSION['logado']);
	unset($_SESSION['nome']);
	unset($_SESSION['id']);

	session_destroy();

	// Redirecionando para login
	header('Location: ../login.php');

?>