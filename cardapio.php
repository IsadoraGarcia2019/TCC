<?php

require_once"head.php";

require_once"include/conexao.php";

$lista = "SELECT * FROM cardapio_dia";
$queryCardapio = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryCardapio, MYSQLI_ASSOC);

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
		<div class="filters-content pb-5">
			<div class="row grid">

				<?php foreach ($lista as $item) { ?>

					<?php if (utf8_encode($item['categoria_comida']) == 'cafe_manha'){ ?>
						<div class="col-md-6 all cafe_manha">
							<div class="single-menu">
								<div class="title-wrap d-flex justify-content-between">
									<h4><?=utf8_encode($item['nome_comida'])?></h4>
								</div>	
								<?php if ($_SESSION['nome_usuario'] == 'Administrador') { ?>
									<a href="edicaoCardapio.php?id=<?=$item['id']?>" class="btn btn-dark col-md-12 mt-3">Editar Cardápio</a>				
								<?php } ?>  
							</div>					                               
						</div>   
					<?php } ?>                        

					<?php if (utf8_encode($item['categoria_comida'])== 'almoco') { ?>
						<div class="col-md-6 all almoco">
							<div class="single-menu">
								<div class="title-wrap d-flex justify-content-between">
									<h4><?=utf8_encode($item['nome_comida'])?></h4>
								</div>	
								<?php if ($_SESSION['nome_usuario'] == 'Administrador') { ?>
									<a href="edicaoCardapio.php?id=<?=$item['id']?>" class="btn btn-dark col-md-12 mt-3">Editar Cardápio</a>	
								<?php } ?>
							</div>
						</div>
					<?php } ?>

					<?php if (utf8_encode($item['categoria_comida']) == 'jantar' ){ ?>
						<div class="col-md-6 all jantar">
							<div class="single-menu">
								<div class="title-wrap d-flex justify-content-between">
									<h4><?=utf8_encode($item['nome_comida'])?></h4>
								</div>	
								<?php if ($_SESSION['nome_usuario'] == 'Administrador') { ?>
									<a href="edicaoCardapio.php?id=<?=$item['id']?>" class="btn btn-dark col-md-12 mt-3">Editar Cardápio</a>	
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
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