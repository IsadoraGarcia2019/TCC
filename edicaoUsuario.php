<?php

require_once"backends/edicaoUsuario.php";

require_once"head.php";

// Verificar se existe alerta via COOKIE
if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
	$alerta = unserialize($_COOKIE['alerta']);
	setcookie('alerta');
}

?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Edição de  dados de acesso</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<link rel="stylesheet" href="media/css/main.css">

</head>
<body style="background-color: rgb(235, 226, 225);">

	<?php
	require_once "header.php";
	?>

	<div class="row">
		<div class="shadow" style="  background-color: #f2392c ;
		background-image: url('media/images/food-pattern.png');
		min-height: 100px; 
		min-width: 100%; 
		background-size: 30%; 
		background-position: center 1050px;" >
		<div class="text-center my-5">
			<h1 class="text-white mb-5">Edição de Usuários</h1>
		</div> 
	</div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
	<div class="card shadow" style="margin-right: auto; margin-left: auto;">
		<div class="card-body" > 

			<?php require_once"include/alerta.php"; ?>

			<form method="post" action="">

				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email"><strong>E-mail</strong></label>
						<input type="email" class="form-control" id="email" name="email" value="<?= $resultadoUsuarios['email']?>">
					</div>
					<div class="form-group col-sm">
						<label for="senha"><strong>Senha</strong></label>
						<input type="password" class="form-control" id="senha" name="senha" value="<?= $resultadoUsuarios['senha']?>">
					</div>
				</div>

				<?php if (empty($disabled)) { ?>
					<button type="submit" class="btn btn-dark col-md-12 mb-3 " name="btnEditar">Editar</button>
				<?php } ?>

				<?php if (empty($disabled)) { ?>
					<button type="submit" class="btn btn-danger float-left mb-3 col-md-12" name="btnExcluir">Excluir</button>
				<?php } ?>

			</form>
		</div>
	</div>
</div>

</body>
</html>