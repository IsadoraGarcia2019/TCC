<?php 

require_once"edicao.php";

// Buscar informações do restaurante
if (isset($id)) {
	$sql = "SELECT * FROM restaurantes WHERE id = $id";
	$queryRestaurante = mysqli_query($con, $sql);
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

?>