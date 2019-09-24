<?php 
require_once"include/conexao.php";

// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações da empresa
if (isset($id)) {
	$sql = "SELECT * FROM finalizacao WHERE id = $id";
	$query = mysqli_query($obj->con, $sql);
	$resultado = mysqli_fetch_array($query);

		// Verificar se a empresa existe
	if (is_null($resultado)) {
		die("Pacote não encontrado.");
	}
}

?>