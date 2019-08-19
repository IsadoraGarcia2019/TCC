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
<body style="background-color: rgb(235, 226, 225);">

	<?php
	require_once "header.php";
	?>

	<div class="row">
		<div style="background-image: url('media/images/food-pattern.png'); background-color: #f13d3d; min-height: 100px; min-width: 100%;  background-size: 15%;   background-position: center 1050px;
		" class="shadow" >
		<div class="text-center my-5" >
			<h1 class="text-white pt-3 ">Cardápio do dia</h1>
		</div> 
	</div>
</div>


<section class="menu-area section-gap" id="menu">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10"></h1>

				</div>
			</div>
		</div>	

		<ul class="filter-wrap filters col-lg-12 no-padding">
			<li class="active " data-filter="*">Todo menu</li>
			<li data-filter=".breakfast">Café da manhã</li>
			<li data-filter=".lunch">Almoço</li>
			<li data-filter=".dinner">Jantar</li>
			<li data-filter=".Vegan">Vegana</li>
			<li data-filter=".sobremesa">Sobremesas</li>
		</ul>

		<div class="filters-content">
			<div class="row grid">
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cappuccino</h4>
							<h4 class="price">R$9</h4>
						</div>			
						<p>
							Usage of the Internet is becoming more common due to rapid advance.
						</p>									
					</div>					                               
				</div>                           
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Arroz com Feijão</h4>
							<h4 class="price">R$20</h4>
						</div>			
						<p>
							Usage of the Internet is becoming more common due to rapid advance.
						</p>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cereal Genérico</h4>
							<h4 class="price">R$45</h4>
						</div>			
						<p>
							Usage of the Internet is becoming more common due to rapid advance.
						</p>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pizza de Camarão</h4>
							<h4 class="price">R$49</h4>
						</div>
						<p>
							Usage of the Internet is becoming more common due to rapid advance.
						</p>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Café Forte</h4>
							<h4 class="price">R$5</h4>
						</div>
						<p>
							Usage of the Internet is becoming more common due to rapid advance.
						</p>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Macarrão com Queijo</h4>
							<h4 class="price">R$20</h4>
						</div>
						<p>
							Usage of the Internet is becoming more common due to rapid advance.
						</p>									
					</div>
				</div>                            
			</div>
		</div>

	</div>
</section>

<?php
//inclusão do rodapé
require_once "footer.php";


?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/superfish.min.js"></script>	
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>