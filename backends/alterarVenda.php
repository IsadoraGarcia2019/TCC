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

	header('Location: ../vendas.php');
}
?>