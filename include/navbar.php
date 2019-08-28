<?php

session_start();

var_dump($_SESSION);

?>
<!DOCTYPE html>
<html>
<head>
	<title>navbar</title>
</head>
<body>

	<?php if(isset($_SESSION['nome_usuario'])) { ?>
		<div>
			Olá, <?=$_SESSION['nome_usuario']?>
			<a href="backends/logoff.php" class="btn btn-dark ml-3">SAIR</a>
		</div>
	<?php } ?>

</body>
</html>