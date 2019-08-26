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
