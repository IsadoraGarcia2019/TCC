<?php 

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do cliente
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
	$telefone_restaurante = $_POST['telefone_restaurante'];
	$horario_atendimento = $_POST['horario_atendimento'];
	$dias_atendimento_restaurante = $_POST['dias_atendimento_restaurante'];
	$avaliacao = $_POST['avaliacao'];
	$localizacao_restaurante = $_POST['localizacao_restaurante'];
	$estado_restaurante = $_POST['estado_restaurante'];
	$categoria = $_POST['categoria'];

		// inserindo edição na tabela
	$sql = "UPDATE restaurantes
	SET nome_restaurante = '$nome_restaurante', telefone_restaurante = '$telefone_restaurante', horario_atendimento = '$horario_atendimento', dias_atendimento_restaurante = '$dias_atendimento_restaurante', avaliacao = '$avaliacao', localizacao_restaurante = '$localizacao_restaurante', estado_restaurante = '$estado_restaurante', categoria = '$categoria' 
	WHERE id = $id";
}

	// Executando o SQL
if (mysqli_query($obj->con, $sql)) {
	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Dados editados com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);
}
	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {
	$sql = "DELETE FROM restaurantes WHERE id = $id";

}
if (mysqli_query($obj->con, $sql)) {
	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Dados excluidos com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);
}

?>