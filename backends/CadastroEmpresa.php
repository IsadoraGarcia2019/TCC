<?php

//FAZENDO CONEXÃO COM O BANCO DE DADOS
require_once"../includes/conexao.php";

	// RECUPERAR ID DA EMPRESA 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

	// BUSCAR INFORMAÇÕES DA EMPRESA
if (isset($id)) {
	$sql = "SELECT * FROM empresas WHERE id = $id";
	$queryEmpresa = mysqli_query($con, $sql);
	$resultadoEmpresa = mysqli_fetch_array($queryEmpresa);

		// Verificar se o aluno existe
	if (is_null($resultadoEmpresa)) {
		die("Empresa não encontrada.");
	}
}

	// BUSCAR INFORMAÇÕES DE USUÁRIOS
$sqlUsuarios = "SELECT * FROM usuarios";
$queryUsuarios = mysqli_query($con, $sqlUsuarios);

	// VERIFICA AÇÃO SALVAR
if (isset($_POST['btnSalvar'])) {
		// RECEBENDO OS CAMPOS
	$email = $_POST['email'];
	$senha = ['senha'];
	$nome_empresa = $_POST['nome_empresa'];
	$cnpj = $_POST['cnpj'];
	$numero_funcionarios = $_POST['numero_funcionarios'];
	$turno = $_POST['turno'];
	$tipo_empresa = $_POST['tipo_empresa'];
	$numero_empresa = $_POST['numero_empresa'];
	$cidade_empresa = $_POST['cidade_empresa'];
	$rua_empresa = $_POST['rua_empresa'];

		$sql = "INSERT INTO empresas
		VALUES (
		DEFAULT, 
		'$email',
		'$senha',
		'$nome_empresa',
		'$cnpj',
		'$numero_funcionarios',
		'$turno',
		'$tipo_empresa',
		'$numero_empresa',
		'$cidade_empresa',
		'$rua_empresa'
	)";
}

		// EXECUTANDO O SQL
if (mysqli_query($con, $sql)) {
	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Empresa salva com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

} else {
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao salvar a empresa";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);
}

?>