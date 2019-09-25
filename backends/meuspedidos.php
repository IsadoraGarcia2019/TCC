<?php 

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do pedido
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do pedido
if (isset($id)) {
	$sql = "SELECT * FROM finalizacao WHERE id_usuario = $_SESSION['id_usuario']"
	$queryPedido = mysqli_query($obj->con, $sql);
	$resultadoPedido = mysqli_fetch_array($queryPedido);

		// Verificar se o pedido existe
	if (is_null($resultadoPedido)) {
		die("Pedido não encontrado.");
	}
}
?>