<?php 

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do restaurante
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do restaurante
if (isset($id)) {
	$sql = "SELECT * FROM restaurantes WHERE id = $id";
	$queryRestaurante = mysqli_query($obj->con, $sql);
	$resultadoRestaurante = mysqli_fetch_array($queryRestaurante);

		// Verificar se o restaurante existe
	if (is_null($resultadoRestaurante)) {
		die("Restaurante não encontrado.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$nome_restaurante = $_POST['nome_restaurante'];
	$numero_telefone = $_POST['numero_telefone'];
	$horario_atendimento = $_POST['horario_atendimento'];
	$dias_atendimento = $_POST['dias_atendimento'];
	$avaliacao = $_POST['avaliacao'];
	$localizacao = $_POST['localizacao'];
	$estado = $_POST['estado'];
	$categoria = $_POST['categoria'];

		// mudando o nome da seesao
	$_SESSION['nome_usuario'] = $nome_cliente;

		// inserindo edição na tabela
	$sqlRestaurante = "UPDATE restaurantes
	SET nome_restaurante = '$nome_restaurante',
	    numero_telefone = '$numero_telefone',
	    horario_atendimento = '$horario_atendimento',
	    dias_atendimento = '$dias_atendimento', 
	    avaliacao = '$avaliacao',
	    localizacao = '$localizacao',
	    estado = '$estado',
	    categoria = '$categoria'
	WHERE id = $id";
}

	// Executando o SQL
if (mysqli_query($obj->con, $sqlRestaurante)) {

	$idRestaurante = mysqli_insert_id($con);
	$idRestaurante = mysqli_insert_id($con);
	
	
	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Dados editados com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);
}

?>