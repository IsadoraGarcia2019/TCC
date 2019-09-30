<?php

if(isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
	header('Location: erros.php?mesagem= Você já está logado, faça o logoff!');
}
?>
