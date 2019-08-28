<?php

// Buscar informações do usuario
if (isset($id)) {
	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$queryUsuarios = mysqli_query($con, $sql);
	$resultadoUsuarios = mysqli_fetch_array($queryUsuarios);

		// Verificar se o usuario existe
	if (is_null($resultadoUsuarios)) {
		die("Usuario não encontrado.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$email = $_POST['email'];
	$senha = $_POST['senha'];

		// Identificando se é UPDATE ou INSERT
	if (isset($id)) {
		$sql = "UPDATE usuarios SET email = '$email', senha = '$senha' WHERE id = $id";
	} else {
		$sql = "INSERT INTO usuarios VALUES (DEFAULT, '$email', '$senha')";
	}	
} 
	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {
	$sql = "DELETE FROM usuarios WHERE id = $id";

}

?>