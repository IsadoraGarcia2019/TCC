<?php

//conexao com o banco de dados
require_once"include/conexao.php";

	// botão de cadastrar
if (isset($_POST['btnCadastrar'])) {
		// Recebendo os campos
	$email = $_POST['email_cliente'];
	$senha = $_POST['senha_cliente'];
	$nome_cliente = $_POST['nome_cliente'];
	$estado = $_POST['estado_cliente'];
	$cidade = $_POST['cidade_cliente'];
	$rua = $_POST['rua_cliente'];
	$numero_telefone = $_POST['numero_telefone_cliente'];
	$restricao_alimentar = $_POST['restricao_alimentar'];
	$preferencia_comida = $_POST['preferencia_comida'];
	$preferencia_restaurante = $_POST['preferencia_restaurante'];
	$comentarios = $_POST['comentarios'];

	//inserindo no BD
	$sqlCliente = "INSERT INTO clientes 
	VALUES (
	DEFAULT, 
	'$nome_cliente',
	'$estado',
	'$cidade',
	'$rua',
	'$numero_telefone',
	'$restricao_alimentar',
	'$preferencia_comida',
	'$preferencia_restaurante',
	'$comentarios',
	 0,
	 0,
	 0
)";

// Executando o SQL
if (mysqli_query($con, $sqlCliente)) {

	$idCliente = mysqli_insert_id($con);

	//inserindo no BD
	$sqlUsuario = "INSERT INTO usuarios 
	VALUES (
	DEFAULT, 
	'$email',
	'$senha',
	'cliente',
	'$idCliente',
	'1'
)";

if (mysqli_query($con, $sqlUsuario)) {

	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Seu cadastro foi salvo com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');

} else {
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao salvar seu cadastro.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');
}
}
}

?>