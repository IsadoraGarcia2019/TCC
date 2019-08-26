<?php

	// ======================
	//    Logoff de $_SESSION
	// ======================

	session_start();

	unset($_SESSION['logado']);
	unset($_SESSION['id_usuario']);
	unset($_SESSION['nome_usuario']);

	session_destroy();

	header('Location: ../login.php');

?>