 <?php
	// VERIFICAÇÃO DE PAGINA RESTRITA
	// Verificando se esta logado
 session_start();
 if (!isset($_SESSION['logado']) && $_SESSION['logado'] == false) {
 	header('Location: erros.php');
 }

 ?>
 