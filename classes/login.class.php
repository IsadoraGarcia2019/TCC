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
					// Retorna mensagem que usuário não está ativo    
					header('Location: login.php');
				}
			}
		} else {
			header('Location: index.php');
		}
	}
}


	?>
