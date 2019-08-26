<?php

// Buscar informações dos usuarios
$sqlUsuarios = "SELECT * FROM usuarios";
$queryUsuarios = mysqli_query($con, $sqlUsuarios);

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$email = $_POST['email'];
	$senha = $_POST['senha'];

		// Identificando se é UPDATE ou INSERT
	if (isset($id_aluno)) {
		$sql = "UPDATE usuarios SET email = '$email', senha = '$senha' WHERE id = $id_cliente";
	} else {
		$sql = "INSERT INTO usuarios VALUES (DEFAULT, '$email', '$senha')";
	}	
} 
	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {
	$sql = "DELETE FROM usuarios WHERE id = $id";

}

?>