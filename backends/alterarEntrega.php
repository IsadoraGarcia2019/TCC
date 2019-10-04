<?php 
require_once"../include/conexao.php";

// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Mudando os status do pagamento
if (isset($id)) {

	$sql = "UPDATE escolha_cardapio_dia SET entregue = '{$_GET['entregue']}' WHERE id = $id";
	$query = mysqli_query($con, $sql);

	header('Location: ../entregas.php');
}
?>
