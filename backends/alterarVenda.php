<?php 
require_once"../include/conexao.php";

// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Mudando os status do pagamento
if (isset($id)) {

	$sql = "UPDATE finalizacao SET status_pagamento = '{$_GET['status_pagamento']}' WHERE id = $id";
	$query = mysqli_query($con, $sql);

	$sql = "SELECT clientes.*, pacotes.* FROM finalizacao 
			JOIN pacotes ON pacotes.id = finalizacao.id_pacote
			JOIN usuarios ON usuarios.id = finalizacao.id_usuario 
			JOIN clientes ON clientes.id = usuarios.fk_tipo
			WHERE finalizacao.id = $id";
	$query = mysqli_query($con, $sql);
	$res = mysqli_fetch_assoc($query);

	if ($_GET['status_pagamento'] == 'pago') {
		$sql = "UPDATE clientes SET 'saldo_cafe' = ". ($res['saldo_cafe'] + $res['quantidade_cafe']) .", 'saldo_almoco' = ". ($res['saldo_almoco'] + $res['quantidade_almoco']).", 'saldo_janta' = ". ($res['saldo_janta'] + $res['quantidade_janta']);
		$query = mysqli_query($con, $sql);
		$resultado = mysqli_fetch_array($query);
	}

	header('Location: ../vendas.php');
}
?>
