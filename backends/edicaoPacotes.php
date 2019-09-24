<?php 

session_start();

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

// Buscar informações do pacote
if (isset($id)) {
	$sql = "SELECT * FROM pacotes WHERE id = $id";
	$queryPacote = mysqli_query($obj->con, $sql);
	$resultadoPacote = mysqli_fetch_array($queryPacote);

		// Verificar se o pacote existe
	if (is_null($resultadoPacote)) {
		die("Pacote não encontrado.");
	}
}

	// Verificando ação de EDITAR
if (isset($_POST['btnEditar'])) {
		// Recebimento dos campos
	$nome_pacote = $_POST['nome_pacote'];
	$descricao_pacote = $_POST['descricao_pacote'];
	$preco_pacote = $_POST['preco_pacote'];
	$quantidade_cafe = $_POST['quantidade_cafe'];
	$quantidade_almoco = $_POST['quantidade_almoco'];
	$quantidade_jantar = $_POST['quantidade_jantar'];
	
		// inserindo edição na tabela
	$sql = "UPDATE pacotes
	SET nome_pacote = '$nome_pacote',
	descricao_pacote = '$descricao_pacote',
	preco_pacote = '$preco_pacote',
	quantidade_cafe = '$quantidade_cafe', 
	quantidade_almoco = '$quantidade_almoco', 
	quantidade_jantar = '$quantidade_jantar'
	WHERE id = $id";


	// Executando o SQL
	if (mysqli_query($obj->con, $sql)) {

		$id = mysqli_insert_id($con);
		$id = mysqli_insert_id($con);
		
		
		$alerta['tipo'] = "success";
		$alerta['mensagem'] = 'Pacote editado com sucesso! <a href="pacotes.php" class="alert-link">Vizualizar</a>';

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Refresh:0');
	}

}
	// Verificando ação de EXCLUIR
if (isset($_POST['btnExcluir'])) {

	$sql = "DELETE FROM pacotes WHERE id = $id";
	
	if (mysqli_query($obj->con, $sql)) {
		$query = mysqli_query($obj->con, $sql);

		$alerta['tipo'] = "danger";
		$alerta['mensagem'] = 'Pacote excluído com sucesso! <a href="pacotes.php" class="alert-link">Vizualizar</a>';

		$alerta = serialize($alerta);

		setcookie('alerta', $alerta, time() + 120);

		header('Location:CadastroPacotes.php');

	}
}

?>