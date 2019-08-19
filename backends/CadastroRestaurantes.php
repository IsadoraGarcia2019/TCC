<?php

//conexao com o banco de dados
require_once"../includes/conexao.php";

CONST HOST = "127.0.0.1";
CONST USER = "root";
CONST PASS = "";
CONST DB   = "cheff_delivery";

$con = mysqli_connect(HOST, USER, PASS, DB);

if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

if (isset($id)) {
	$sql = "SELECT * FROM restaurantes WHERE id = $id";
	$queryrestaurante = mysqli_query($con, $sql);
	$resultadorestaurante = mysqli_fetch_array($queryrestaurante);

	if (is_null($resultadorestaurante)) {
		die("Restaurante não encontrado.");
	}
}


if (isset($_POST['salvar'])) {
	$nome_restaurante = $_POST['nome_restaurante'];
	$telefone_restaurante = $_POST['numero_telefone'];
	$horario_atendimento = $_POST['horario_atentimento'];
	$dias_atendimento_restaurante = $_POST['dias_atendimento'];
	$avaliacao = $_POST['avaliacao'];
	$localizacao_restaurante = $_POST['localizacao'];
	$estado_restaurante = $_POST['estado'];

	if (isset($id)) {
		$sql = "UPDATE restaurantes
		SET nome_restaurante = '$nome_restaurante',
		numero_telefone = '$telefone_restaurante',
		horario_atentimento = '$horario_atendimento',
		dias_atendimento = '$dias_atendimento_restaurante',
		avaliacao = '$avaliacao',
		localizacao = '$localizacao_restaurante',
		estado = '$estado_restaurante'
		WHERE
		id = $id";
	} else {
		$sql = "INSERT INTO restaurantes 
		VALUES (
		DEFAULT, 
		'$nome_restaurante',
		'$telefone_restaurante',
		'$horario_atendimento',
		'$dias_atendimento_restaurante',
		'$avaliacao',
		'$localizacao_restaurante',
		'$estado_restaurante',
	)";
}

if (mysqli_query($con, $sql)) {
	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "restauranto salvo com sucesso!";

	$alerta = serialize($alerta);
}else{
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "restauranto não foi salvo!";

	$alerta = serialize($alerta);
	echo "$sql";
}	
}

?>