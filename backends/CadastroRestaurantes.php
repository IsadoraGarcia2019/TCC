<?php

//conexao com o banco de dados
require_once"include/conexao.php";

    // botão de cadastrar
if (isset($_POST['salvar'])) {
    // Recebendo os campos
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$nome_restaurante = $_POST['nome_restaurante'];
	$telefone_restaurante = $_POST['telefone_restaurante'];
	$horario_atendimento = $_POST['horario_atendimento'];
	$dias_atendimento_restaurante = $_POST['dias_atendimento_restaurante'];
	$avaliacao = $_POST['avaliacao'];
	$localizacao_restaurante = $_POST['localizacao_restaurante'];
	$estado_restaurante = $_POST['estado_restaurante'];
	$categoria = $_POST['categoria'];
    
    //inserindo no BD
	$sqlRestaurante = "INSERT INTO restaurantes 
	VALUES (
	DEFAULT, 
	'$nome_restaurante',
	'$telefone_restaurante',
	'$horario_atendimento',
	'$dias_atendimento_restaurante',
	'$avaliacao',
	'$localizacao_restaurante',
	'$estado_restaurante',
	'$categoria'
)";

// Executando o SQL
if (mysqli_query($con, $sqlRestaurante)) {

	$idRestaurante = mysqli_insert_id($con);

	//inserindo no BD
	
	$idRestaurante = mysqli_insert_id($con);

	$sqlUsuario = "INSERT INTO usuarios 
	VALUES (
	DEFAULT, 
	'$email',
	'$senha', 
	'restaurante',
	'$idRestaurante'
)";

if (mysqli_query($con, $sqlUsuario)) {

	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Seu cadastro foi salvo com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);
}else {
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao salvar seu cadastro.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);
}
}
}

?>