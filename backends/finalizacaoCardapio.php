<?php 

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
	$endereco = $_POST['endereco'];

	// inserindo edição na tabela
	$sql = "INSERT INTO cardapio_dia 
	VALUES (
	DEFAULT,
	'".$_SESSION['id_usuario']."',
	'$id',
	'$forma_pagamento',
	'pendente',
	now()
)";

// Executando o SQL
if (mysqli_query($obj->con, $sql)) {

	$id = mysqli_insert_id($con);
	$id = mysqli_insert_id($con);


	$alerta['tipo'] = "success";
	$alerta['mensagem'] = 'Sua compra foi concluída com sucesso! <a href="meuspedidos.php" class="alert-link">Ver meus pedidos</a>';

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