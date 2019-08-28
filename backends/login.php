<?php

//conexao com o banco de dados
require_once"../includes/conexao.php";


session_start();

	// Inclusão do arquivo de configuração
require_once "include/config.php";

	// Login
if (!isset($_SESSION['logado']) || $_SESSION['logado'] == false) {
	if (isset($_POST['btnEntrar'])) {
			// Receber os dados de login
		$email = $_POST['email'];
		$senha = $_POST['senha'];

			// Verificar credenciais
		$sqlCredencial = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
		$queryCredencial = mysqli_query($con, $sqlCredencial);
		$resultadoCredencial = mysqli_fetch_array($queryCredencial);

		if ($resultadoCredencial) {

			if ($resultadoCredencial['ativo'] == 1) {
				// Criar sessão do usuário
				$_SESSION['logado'] = true;


				if (isset($nome_cliente)) {

					$sqlCredencialCliente = "SELECT * FROM clientes WHERE nome_cliente = '$nome_cliente'";
					$queryCredencialCliente = mysqli_query($con, $sqlCredencialCliente);
					$resultadoCredencialCliente = mysqli_fetch_array($queryCredencialCliente);

					$_SESSION['nome_usuario'] = $resultadoCredencialCliente['nome_cliente'];
					
					$_SESSION['id_usuario'] = $resultadoCredencial['id'];
				}

				if (isset($nome_restaurante)) {

					$sqlCredencialRestaurante = "SELECT * FROM restaurantes WHERE nome_restaurante = '$nome_restaurante'";
					$queryCredencialRestaurante = mysqli_query($con, $sqlCredencialRestaurante);
					$resultadoCredencialRestaurante = mysqli_fetch_array($queryCredencialRestaurante);

					$_SESSION['nome_usuario'] = $resultadoCredencialRestaurante['nome_restaurante'];
					
					$_SESSION['id_usuario'] = $resultadoCredencial['id'];
				}

				if (isset($nome_empresa)) {

					$sqlCredencialEmpresa = "SELECT * FROM empresas WHERE nome_empresa = '$nome_empresa'";
					$queryCredencialEmpresa = mysqli_query($con, $sqlCredencialEmpresa);
					$resultadoCredencialEmpresa = mysqli_fetch_array($queryCredencialEmpresa);

					$_SESSION['nome_usuario'] = $resultadoCredencialEmpresa['nome_empresa'];
					

					$_SESSION['id_usuario'] = $resultadoCredencial['id'];
				}
				else{

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