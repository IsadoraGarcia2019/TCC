<?php

require_once"include/conexao.php";

require_once"classes/site.class.php";

session_start();

$obj = new Site();

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
	// botão de cadastrar
if (isset($_POST['btnCadastrar'])) {
    // Recebendo os campos
	$local = $_POST['local'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade_cliente'];
	$estado = $_POST['estado'];
	$id_usuario = $_SESSION['id_usuario'];

	//inserindo no BD
	$sql = "INSERT INTO enderecos 
            VALUES (
            DEFAULT, 
            '$id_usuario',
            '$local',
            '$rua',
            '$bairro',
            '$cidade',
            '$estado'
        )";

if (mysqli_query($con, $sql)) {

	$alerta['tipo'] = "success";
	$alerta['mensagem'] = 'Seu novo endereço foi cadastrado com sucesso! <a href="enderecos.php" class="alert-link">Vizualizar já existentes</a>';

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');

} else {
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao cadastrar seu novo endereço.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');
}
}

?>