	<?php

//conexao com o banco de dados
require_once"include/conexao.php";

	// botão de cadastrar
if (isset($_POST['btnCadastrar'])) {
		// Recebendo os campos
	$nome_pacote = $_POST['nome_pacote'];
	$descricao_pacote = $_POST['descricao_pacote'];
	$preco_pacote = $_POST['preco_pacote'];
	$quantidade_cafe  = $_POST['quantidade_cafe'];
	$quantidade_almoco  = $_POST['quantidade_almoco'];
	$quantidade_janta  = $_POST['quantidade_janta'];

	//inserindo no BD
	$sql = "INSERT INTO pacotes 
			VALUES (
			DEFAULT, 
			'$nome_pacote',
			'$descricao_pacote',
			'$preco_pacote',
			'$quantidade_cafe',
			'$quantidade_almoco',
			'$quantidade_janta'
)";

	if (mysqli_query($con, $sql)) {

		$alerta['tipo'] = "success";
		$alerta['mensagem'] = "O pacote foi salvo com sucesso!";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Refresh:0');

	} else {
		$alerta['tipo'] = "danger";
		$alerta['mensagem'] = "Erro ao salvar o pacote.";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Refresh:0');
	}
}
