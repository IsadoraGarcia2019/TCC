<?php 
session_start();

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do pacote
if (isset($id)) {
	$sql = "SELECT * FROM pacotes WHERE id = $id";
	$queryPacote = mysqli_query($obj->con, $sql);
	$resultadoPacote = mysqli_fetch_array($queryPacote);

		// Verificar se o pacote existe
	if (is_null($resultadoPacote)) {
		die("Pacote não encontrado.");
	}
}

	// Verificando ação de comprar
if (isset($_POST['btnComprar'])) {

        // Recebimento dos campos
	$forma_pagamento = $_POST['forma_pagamento'];

	// inserindo edição na tabela
	$sql = "INSERT INTO finalizacao 
	VALUES (
	DEFAULT,
	'$id_cliente',
	'$forma_pagamento',
	'$id_pacote',
	'pendente'
)";

// Executando o SQL
if (mysqli_query($obj->con, $sql)) {

	$id = mysqli_insert_id($con);
	$id = mysqli_insert_id($con);


	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Sua compra foi concluída com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');

} else{		
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao concluir sua compra.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');
}
}
?>