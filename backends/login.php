<?php

//conexao com o banco de dados
require_once"../includes/conexao.php";


session_start();

	// Login
if (!isset($_SESSION['logado']) || $_SESSION['logado'] == false) {
	if (isset($_POST['btnEntrar'])) {
			// Receber os dados de login
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		var_dump($_SESSION);

		die();

			// Verificar credenciais
		$sqlCredencial = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$queryCredencial = mysqli_query($con, $sqlCredencial);
		$resultadoCredencial = mysqli_fetch_array($queryCredencial);

		if ($resultadoCredencial) {

			if ($resultadoCredencial['ativo'] == 1) {
				// Criar sessão do usuário
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $resultadoCredencial['id'];

				if ($resultadoCredencial['tp_usuario'] == 'cliente') {

					$sqlCredencial = "SELECT * FROM clientes WHERE nome_cliente = '$nome_cliente'";
					$queryCredencial = mysqli_query($con, $sqlCredencial);
					$resultadoCredencial = mysqli_fetch_array($queryCredencial);

					$_SESSION['nome_usuario'] = $resultadoCredencial['nome_cliente'];
				}
				if ($resultadoCredencial['tp_usuario'] == 'restaurante') {

					$sqlCredencial = "SELECT * FROM restaurantes WHERE nome_restaurante = '$nome_restaurante'";
					$queryCredencial = mysqli_query($con, $sqlCredencial);
					$resultadoCredencial = mysqli_fetch_array($queryCredencial);

					$_SESSION['nome_usuario'] = $resultadoCredencial['nome_restaurante'];
				}
				if ($resultadoCredencial['tp_usuario'] == 'empresa') {

					$sqlCredencial = "SELECT * FROM empresas WHERE nome_empresa = '$nome_empresa'";
					$queryCredencial = mysqli_query($con, $sqlCredencial);
					$resultadoCredencial = mysqli_fetch_array($queryCredencial);

					$_SESSION['nome_usuario'] = $resultadoCredencial['nome_empresa'];
				}

			} else {
				$alerta['tipo'] = "danger";
				$alerta['mensagem'] = "Seu usuario não esta ativo, contate um administrador";
			}
		} else {
			$_SESSION['logado'] = false;
			$alerta['tipo'] = "danger";
			$alerta['mensagem'] = "Credenciais invalidas";
		}


	}
} 
?>