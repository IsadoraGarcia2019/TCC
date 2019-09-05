<?php 

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

session_start();

	// Recuperar ID do cliente
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações da empresa
if (isset($id)) {
	$sql = "SELECT * FROM empresas WHERE id = $id";
	$queryEmpresa = mysqli_query($obj->con, $sql);
	$resultadoEmpresa = mysqli_fetch_array($queryEmpresa);

		// Verificar se a empresa existe
	if (is_null($resultadoEmpresa)) {
		die("Empresa não encontrada.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$nome_empresa = $_POST['nome_empresa'];
	$cnpj = $_POST['cnpj'];
	$numero_funcionarios = $_POST['numero_funcionarios'];
	$turno = $_POST['turno'];
	$tipo_empresa = $_POST['tipo_empresa'];
	$numero_empresa = $_POST['numero_empresa'];
	$cidade_empresa = $_POST['cidade_empresa'];
	$rua_empresa = $_POST['rua_empresa'];

			// mudando o nome da seesao
	$_SESSION['nome_usuario'] = $nome_cliente;


		// inserindo edição na tabela
	$sql = "UPDATE empresas
	SET nome_empresa = '$nome_empresa', cnpj = '$cnpj', numero_funcionarios = '$numero_funcionarios', turno = '$turno', tipo_empresa = '$tipo_empresa', numero_empresa = '$numero_empresa', cidade_empresa = '$cidade_empresa', rua_empresa = '$rua_empresa' 
	WHERE id = $id";
}

	// Executando o SQL
if (mysqli_query($obj->con, $sql)) {
	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Dados editados com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);
}

?>