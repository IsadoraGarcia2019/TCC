<?php
	
		// Conexão com o banco de dados 
	CONST HOST = "127.0.0.1";
	CONST USER = "root";
	CONST PASS = "";
	CONST DB   = "cheff_delivery";

	$con = mysqli_connect(HOST, USER, PASS, DB);

	if (!$con) {
		die("ERRO: Não foi possível conectar no banco de dados -> " . mysqli_connect_error());
	}

?>