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
	$saldo_cafe = $_POST['quantidade_cafe'];
	$saldo_almoco = $_POST['quantidade_almoco'];
	$saldo_jantar = $_POST['quantidade_jantar'];
	$forma_pagamento = $_POST['forma_pagamento'];

	// inserindo edição na tabela
	$sql = "INSERT INTO finalizacao 
	VALUES (
	DEFAULT,
	'".$_SESSION['id_usuario']."',
	'$id',
	'$forma_pagamento',
	'pendente',
	now()
)";


// Executando o SQL
if (mysqli_query($con, $sql)) {

	$id = mysqli_insert_id($con);
	$id = mysqli_insert_id($con);
	
	// inserindo edição na tabela

	//UPDATE `clientes` SET 
	//`saldo_cafe` = '20', 
	//`saldo_almoco` = '20', 
	//`saldo_jantar` = '20' 
	//WHERE `clientes`.`id` = 1045;

	$sqlCliente = "UPDATE `clientes` SET 
	`saldo_cafe` = '$saldo_cafe', 
	`saldo_almoco` = '$saldo_almoco', 
	`saldo_jantar` = '$saldo_jantar' 
	WHERE `clientes`.`id` = '".$_SESSION['id_usuario']."';
";
var_dump($sqlCliente);
die();

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