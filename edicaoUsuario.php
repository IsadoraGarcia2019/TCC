 <?php

 require_once"backends/edicaoUsuario.php";

require_once"head.php";
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
		<div style="background-image: url('media/images/food-pattern.png'); background-color: #f13d3d; min-height: 100px; min-width: 100%;  background-size: 30%;   background-position: center 1050px;
		" class="shadow" >
		<div class="text-center my-5">
			<h1 class="text-white mb-5">Edição de Usuários</h1>
		</div> 
	</div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
	<div class="card" style="margin-right: auto; margin-left: auto;">
		<div class="card-body" > 

			<form method="post" action="">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email"><strong>E-mail</strong></label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group col-sm">
						<label for="senha"><strong>Senha</strong></label>
						<input type="password" class="form-control" id="senha" name="senha">
					</div>
				</div>

				<?php if (empty($disabled)) { ?>
					<button type="submit" class="btn btn-outline-danger float-left mb-3 col-md-12" name="btnExcluir">Excluir</button>
				<?php } ?>

				<?php if (empty($disabled)) { ?>
					<button type="submit" class="btn btn-outline-secondary col-md-12 " name="btnEditar">Editar</button>
				<?php } ?>

			</form>
		</div>
	</div>
</div>

</body>
</html>