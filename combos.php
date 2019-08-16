<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Combos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
</head>
<body style="background-color: rgb(235, 226, 225);">

	<?php
	require_once "header.php";
	?>

	<div class="row">
		<div style="background-image: url('media/images/food-pattern.png'); background-color: #f13d3d; min-height: 100px; min-width: 100%;  background-size: 15%;   background-position: center 1050px;
		" class="shadow" >
		<div class="text-center my-5" >
			<h1 class="text-white pt-3 "><strong >Combos</strong></h1>
		</div> 
	</div>
</div>



<div class="row">
	<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1">
		<div class="card" style="margin-right: auto; margin-left: auto;">
			<img src="media/images/combo.jpg" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title text-danger">Básico</h5>
				<p class="card-text"><strong>Almoço ou jantar de segunda à sexta</strong></p>
				<a href="#" class="btn btn-outline-danger col-md-6 offset-md-3">R$200,00</a>
			</div>
		</div>
	</div>
	<div class="card mt-5" style="margin-right: auto; margin-left: auto;">
		<img src="media/images/cafe-da-manha.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title text-danger">Intermediário</h5>
			<p class="card-text"><strong>Café da manhã e almoço de segunda à sábado</strong></p>
			<a href="#" class="btn btn-outline-danger col-md-6 offset-md-3">R$432,00</a>
		</div>
	</div>
	<div class="card mt-5" style="margin-right: auto; margin-left: auto;">
		<img src="media/images/refeiçoes.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title text-danger">Premium</h5>
			<p class="card-text"><strong>Café da manhã, almoço e jantar de segunda à segunda</strong></p>
			<a href="#" class="btn btn-outline-danger col-md-6 offset-md-3">R$784,00</a>
		</div>
	</div>
	<div class="card mt-5" style="margin-right: auto; margin-left: auto;">
		<img src="media/images/combo_personalizado.jpeg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title text-danger">Personalizado</h5>
			<p class="card-text"><strong>Você escolhe o que quer receber e os dias que quer receber, o valor varia conforme as suas escolhas</strong></p>
			<a href="#" class="btn btn-outline-danger col-md-6 offset-md-3">Variável</a>
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