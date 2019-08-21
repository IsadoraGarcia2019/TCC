<?php

//conexao com o banco de dados
require_once"include/conexao.php";

	// botão de cadastrar
if (isset($_POST['btnCadastrar'])) {
		// Recebendo os campos
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$nome_empresa = $_POST['nome_empresa'];
	$cnpj = $_POST['cnpj'];
	$numero_funcionarios = $_POST['numero_funcionarios'];
	$turno = $_POST['turno'];
	$tipo_empresa = $_POST['tipo_empresa'];
	$numero_empresa = $_POST['numero_empresa'];
	$cidade_empresa = $_POST['cidade_empresa'];
	$rua_empresa = $_POST['rua_empresa'];

	//inserindo no BD
	$sqlEmpresa = "INSERT INTO empresas 
	VALUES (
	DEFAULT, 
	'$nome_empresa',
	'$cnpj',
	'$numero_funcionarios',
	'$turno', 
	'$tipo_empresa', 
	'$numero_empresa', 
	'$cidade_empresa', 
	'$rua_empresa'
)";

// Executando o SQL
if (mysqli_query($con, $sqlEmpresa)) {

	$idEmpresa = mysqli_insert_id($con);

	//inserindo no BD
	$sqlUsuario = "INSERT INTO usuarios 
	VALUES (
	DEFAULT, 
	'$email',
	'$senha', 
	'empresa',
	'$idEmpresa'
)";

if (mysqli_query($con, $sqlUsuario)) {

	$alerta['tipo'] = "success";
	$alerta['mensagem'] = "Seu cadastro foi salvo com sucesso!";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);
}else {
	$alerta['tipo'] = "danger";
	$alerta['mensagem'] = "Erro ao salvar seu cadastro.";

	$alerta = serialize($alerta);

	setcookie('alerta', $alerta, time() + 120);

}
}
}

?>