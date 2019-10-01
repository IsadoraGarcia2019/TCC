<?php 
require_once"../include/conexao.php";

// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Mudando os status do pagamento
if (isset($id)) {


	$sql = "UPDATE finalizacao
	SET status_pagamento = '{$_GET['status_pagamento']}'
	WHERE id = $id";
	$query = mysqli_query($con, $sql);

	if ($status_pagamento == 'pago') {

		$sql = "UPDATE clientes SET $saldo_cafe = $quantidade_cafe, $saldo_almoco = $quantidade_almoco, $saldo_janta = $quantidade_jantar";
		$query = mysqli_query($con, $sql);
		$resultado = mysqli_fetch_array($query);
		
	}
	if ($status_pagamento == 'pedente') {

		$sql = "UPDATE clientes SET $saldo_cafe = $quantidade_cafe, $saldo_almoco = $quantidade_almoco, $saldo_janta = $quantidade_jantar";
		$query = mysqli_query($con, $sql);
		$resultado = mysqli_fetch_array($query);
		
	}
	if ($status_pagamento == 'atrasado') {

		$sql = "UPDATE clientes SET $saldo_cafe = $quantidade_cafe, $saldo_almoco = $quantidade_almoco, $saldo_janta = $quantidade_jantar";
		$query = mysqli_query($con, $sql);
		$resultado = mysqli_fetch_array($query);
		
	}
		header('Location: ../vendas.php');
}
?>
