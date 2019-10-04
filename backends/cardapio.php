<?php 

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

	// Verificando ação de comprar
if (isset($_POST['btnPedir'])) {

       	// inserindo edição na tabela
	$sql = "INSERT INTO escolha_cardapio_dia 
	VALUES (
	DEFAULT,
	'".$_SESSION['id_usuario']."',
	'$id_cardapio',
	now(),
	'nao',
)";

// Executando o SQL
if (mysqli_query($obj->con, $sql)) {

	$id = mysqli_insert_id($con);
	$id = mysqli_insert_id($con);


	$alerta['tipo'] = "success";
	$alerta['mensagem'] = 'Sua escolha foi registrada com sucesso!';

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');

} else{		
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao registrar sua escolha.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');
}
}
?>