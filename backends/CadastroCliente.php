<?php

//conexao com o banco de dados
require_once"../includes/conexao.php";


	// botão de cadastrar
if (isset($_POST['btnCadastrar'])) {
		// Recebendo os campos
	$email = $_POST['email_cliente'];
	$senha = $_POST['senha_cliente'];
	$estado = $_POST['estado_cliente'];
	$cidade = $_POST['cidade_cliente'];
	$rua = $_POST['rua_cliente'];
	$numero_telefone = $_POST['numero_telefone_cliente'];
	$restricao_alimentar = $_POST['restricao_alimentar'];
	$preferencia_restaurante = $_POST['preferencia_restaurante'];
	$preferencihora_comida = $_POST['preferencia_comida'];
	$comentarios = $_POST['comentarios'];

	//inserindo no BD
	$sql = "INSERT INTO clientes 
	VALUES (
	DEFAULT, 
	'$email',
	'$senha',
	'$estado',
	'$cidade',
	'$rua',
	'$numero_telefone',
	'$restricao_alimentar',
	'$preferencia_restaurante',
	'$preferencia_comida',
	'$comentarios'
)";
}

// Executando o SQL
if (mysqli_query($con, $sql)) {
	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Seu cadastro foi salvo com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

} else {
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao salvar seu cadastro.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

}


	header('Location: CadastroCliente.php');
}
?>