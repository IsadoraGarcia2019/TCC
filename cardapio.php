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
		<div style="background-image: url('media/images/food-pattern.png'); background-color: #f13d3d; min-height: 100px; min-width: 100%;  background-size: 30%;   background-position: center 1050px;
		" class="shadow">
		<div class="text-center my-5" >
			<h1 class="text-white pt-3">Cardápio do dia</h1>
		</div> 
	</div>
</div>
<section class="menu-area section-gap" id="menu" style="background-color: rgb(235, 226, 225)!important; ">
	<div class="container">
		<ul class="filter-wrap filters col-lg-12 no-padding">
			<li class="active" data-filter="*">Todo menu</li>
			<li data-filter=".cafe_manha">Café da manhã</li>
			<li data-filter=".almoco">Almoço</li>
			<li data-filter=".jantar">Jantar</li>
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
					</div>					                               
				</div>                           
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Feijoada</h4>
							<h4 class="price">R$30</h4>
						</div>											
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Café</h4>
							<h4 class="price">R$9</h4>
						</div>												
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pizza de Camarão</h4>
							<h4 class="price">R$49</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Batata recheada</h4>
							<h4 class="price">R$18</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Creme de ervilha</h4>
							<h4 class="price">R$5</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Lasanha</h4>
							<h4 class="price">R$14</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Sopa de macarrão</h4>
							<h4 class="price">R$10</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Esfiha</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cachorro Quente</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pastel</h4>
							<h4 class="price">R$5</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Coxinha de Frango</h4>
							<h4 class="price">R$5</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all jantar">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Frango Frito</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Chocolate Quente</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Mingau</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Waffles</h4>
							<h4 class="price">R$10</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Panquecas</h4>
							<h4 class="price">R$10</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Croissant</h4>
							<h4 class="price">R$11</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Brownie</h4>
							<h4 class="price">R$12</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Donuts</h4>
							<h4 class="price">R$5</h4>
						</div>								
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cheesecake</h4>
							<h4 class="price">R$20</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Torrada e melado</h4>
							<h4 class="price">R$5</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Ovos com bacon</h4>
							<h4 class="price">R$11</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Tapioca</h4>
							<h4 class="price">R$11</h4>
						</div>								
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pão de Canela</h4>
							<h4 class="price">R$9</h4>
						</div>								
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Sanduíche Integral</h4>
							<h4 class="price">R$9</h4>
						</div>								
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pão de Queijo</h4>
							<h4 class="price">R$2</h4>
						</div>								
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Misto Quente</h4>
							<h4 class="price">R$5</h4>
						</div>								
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Vitamina</h4>
							<h4 class="price">R$11</h4>
						</div>								
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Macarrão com queijo</h4>
							<h4 class="price">R$25</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Estrogonoff de Frango</h4>
							<h4 class="price">R$25</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Bife à parmegiana</h4>
							<h4 class="price">R$14</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Porção de Batata Frita</h4>
							<h4 class="price">Pequena R$9</h4>
							<h4 class="price">Média R$20</h4>
							<h4 class="price">Grande R$45</h4>
						</div>											
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Hamburguer</h4>
							<h4 class="price ml-3">X-Salada R$12</h4>
							<h4 class="price">X-Bacon R$14</h4>
							<h4 class="price">X-Calabresa R$14</h4>
						</div>											
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Nhoque de Batata Doce</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Purê de Batata</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Fricassê de Frango</h4>
							<h4 class="price">R$11</h4>
						</div>									
					</div>
				</div>	
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Carne de Panela</h4>
							<h4 class="price">R$14</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Nuggets de Frango</h4>
							<h4 class="price">R$5</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all almoco">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Macarronada</h4>
							<h4 class="price">R$11</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all Vegan">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Yakisoba</h4>
							<h4 class="price">R$30</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all Vegan">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pizza de brócolis</h4>
							<h4 class="price">R$45</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all Vegan">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Falafel</h4>
							<h4 class="price">R$3</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all Vegan">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cuscuz de legumes</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all Vegan">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Tofu</h4>
							<h4 class="price">R$5</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all Vegan">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Mix de Salada</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all Vegan">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Fricassê de legumes</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Torta de limão</h4>
							<h4 class="price">R$15</h4>
						</div>									
					</div>
				</div>  
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Bolo de chocolate</h4>
							<h4 class="price">R$25</h4>
						</div>									
					</div>
				</div> 
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Torta de morango</h4>
							<h4 class="price">R$15</h4>
						</div>									
					</div>
				</div> 
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Torta alemã</h4>
							<h4 class="price">R$25</h4>
						</div>									
					</div>
				</div> 
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Mousse de maracujá</h4>
							<h4 class="price">R$9</h4>
						</div>								
					</div>
				</div> 
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Bolo de leite ninho</h4>
							<h4 class="price">R$25</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Bolo de churros</h4>
							<h4 class="price">R$25</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Banoffee pie</h4>
							<h4 class="price">R$25</h4>
						</div>								
					</div> 
				</div>
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pudim de leite condensado</h4>
							<h4 class="price">R$14</h4>
						</div>								
					</div>
				</div>	
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Petit gateau</h4>
							<h4 class="price">R$14</h4>
						</div>									
					</div>
				</div> 
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Arroz doce</h4>
							<h4 class="price">R$11</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Paleta mexicana</h4>
							<h4 class="price">R$12</h4>
						</div>									
					</div>
				</div>  
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Palha Italiana</h4>
							<h4 class="price">R$12</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Pizza sensação</h4>
							<h4 class="price">R$45</h4>
						</div>									
					</div>
				</div>
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Churros com doce de leite</h4>
							<h4 class="price">R$12</h4>
						</div>									
					</div>
				</div>   
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Mix de Frutas</h4>
							<h4 class="price">R$9</h4>
						</div>									
					</div>
				</div> 
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Sagu</h4>
							<h4 class="price">R$9</h4>
						</div>								
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