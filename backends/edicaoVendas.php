<?php 

session_start();

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID da venda
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

if (isset($_GET['id_cliente'])) {
	$id_cliente = $_GET['id_cliente'];
}

// Buscar informações da venda
if (isset($id)) {
	$sql = "SELECT * FROM finalizacao WHERE id = $id";
	$queryVendas = mysqli_query($obj->con, $sql);
	$resultadoFinalizacao = mysqli_fetch_array($queryVendas);

		// Verificar se a venda existe
	if (is_null($resultadoFinalizacao)) {
		die("Venda não encontrada.");
	}
}

if (isset($id_cliente)) {
	$sql = "SELECT * FROM clientes WHERE id = $id_cliente";
	$queryCliente = mysqli_query($obj->con, $sql);
	$resultadoCliente = mysqli_fetch_array($queryCliente);

		// Verificar se o cliente existe
	if (is_null($resultadoCliente)) {
		die("Cliente não encontrada.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$nome_cliente = $_POST['nome_cliente'];
	$email_cliente = $_POST['email_cliente'];
	$preco_pacote = $_POST['preco_pacote'];
	$rua = $_POST['rua'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$forma_pagamento = $_POST['forma_pagamento'];
	$status_pagamento = $_POST['status_pagamento'];
	
		// inserindo edição na tabela
	$sql = "UPDATE finalizacao
	SET forma_pagamento = '$forma_pagamento',
	status_pagamento = '$status_pagamento'
	WHERE id = $id";


	// Executando o SQL
	if (mysqli_query($obj->con, $sql)) {

		$id = mysqli_insert_id($con);
		$id = mysqli_insert_id($con);
		
		
		$alerta['tipo'] = "success";
		$alerta['mensagem'] = "Venda editada com sucesso!";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Refresh:0');
	}

}
	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {

	$sql = "DELETE FROM finalizacao WHERE id = $id";
	
	if (mysqli_query($obj->con, $sql)) {
		$query = mysqli_query($obj->con, $sql);

		$alerta['tipo'] = "danger";
		$alerta['mensagem'] = "Venda excluída com sucesso!";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Location:vendas.php');

	}
}
if ($_SESSION['id_usuario'] == $id_usuario) {
		$disabled = "";
	} else {
		$disabled = "disabled";
	}
?>