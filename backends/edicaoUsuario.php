<?php

session_start();

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do cliente
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do usuario
if (isset($id)) {
	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$queryUsuarios = mysqli_query($obj->con, $sql);
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

	$sql = "UPDATE usuarios SET email = '$email', senha = '$senha' WHERE id = $id";
}	

	// Executando o SQL
if (mysqli_query($obj->con, $sql)) {
	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Dados editados com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);
}
	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {

	$sql = "DELETE FROM usuarios WHERE id = $id";
	
	if (mysqli_query($obj->con, $sql)) {

		if (isset($_SESSION['tp_usuario']) && $_SESSION['tp_usuario'] == 'cliente') {

			$sql = "DELETE FROM clientes WHERE id = '{$_SESSION['fk_usuario']}'";
			$query = mysqli_query($obj->con, $sql);

		}
		if (isset($_SESSION['tp_usuario']) && $_SESSION['tp_usuario'] == 'restaurante') {

			$sql = "DELETE FROM restaurantes WHERE id = '{$_SESSION['fk_usuario']}'";
			$query = mysqli_query($obj->con, $sql);
			
		}
		if (isset($_SESSION['tp_usuario']) && $_SESSION['tp_usuario'] == 'empresa') {

			$sql = "DELETE FROM empresas WHERE id = '{$_SESSION['fk_usuario']}'";
			$query = mysqli_query($obj->con, $sql);
			
		}

		$alerta['tipo'] = "success";
		$alerta['mensagem'] = "Dados excluidos com sucesso!";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);
	}

}
?>