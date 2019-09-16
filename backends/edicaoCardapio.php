<?php 

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do pacote
if (isset($id)) {
	$sql = "SELECT * FROM cardapio_dia WHERE id_cardapio = $id";
	$queryCardapio = mysqli_query($obj->con, $sql);
	$resultadoCardapio = mysqli_fetch_array($queryCardapio);

		// Verificar se o pacote existe
	if (is_null($resultadoCardapio)) {
		die("Cardápio não encontrado.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {

        // Recebimento dos campos
	$nome_comida = $_POST['nome_comida'];
	$categoria_comida = $_POST['categoria_comida'];

		// inserindo edição na tabela
	$sql = "UPDATE cardapio_dia
	SET nome_comida = '$nome_comida',
	categoria_comida = '$categoria_comida',
	WHERE id_cardapio = $id";

	// Executando o SQL
	if (mysqli_query($obj->con, $sql)) {

		$idCardapio = mysqli_insert_id($con);
		$idCardapio = mysqli_insert_id($con);
		
		
		$alerta['tipo'] = "success";
		$alerta['mensagem'] = "Cardápio editado com sucesso!";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Refresh:0');
	}
}

	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {

	$sql = "DELETE FROM pacotes WHERE id_cardapio = $id";
	
	if (mysqli_query($obj->con, $sql)) {
		$query = mysqli_query($obj->con, $sql);

		$alerta['tipo'] = "danger";
		$alerta['mensagem'] = "Cardápio excluído com sucesso!";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Refresh:0');

	}
}

?>