<?php 

session_start();

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do pacote
if (isset($id)) {
	$sql = "SELECT * FROM finalizacao WHERE id = $id";
	$queryVendas = mysqli_query($obj->con, $sql);
	$resultadoFinalizacao = mysqli_fetch_array($queryVendas);

		// Verificar se o pacote existe
	if (is_null($resultadoFinalizacao)) {
		die("Venda não encontrada.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$nome_cliente = $_POST['nome_cliente'];
	$email_cliente = $_POST['email_cliente'];
	$rua = $_POST['rua'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$forma_pagamento = $_POST['forma_pagamento'];
	
		// inserindo edição na tabela
	$sql = "UPDATE finalizacao
	SET nome_cliente = '$nome_cliente',
	email_cliente = '$email_cliente',
	rua_cliente = '$rua_cliente',
	estado_cliente = '$estado_cliente', 
	cidade_cliente = '$cidade_cliente', 
	forma_pagamento = '$forma_pagamento',
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

?>