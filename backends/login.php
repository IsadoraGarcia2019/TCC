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
				$_SESSION['nome_usuario'] = $resultadoCredencial['nome'];
				$_SESSION['id_usuario'] = $resultadoCredencial['id'];
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