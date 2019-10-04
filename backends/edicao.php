 <?php
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
 }

 ?>