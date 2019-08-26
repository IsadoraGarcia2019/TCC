<?php 

// Buscar informações do cliente
if (isset($id)) {
	$sql = "SELECT * FROM clientes WHERE id = $id";
	$queryClientes = mysqli_query($con, $sql);
	$resultadoCliente = mysqli_fetch_array($queryClientes);

		// Verificar se o cliente existe
	if (is_null($resultadoCliente)) {
		die("Cliente não encontrado.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$estado = $_POST['estado_cliente'];
	$cidade = $_POST['cidade_cliente'];
	$rua = $_POST['rua_cliente'];
	$numero_telefone = $_POST['numero_telefone_cliente'];
	$restricao_alimentar = $_POST['restricao_alimentar'];
	$preferencia_comida = $_POST['preferencia_comida'];
	$preferencia_restaurante = $_POST['preferencia_restaurante'];

		// inserindo edição na tabela
	$sql = "UPDATE clientes
	SET estado = '$estado', cidade = '$cidade', rua = '$rua', numero_telefone = '$numero_telefone', restricao_alimentar = '$restricao_alimentar', preferencia_comida = '$preferencia_comida', preferencia_restaurante = '$preferencia_restaurante' 
	WHERE id = $id";
}

?>