<?php 

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

session_start();

// session_start();

	// Recuperar ID do cliente
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	 // buscar o FK_TIPO deste ID no banco
	 // $sql = "SELECT * FROM usuarios WHERE id = $id";

	// $id = $fk_tipo;

}

// Buscar informações do cliente
if (isset($id)) {
	$sql = "SELECT * FROM clientes WHERE id = $id";
	$queryClientes = mysqli_query($obj->con, $sql);
	$resultadoCliente = mysqli_fetch_array($queryClientes);

	$sql = "SELECT * FROM usuarios WHERE id = $id";
	$queryUsuarios = mysqli_query($obj->con, $sql);
	$resultadoUsuarios = mysqli_fetch_array($queryUsuarios);

		// Verificar se o cliente existe
	if (is_null($resultadoCliente)) {
		die("Cliente não encontrado.");
	}
}

	// Verificando ação de FINALIZAR
if (isset($_POST['btnFinalizar'])) {
		// Recebimento dos campos
	$nome_cliente = $_POST['nome_cliente'];
	$email = $_POST['email'];
	$rua = $_POST['rua'];
	$complemento = $_POST['complemento'];
	$cidade = $_POST['cidade'];

	// Executando o SQL
	if (mysqli_query($obj->con, $sql)) {
		$alerta['tipo'] = "success";
		$alerta['mensagem'] = "Dados editados com sucesso!";

		// $_SESSION['nome_usuario'];

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Refresh:0');
	}

}

?>