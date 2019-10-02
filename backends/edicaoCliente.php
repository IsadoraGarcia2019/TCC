<?php 

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

// session_start();

	// Recuperar ID do cliente
if (isset($_GET['id'])) {
	$id = $_GET['id'];

}

// Buscar informações do cliente
if (isset($id)) {
	$sql = "SELECT * FROM clientes WHERE id = $id";
	$queryClientes = mysqli_query($obj->con, $sql);
	$resultadoCliente = mysqli_fetch_array($queryClientes);

		// Verificar se o cliente existe
	if (is_null($resultadoCliente)) {
		die("Cliente não encontrado.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$nome_cliente = $_POST['nome_cliente'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$rua = $_POST['rua'];
	$numero_telefone = $_POST['numero_telefone'];
	$restricao_alimentar = $_POST['restricao_alimentar'];
	$comentarios = $_POST['comentarios'];

		// mudando o nome da seesao
	$_SESSION['nome_usuario'] = $nome_cliente;


		// inserindo edição na tabela
	$sql = "UPDATE clientes
	SET  nome_cliente = '$nome_cliente',
	     estado = '$estado', 
	     cidade = '$cidade', 
	     rua = '$rua', 
	     numero_telefone = '$numero_telefone', 
	     restricao_alimentar = '$restricao_alimentar', 
	     comentarios = '$comentarios'
	WHERE id = $id";
	
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

