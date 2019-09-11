<?php

require_once"head.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Combos</title>
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
		background-position: center 1050px;">
		<div class="text-center my-5" >
			<h1 class="text-white pt-3 ">Pacotes</h1>
		</div> 
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-10 col-md-4 mt-5 mb-5 offset-1 offset-md-0">
			<div class="card shadow" style="margin-top: -60px;  min-height: 400px;">
				<img src="media/images/petiscos.jpg" class="card-img-top"  style="max-height: 200px; max-width: 350px;" alt="...">
				<div class="card-body">
					<h5 class="card-title text-danger">Básico</h5>
					<p class="card-text" style="max-height: 50px;"><strong>20 almoços durante o mês, o usuários escolhe os dias em que uqer receber.</strong></p>
					<a href="#" class="btn btn-outline-danger col-md-6 offset-md-3 mt-4">R$260,00</a>
				</div>
			</div>
		</div>

		<div class="col-10 col-md-4 mt-5 mb-5 offset-1 offset-md-0">
			<div class="card shadow"style="margin-top: -60px;  min-height: 400px;">
				<img src="media/images/combo-cafe.jpg" class="card-img-top" style="max-height: 200px; max-width: 350px;"  alt="...">
				<div class="card-body">
					<h5 class="card-title text-danger">Intermediário</h5>
					<p class="card-text" style="max-height: 50px;"><strong>20 cafés da manhã e 20 almoços durante o mês, o usuário escolhe os dias em que quer receber.</strong></p>
					<a href="#" class="btn btn-outline-danger col-md-6 offset-md-3 mt-4">R$500,00</a>
				</div>
			</div>
		</div>

		<div class="col-10 col-md-4 mt-5 mb-5 offset-1 offset-md-0">
			<div class="card shadow" style="margin-top: -60px; min-height: 400px;">
				<img src="media/images/comborefeiçoes1.jpg" class="card-img-top" style="max-height: 200px; max-width: 350px;"  alt="...">
				<div class="card-body">
					<h5 class="card-title text-danger">Premium</h5>
					<p class="card-text" style="max-height: 50px;"><strong>20 cafés da manhã, 20 almoços e 20 jantares durante o mês, o usuário escolhe os dias em que quer receber.</strong></p>
					<a href="#" class="btn btn-outline-danger col-md-6 offset-md-3 mt-3">R$760,00</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php

//inclusão do header
require_once "footer.php";
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>