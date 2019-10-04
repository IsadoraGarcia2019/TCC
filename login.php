<?php

	// Inclusão da classe abstrata do login
require_once "classes/login.class.php";

require_once"head.php";


$login = new Login();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<link rel="stylesheet" href="media/css/main.css">

</head>
<body style="background-color: rgb(235, 226, 225);">

	<?php
	require_once "header.php";
	?>

	<div class="row" style="max-width: 100%; margin-left: 0 !important; margin-right: 0 !important;">
		<div class="shadow" style="  background-color: #f2392c ;
		background-image: url('media/images/food-pattern.png');
		min-height: 100px; 
		min-width: 100%; 
		background-size: 30%; 
		background-position: center 1050px;" >
		<div class="text-center my-5">
			<h1 class="text-white mb-5">Login</h1>
		</div> 
	</div>
</div>

<div class="col-8 col-md-10 mt-5 offset-md-1 " style="margin-top: -80px !important;">
	<div class="card col-md-4 offset-md-4 offset-3 mt-5 shadow">
		<div class="card-body"> 
			<?php require_once"include/alerta.php"; ?>
			<form method="post" action="">
				<div class="form-row" >
					<div class="col-md-12">
						<label for="email"><strong>E-mail</strong></label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="col-md-12 mt-3">
						<label for="senha"><strong>Senha</strong></label>
						<input type="password" class="form-control" id="senha" name="senha">
					</div>
				</div>
				<div class="form-row">
					<button type="submit" class="btn btn-outline-dark col-md-12 mt-3" name="btnEntrar">Entrar</button>

					<a href="CadastroCliente.php" class="btn btn-outline-danger col-md-12 mt-3" name="botao_entrar">Criar uma nova conta</a>
				</div>
			</form>
		</div>
	</div>
</div>

<?php
	//inclusão do rodapé
require_once "footer.php";
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
