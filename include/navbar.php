<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>navbar</title>
</head>
<body>

	<div>
		Olá, <?=$_SESSION['nome_usuario']?>
		<a href="backends/logoff.php" class="btn btn-dark ml-3">SAIR</a>
	</div>

</body>
</html>