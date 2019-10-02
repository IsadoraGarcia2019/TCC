<?php
require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do cliente
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do endereco
if (isset($id)) {
	$sql = "SELECT * FROM enderecos WHERE id_endereco = $id";
	$query = mysqli_query($obj->con, $sql);
	$resultadoEndereco = mysqli_fetch_array($query);

		// Verificar se o endereco existe
	if (is_null($resultadoEndereco)) {
		die("Endereço não encontrado.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$local = $_POST['local'];
	$rua = $_POST['rua'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade_cliente'];
	$estado = $_POST['estado'];

	$sql = "UPDATE enderecos SET 
	local = '$local',
	rua = '$rua',
	bairro = '$bairro', 
	cidade = '$cidade', 
	estado = '$estado' 
	WHERE id_endereco = $id";
	
	// Executando o SQL
	if (mysqli_query($obj->con, $sql)) {
		$alerta['tipo'] = "success";
		$alerta['mensagem'] = 'Dados editados com sucesso!';

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Location: enderecos.php');
	}
}

	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {

	$sql = "DELETE FROM enderecos WHERE id_endereco = $id";
	
	if (mysqli_query($obj->con, $sql)) {

		$alerta['tipo'] = "danger";
		$alerta['mensagem'] = "Dados excluidos com sucesso!";

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Location: enderecos.php');
	}

}

?>