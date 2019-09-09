<?php
error_reporting(0);

		// Conexão com o banco de dados 
		CONST HOST = "cheffdelivery.cf:3306";
		CONST USER = "cheffdel";
		CONST PASS = "entra21@Blusoft";
		CONST DB   = "cheffdel_master";

$con = mysqli_connect(HOST, USER, PASS, DB);

if (!$con) {
	die("ERRO: Não foi possível conectar no banco de dados -> " . mysqli_connect_error());
}

?>