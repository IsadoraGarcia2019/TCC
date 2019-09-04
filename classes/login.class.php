<?php

	//	Gambiarra temporária
require_once "site.class.php";

	//	===============================
	//	|	Classe Abstrata do Login  |
	//	===============================

class Login extends Site {

	public function __construct() {
			//	Executar construct do elemento
		parent::__construct();

			// Iniciar sessão
		session_start();

		    // Sistemática de Login
		if (!isset($_SESSION['logado']) || $_SESSION['logado'] == false) {
				// Permitir o login
			if (isset($_POST['btnEntrar'])) {
					// Receber os dados
				$email = $_POST['email'];
				$senha = $_POST['senha'];

				$sqlLogin = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
				$queryLogin = mysqli_query($this->con, $sqlLogin);
				$resultadoLogin = mysqli_fetch_array($queryLogin);

				if ($resultadoLogin != null) {
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $resultadoLogin['id'];
					$_SESSION['nome_usuario'] = $resultadoLogin['nome'];
					$_SESSION['tp_usuario'] = $resultadoLogin['tp_usuario'];
					$_SESSION['fk_usuario'] = $resultadoLogin['fk_tipo'];

					if ($resultadoLogin['tp_usuario'] == 'cliente') {
						$sqlCliente = "SELECT * FROM clientes WHERE id = '".$resultadoLogin['fk_tipo']."'";
						$queryCliente = mysqli_query($this->con, $sqlCliente);
						$resultadoCliente = mysqli_fetch_array($queryCliente);

						$_SESSION['nome_usuario'] = $resultadoCliente['nome_cliente'];
					}

					if ($resultadoLogin['tp_usuario'] == 'restaurante') {
						$sqlRestaurantes = "SELECT * FROM restaurantes WHERE id = '".$resultadoLogin['fk_tipo']."'";
						$queryRestaurantes = mysqli_query($this->con, $sqlRestaurantes);
						$resultadoRestaurantes = mysqli_fetch_array($queryRestaurantes);

						$_SESSION['nome_usuario'] = $resultadoRestaurantes['nome_restaurante'];
					}

					if ($resultadoLogin['tp_usuario'] == 'empresa') {
						$sqlEmpresa = "SELECT * FROM empresas WHERE id = '".$resultadoLogin['fk_tipo']."'";
						$queryEmpresa = mysqli_query($this->con, $sqlEmpresa);
						$resultadoEmpresa = mysqli_fetch_array($queryEmpresa);

						$_SESSION['nome_usuario'] = $resultadoEmpresa['nome_empresa'];
					}

					// Redirecionamento para a página inicial
					header('Location: index.php');
				} else {
					$_SESSION['logado'] = false;
						// Criar mensagem de que credenciais são inválidas
					Site::Alerta('danger', 'ERRO: E-mail ou Senha incorreto');
					header('Location: login.php');
				}
			}
		} else {
			header('Location: index.php');
		}
	if (isset($_POST['botao_entrar'])) {
		header('Location: CadastroCliente.php');
	}
	}
}


?>