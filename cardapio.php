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
		<div style="background-image: url('media/images/food-pattern.png'); background-color: #f13d3d; min-height: 100px; min-width: 100%;  background-size: 30%;   background-position: center 1050px;
		" class="shadow">
		<div class="text-center my-5" >
			<h1 class="text-white pt-3">Cardápio do dia</h1>
		</div> 
	</div>
</div>
<section class="menu-area section-gap" id="menu">
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
						<p>
							Porque um bom dia começa com um cappuccino e um sorriso
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
							A única regra é o feijão por cima do arroz
						</p>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Cereal</h4>
							<h4 class="price">R$45</h4>
						</div>			
						<p>
							Para acordar bem disposto, vai um cereal com frutas?
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
							Até porque, dia da pizza são todos os dias
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
							Gente que só funciona depois de um bom café
						</p>									
					</div>
				</div>
				<div class="col-md-6 all cafe_manha">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Waffles</h4>
							<h4 class="price">R$10</h4>
						</div>
						<p>
							Nada que uma grande pilha de waffles pela manhã não resolva
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
							A vida é massa, basta caprichar no molho
						</p>									
					</div>
				</div>
				<div class="col-md-6 all Vegan">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Tofu</h4>
							<h4 class="price">R$5</h4>
						</div>
						<p>
							Inovar nunca é demais
						</p>									
					</div>
				</div>
				<div class="col-md-6 all Vegan">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Yakisoba</h4>
							<h4 class="price">R$20</h4>
						</div>
						<p>
							Um pouco da cultura oriental para dentro da sua casa
						</p>									
					</div>
				</div>
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Torta de limão</h4>
							<h4 class="price">R$13</h4>
						</div>
						<p>
							Para começar o seu dia doce
						</p>									
					</div>
				</div>  
				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Bolo de chocolate</h4>
							<h4 class="price">R$15</h4>
						</div>
						<p>
							Tudo fica mais feliz com chocolate
						</p>									
					</div>
				</div> 

				<div class="col-md-6 all sobremesa">
					<div class="single-menu">
						<div class="title-wrap d-flex justify-content-between">
							<h4>Torta de morango</h4>
							<h4 class="price">R$13</h4>
						</div>
						<p>
							Uma mistura de torta com a melhor fruta do mundo
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