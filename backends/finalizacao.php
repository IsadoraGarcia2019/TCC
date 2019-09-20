<?php 
session_start();

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

	// Verificando ação de comprar
if (isset($_POST['btnComprar'])) {

        // Recebimento dos campos
	$forma_pagamento = $_POST['forma_pagamento'];
	$data_compra = $_POST['data_compra'];

	// inserindo edição na tabela
	$sql = "INSERT INTO finalizacao 
	VALUES (
	DEFAULT,
	'".$_SESSION['id_usuario']."',
	'$id',
	'$forma_pagamento',
	'pendente',
	'$data_compra'
)";

var_dump($sql);
die();

// Executando o SQL
if (mysqli_query($obj->con, $sql)) {

	$id = mysqli_insert_id($con);
	$id = mysqli_insert_id($con);


	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Sua compra foi concluída com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Location:meuspedidos.php');

} else{		
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao concluir sua compra.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');
}
}
?>