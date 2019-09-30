<?php 
require_once"../include/conexao.php";

// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Mudando os status do pagamento
if (isset($id)) {

	$status_pagamento = $_GET['BtnStatus'];

	$sql = "UPDATE finalizacao
	SET status_pagamento = '$status_pagamento'
	WHERE id = $id";
	$query = mysqli_query($con, $sql);

	if ($status_pagamento == 'pago') {

		$sql = "SELECT * FROM finalizacao WHERE id = $id";
		$query = mysqli_query($con, $sql);
		$resultado = mysqli_fetch_array($query);

		$sql = "SELECT * FROM pacotes WHERE id = $finalizacao['fk_pacote']";
		$query = mysqli_query($con, $sql);
		$resultado = mysqli_fetch_array($query);

		$sql = "UPDATE clientes SET $saldo_cafe = $quantidade_cafe, $saldo_almoco = $quantidade_almoco, $saldo_jantar = $quantidade_jantar";
		$query = mysqli_query($con, $sql);
		$resultado = mysqli_fetch_array($query);
		
		header('Location: ../vendas.php');
	}
}
?>
