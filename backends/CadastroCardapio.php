<?php

//conexao com o banco de dados
require_once"include/conexao.php";

	// botão de cadastrar
if (isset($_POST['btnCadastrar'])) {
		// Recebendo os campos
	$nome_comida = $_POST['nome_comida'];
	$categoria_comida = $_POST['categoria_comida'];
	
	//inserindo no BD
	$sql = "INSERT INTO cardapio_dia 
	VALUES (
	DEFAULT, 
	'$nome_comida',
	'$categoria_comida'

)";

if (mysqli_query($con, $sql)) {

	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "A comida foi salva com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');

} else {
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao salvar a comida.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');
}
}
