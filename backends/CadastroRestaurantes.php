<?php

//conexao com o banco de dados
require_once"include/conexao.php";

	// botão de cadastrar
if (isset($_POST['btnCadastrar'])) {
	// Recebendo os campos
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$nome_restaurante = $_POST['nome_restaurante']; 
	$numero_telefone = $_POST['numero_telefone'];
	$horario_atendimento = $_POST['horario_atendimento'];
	$dias_atendimento = $_POST['dias_atendimento'];
	$avaliacao = $_POST['avaliacao'];
	$localizacao = $_POST['localizacao'];
	$estado = $_POST['estado'];
	$categoria = $_POST['categoria'];

	//inserindo no BD
	$sqlRestaurante = "INSERT INTO restaurantes 
			VALUES (
			DEFAULT, 
			'$nome_restaurante',
			'$numero_telefone',
			'$horario_atendimento',
			'$dias_atendimento',
			'$avaliacao',
			'$localizacao',
			'$estado',
			'$categoria'
		)";

		// Executando o SQL
	if (mysqli_query($con, $sqlRestaurante)) {

		$idRestaurante = mysqli_insert_id($con);

			//inserindo no BD
		$sqlUsuario = "INSERT INTO usuarios 
						VALUES (
						DEFAULT, 
						'$email',
						'$senha', 
						'restaurante',
						'$idRestaurante',
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