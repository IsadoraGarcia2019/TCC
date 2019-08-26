<?php 

	//	================================
	//		Classe principal do site
	//	================================

//	Atributo Local: está dentro de uma função
// 	Atributo global: é a constante fora da função

class Site {

//Constantes de acesso ao MySQL
	CONST HOST = "127.0.0.1";
	CONST USER = "root";
	CONST PASS = "";
	CONST DB   = "cheff_delivery";

//Atributos
	public $con;

//funções/metodos

//função de construtor de classe
	public function __construct() {
//abrindo a conexão automáticamente quando um objeto é instântanio
		$this->AbrirConexao();
		$this->configuracoes();
	}

	public function AbrirConexao() {
//Abri conexão
		$this->con = mysqli_connect(self::HOST, self::USER, self::PASS, self::DB);
//Se deu erro, interrompe a execução
		if (!$this->con) {
			die("ERRO: Não foi possível conectar no banco de dados -> " . mysqli_connect_error());
		}
	}

	//	Função para gerenciar sessões e páginas restritas
	public function Session() {
			// Inicia a $_SESSION
		session_start();

		// Verificando se existe a $_SESSION para carregar a página
		if (!(isset($_SESSION['logado']) && $_SESSION['logado']==true)) {
			header('Location: ../404.php');	

	}

	}

	//	Função que carrega todas as configurações e definições do projeto
	public function configuracoes() {

		// Alterar hora do servidor
		date_default_timezone_set('America/Sao_Paulo');

		// Eliminar a exibição de avisos
		error_reporting(0);

	}

	//	Função de alerta (estática)
	public static function Alerta($tipo = null, $mensagem = null) {
		//	Verificando se a mensagem é nula
			if (empty($mensagem))
				return 0;

		//	Se for diferente dessas opções será info
			switch ($tipo) {
				case 'success':
					break;
				case 'info':
					break;
				case 'warning':
					break;
				case 'danger':
					break;
				default:
					$tipo = 'info';
					break;
			}

			$alerta['tipo'] = $tipo;
			$alerta['mensagem'] = $mensagem;

			$alerta = serialize($alerta);

			setcookie('alerta', $alerta, time() + 120);

			return 1;
	}

	public static function ChamaAlerta() {
	// Verificar se existe alerta via COOKIE
		if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
		$alerta = unserialize($_COOKIE['alerta']);
		setcookie('alerta');
		}
		//	Chamar o alerta
		require_once "include/alerta.php";
	}

	//	Função estática que chama a navbar
	public static function Navbar() {
		require_once "include/navbar.php";
	}

}



// echo Site::Alerta('danger', '...');

//	Para funções não estáticas tem que instanciar um objeto
// $site = new Site();
// $site ->Alerta;

//	Para funções estáticas não é necessário
// Site::Alerta();


?>