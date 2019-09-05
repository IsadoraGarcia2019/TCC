<!-- <?php
require_once"include/conexao.php";

	// Recuperar ID do cliente
if (isset($_GET['id'])) {
	$id = $_GET['id'];



	// Buscar informações do cliente
	if ($_SESSION['tp_usuario'] == 'cliente' ) {
		$sql = "SELECT * FROM clientes WHERE id = $id";
		$queryCliente = mysqli_query($con, $sql);
		$resultadoCliente = mysqli_fetch_array($queryCliente);

		// Verificar se o cliente existe
		if (is_null($resultadoCliente)) {
			die("Cliente não encontrado.");
		}
	}
	// Buscar informações do restaurante
	if ($_SESSION['tp_usuario'] == 'restaurante' ) {
		$sql = "SELECT * FROM restaurantes WHERE id = $id";
		$queryRestaurante = mysqli_query($con, $sql);
		$resultadoRestaurante = mysqli_fetch_array($queryRestaurante);

		// Verificar se o restaurante existe
		if (is_null($resultadoRestaurante)) {
			die("Restaurante não encontrado.");
		}
	}

	// Buscar informações da empresa
	if ($_SESSION['tp_usuario'] == 'empresa' ) {
		$sql = "SELECT * FROM empresas WHERE id = $id";
		$queryEmpresa = mysqli_query($con, $sql);
		$resultadoEmpresa = mysqli_fetch_array($queryEmpresa);

		// Verificar se a empresa existe
		if (is_null($resultadoEmpresa)) {
			die("Empresa não encontrado.");
		}
	}
}
?> -->