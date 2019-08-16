<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Combos</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
</head>
<body>

	<?php
	require_once "header.php";
	?>

	<h1 class="text-center">Combos</h1>
<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1">
	<div class="card" style="margin-right: auto; margin-left: auto;">
		<img src="media/images/combo.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Básico</h5>
			<p class="card-text"><strong>Almoço ou Jantar de segunda a sexta</strong></p>
			<a href="#" class="btn btn-primary">R$200,00</a>
		</div>
	</div>
	<div class="card mt-5" style="margin-right: auto; margin-left: auto;">
		<img src="media/images/cafe-da-manha.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Intermediário</h5>
			<p class="card-text"><strong>Café da manhã e Almoço de segunda a sábado</strong></p>
			<a href="#" class="btn btn-primary">R$432,00</a>
		</div>
	</div>
	<div class="card mt-5" style="margin-right: auto; margin-left: auto;">
		<img src="media/images/refeiçoes.jpg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Premium</h5>
			<p class="card-text"><strong>Café da manhã, Almoço e  Jantar de segunda a segunda</strong></p>
			<a href="#" class="btn btn-primary">R$784,00</a>
		</div>
	</div>
	<div class="card mt-5" style="margin-right: auto; margin-left: auto;">
		<img src="media/images/combo_personalizado.jpeg" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Personalizado</h5>
			<p class="card-text"><strong>O cliente escolhe o que quer receber e os dias que quer receber, o valor varia conforme as escolhas</strong></p>
			<a href="#" class="btn btn-primary">Variável</a>
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