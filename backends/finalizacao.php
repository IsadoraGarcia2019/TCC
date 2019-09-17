<?php 

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

<<<<<<< HEAD
	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do pacote
if (isset($id)) {
	$sql = "SELECT * FROM clientes WHERE id = $id";
	$queryCliente = mysqli_query($obj->con, $sql);
	$resultadoCliente = mysqli_fetch_array($queryCliente);

		// Verificar se o pacote existe
=======
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
>>>>>>> c7f80751ae759b1bdb18d8fa32742e67a9792b63
	if (is_null($resultadoCliente)) {
		die("Cliente não encontrado.");
	}
}

<<<<<<< HEAD
	// Verificando ação de EDITAR
if (isset($_POST['btnFinalizar'])) {

        // Recebimento dos campos
	$nome_cliente = $_POST['nome_cliente'];
	$email_cliente = $_POST['email_cliente'];
	$estado = $_POST['estado'];
	$cidade = $_POST['cidade'];
	$rua = $_POST['rua'];
	
			// inserindo edição na tabela
	$sql = "INSERT INTO finalizacao 
	VALUES (
	DEFAULT,
	'$nome_cliente',
	'$email_cliente',
	'$estado',
	'$cidade',
	'$rua'
)";

	// Executando o SQL
if (mysqli_query($obj->con, $sql)) {

	$id = mysqli_insert_id($con);
	$id = mysqli_insert_id($con);


	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Pacote adicionado com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');

} else{		
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao adicionar pacote.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

	header('Refresh:0');
}
}
}
}
=======
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

>>>>>>> c7f80751ae759b1bdb18d8fa32742e67a9792b63
?>