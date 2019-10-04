<?php

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>navbar</title>
</head>
<body>

	<?php if(isset($_SESSION['nome_usuario'])) { ?>
		<div class="text-white">
			Olá, <?=$_SESSION['nome_usuario']?>
			<a href="backends/logoff.php" class="btn btn-dark text-white ml-3 mr-3">SAIR</a>
		</div>
	<?php } ?>

</body>
</html>