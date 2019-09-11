<?php

require_once"head.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cardápio do dia</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="media/css/main.css">
</head>
<body >
	
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
			<h1 class="text-white pt-3">Cardápio do dia</h1>
		</div> 
	</div>
</div>
<section class="menu-area " id="menu" style="padding-top:120px;background-color: rgb(235, 226, 225)!important; ">
	<div class="container">
		<ul class="filter-wrap filters col-lg-12 no-padding">
			<li class="active" data-filter="*">Todo menu</li>
			<li data-filter=".cafe_manha">Café da manhã</li>
			<li data-filter=".almoco">Almoço</li>
			<li data-filter=".jantar">Jantar</li>
		</ul>
		<div class="filters-content">
			<div class="row grid">
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cappuccino</h4>
						</div>												
					</div>					                               
				</div>                           
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Feijoada</h4>
						</div>											
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Café</h4>
						</div>												
					</div>
				</div>				
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pizza de Quatro Queijos</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Batata recheada</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Lasanha</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Sopa de macarrão</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Esfiha</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cachorro Quente</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cheeseburguer</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>X-Salada</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Chocolate Quente</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Vitamina</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Waffles</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Panquecas</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Croissant</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Brownie</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cheesecake</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Ovos com bacon</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Tapioca</h4>
						</div>								
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Sanduíche Integral</h4>
						</div>								
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Estrogonoff de Frango</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Bife à parmegiana</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pizza de Calabresa</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Fricassê de Frango</h4>
						</div>									
					</div>
				</div>	
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Carne de Panela</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Nuggets</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Macarronada</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Batata Frita</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Frango Assado</h4>
						</div>									
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
//inclusão do rodapé
	require_once "footer.php";
	?>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/superfish.min.js"></script>	
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>