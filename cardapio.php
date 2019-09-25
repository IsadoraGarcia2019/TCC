<?php

require_once"head.php";

require_once"include/conexao.php";

$lista = "SELECT * FROM cardapio_dia";
$queryCardapio = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryCardapio, MYSQLI_ASSOC);

if ($_SESSION['tp_usuario'] == 'restaurante') {
  header('Location:erros.php?mesagem= Restaurantes não podem esollher o cardápio do dia :(');
} 

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
								<?php if (isset($_SESSION['logado']) || $_SESSION['logado'] == true) { ?>
									<?php if ($_SESSION['tp_usuario'] != 'administrador') { ?>
										<a href="escolha_cardapio.php" class="btn btn-danger col-md-12">Pedir agora</a>
									<?php } ?>

									<?php if ($_SESSION['tp_usuario'] == 'administrador') { ?>
										<a href="erros6.php." class="btn btn-danger col-md-12">Pedir agora</a>
										<a href="edicaoCardapio.php?id=<?=$item['id_cardapio']?>" class="btn btn-dark col-md-12 mt-3">Editar Cardápio</a>
									<?php } ?>
								<?php } ?>

								<?php if (!isset($_SESSION['logado']) || $_SESSION['logado'] == false) { ?>
									<a href="erros7.php" class="btn btn-danger col-md-12">Pedir agora</a>
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
								<?php if (isset($_SESSION['logado']) || $_SESSION['logado'] == true) { ?>
									<?php if ($_SESSION['tp_usuario'] != 'administrador') { ?>
										<a href="escolha_cardapio.php" class="btn btn-danger col-md-12">Pedir agora</a>
									<?php } ?>

									<?php if ($_SESSION['tp_usuario'] == 'administrador') { ?>
										<a href="erros6.php." class="btn btn-danger col-md-12">Pedir agora</a>
										<a href="edicaoCardapio.php?id=<?=$item['id_cardapio']?>" class="btn btn-dark col-md-12 mt-3">Editar Cardápio</a>
									<?php } ?>
								<?php } ?>

								<?php if (!isset($_SESSION['logado']) || $_SESSION['logado'] == false) { ?>
									<a href="erros7.php" class="btn btn-danger col-md-12">Pedir agora</a>
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
								<?php if (isset($_SESSION['logado']) || $_SESSION['logado'] == true) { ?>
									<?php if ($_SESSION['tp_usuario'] != 'administrador') { ?>
										<a href="escolha_cardapio.php" class="btn btn-danger col-md-12">Pedir agora</a>
									<?php } ?>

									<?php if ($_SESSION['tp_usuario'] == 'administrador') { ?>
										<a href="erros6.php." class="btn btn-danger col-md-12">Pedir agora</a>
										<a href="edicaoCardapio.php?id=<?=$item['id_cardapio']?>" class="btn btn-dark col-md-12 mt-3">Editar Cardápio</a>
									<?php } ?>
								<?php } ?>

								<?php if (!isset($_SESSION['logado']) || $_SESSION['logado'] == false) { ?>
									<a href="erros7.php" class="btn btn-danger col-md-12">Pedir agora</a>
								<?php } ?>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
	</div>
</section>

<center>
  <div class="redes-sociais" style="background-color: #de2828;">
    <div class="container">

      <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWrRmTgXbBSZDhPSBJsPLwHzgBPqskCzpPtNTPhwSkgLdBBXnbmRScSHtKdnmsdqlgZFHsnsQ"><img src="media/images/email.png" alt="email" title="email" class="icones"></a>

      <a href="https://www.instagram.com/deliiverycheff/?hl=pt-br"><img src="media/images/instagram.png" alt="instagram" title="instagram" id="instagram " class="icones"></a>

      <a href="https://twitter.com/delivery_cheff"><img src="media/images/twitter.png" alt="twitter" title="twitter" class="icones"></a>

    </center>
  </div>
</div>

<footer>
 <div class="footer-item">
  <div class="row">
    <a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsTJtrnhxXwfpDgvhvzGsLRlLgjHgjcfzcQFCTNqvbqkMSDXnPTwMNHPSkbjVnnrBWWPBfJq" class="col-sm-12 col-md-3">E-mail: deliiverycheff@gmail.com</a>
    <a href="https://twitter.com/delivery_cheff" class="col-sm-12 col-md-3">Twitter: @delivery_cheff </a>
    <a href="https://www.instagram.com/deliiverycheff/?hl=pt-br"class="col-sm-12 col-md-3">Instagram: @deliiverycheff</a>
    <a href=""class="col-sm-12 col-md-3">Telefone: +55 (47) 3768-3352</a>
  </div>
</div>
<div id="negrito" class="mt-4">
  <p class="mt-5 font-italic">2019 &copy; <strong>Projeto desenvolvido por alunos da turma de PHP - Entra21/2019</strong></p>

</div>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/superfish.min.js"></script>	
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>