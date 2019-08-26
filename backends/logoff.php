<?php
<<<<<<< HEAD

	// ======================
	//    Logoff de $_SESSION
	// ======================

	session_start();

	unset($_SESSION['logado']);
	unset($_SESSION['id_usuario']);
	unset($_SESSION['nome_usuario']);

	session_destroy();

=======
	
	// Matando a sessão
	session_start();
	
	unset($_SESSION['logado']);
	unset($_SESSION['nome']);
	unset($_SESSION['id']);

	session_destroy();

	// Redirecionando para login
>>>>>>> 364dd9c0ebef3a4bcd8a6b34f8a4cb68dbf2a4c3
	header('Location: ../login.php');

?>