<?php 

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do pacote
if (isset($id)) {
	$sql = "SELECT * FROM finalizacao WHERE id_usuario = $_SESSION['id_usuario']
	JOIN pacotes ON pacotes.id = finalizacao.id_pacote";

	$queryVenda = mysqli_query($obj->con, $sql);
	$resultadoVenda = mysqli_fetch_array($queryVenda);

		// Verificar se o pacote existe
	if (is_null($resultadoVenda)) {
		die("Pacote não encontrado.");
	}
}
?>