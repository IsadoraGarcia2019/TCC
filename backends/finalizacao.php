<?php 

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

session_start();

	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do pacote
if (isset($id)) {
	$sql = "SELECT * FROM clientes WHERE id = $id";
	$queryCliente = mysqli_query($obj->con, $sql);
	$resultadoCliente = mysqli_fetch_array($queryCliente);

		// Verificar se o cliente existe
	if (is_null($resultadoCliente)) {
		die("Cliente não encontrado.");
	}
}

	// Verificando ação de finalizar
if (isset($_POST['btnFinalizar'])) {

        // Recebimento dos campos
	$nome_cliente = $_POST['nome_cliente'];
	$email_cliente = $_POST['email_cliente'];
	$rua = $_POST['rua'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$forma_pagamento = $_POST['forma_pagamento'];

	// inserindo edição na tabela
	$sql = "INSERT INTO finalizacao 
	VALUES (
	DEFAULT,
	'$nome_cliente',
	'$email_cliente',
	'$estado',
	'$cidade',
	'$rua',
	'$forma_pagamento',
	'pendente'
)";

	// Executando o SQL
if (mysqli_query($obj->con, $sql)) {

	$id = mysqli_insert_id($con);
	$id = mysqli_insert_id($con);


	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Pacote adicionado com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');

} else{		
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao adicionar pacote.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');
}
}
}
?>