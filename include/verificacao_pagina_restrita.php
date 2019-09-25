 <?php
	// VERIFICAÇÃO DE PAGINA RESTRITA
	// Verificando se esta logado
 if (!isset($_SESSION['logado']) && $_SESSION['logado'] == false) {
 	header('Location: erros.php?mesagem= Você não está logado, faça login ou cadastre-se já!');
 }

 ?>
 