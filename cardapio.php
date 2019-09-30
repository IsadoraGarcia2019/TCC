<?php

require_once"head.php";

require_once"include/conexao.php";

$lista = "SELECT * FROM cardapio_dia WHERE DATE(data_cardapio) = CURRENT_DATE() AND excluido <> 'sim'";
$queryCardapio = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryCardapio, MYSQLI_ASSOC);

// alterando fuso horario
date_default_timezone_set('America/Sao_Paulo');
$agora = date('H');

$hora_inicio_cafe = 5;
$hora_termino_cafe = 8;

$hora_inicio_almoco = 10;
$hora_termino_almoco = 13;

$hora_inicio_janta = 17;
$hora_termino_janta = 21;

if ($agora >= $hora_inicio_cafe && $agora <= $hora_termino_cafe)
	$texto_topo = "café da manhã";

if ($agora >= $hora_inicio_almoco && $agora <= $hora_termino_almoco)
	$texto_topo = "almoço";

if ($agora >= $hora_inicio_janta && $agora <= $hora_termino_janta)
	$texto_topo = "jantar";

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

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1 mb-5" style="margin-top: -30px !important;" >
	<div class="card shadow" style="margin-right: auto; margin-left: auto;">
		<div class="card-body" > 

			<h3 class="text-center text-danger">Meus pedidos para hoje</h3>

		</div>
	</div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1 mb-5" style="margin-top: -30px !important;" >
	<div class="card shadow" style="margin-right: auto; margin-left: auto;">
		<div class="card-body" > 

			<div class="row">
				<?php if (!($agora >= $hora_inicio_cafe && $agora <= $hora_termino_cafe) && !($agora >= $hora_inicio_almoco && $agora <= $hora_termino_almoco) && !($agora >= $hora_inicio_janta && $agora <= $hora_termino_janta)) { ?>
					<div class="col-12">
						<div class="card border-danger mb-3" >
							<div class="card-body text-danger">
								<h3 class="mb-4 text-dark">Infelizmente não estamos aceitando pedidos no momento <i class="far fa-sad-cry"></i></h3>
							</div>

							<p class="p-3 text-danger">Os horários dos pedidos são:</p>

							<span class="font-weight-bold pr-1 pl-3">Café da manhã:</span><p class="pl-3">Entre 5h e 8h.</p>
							<span class="font-weight-bold pr-1 pl-3">Almoço:</span><p class="pl-3">Entre 10h e 13h.</p>
							<span class="font-weight-bold pr-1 pl-3">Janta:</span><p class="pl-3"> Entre 19h e 21h.</p>
						</div>
					</div>
				<?php } else { ?>  
					<div class="col-12">
						<h3 class="mb-4">Opções para o <?=$texto_topo?>:</h3>
					</div> 
				<?php } ?>

				<?php foreach ($lista as $item) { ?>
					<?php if (($agora >= $hora_inicio_cafe && $agora <= $hora_termino_cafe && $item['categoria_comida'] == 'cafe_manha') || 
						($agora >= $hora_inicio_almoco && $agora <= $hora_termino_almoco && $item['categoria_comida'] == 'almoco') || 
						($agora >= $hora_inicio_janta && $agora <= $hora_termino_janta && $item['categoria_comida'] == 'jantar')) { ?>
							<div class="col-6 mb-4">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title"><?=utf8_encode($item['nome_comida'])?></h5>

										<?php if (isset($_SESSION['logado']) || $_SESSION['logado'] == true) { ?>
											<?php if ($_SESSION['tp_usuario'] != 'administrador') { ?>
												<a href="finalizacaoCardapio.php?id=<?=$item['id_cardapio']?>" class="btn btn-danger col-md-12" name="btnPedir">Pedir agora</a>
											<?php } ?>

											<?php if ($_SESSION['tp_usuario'] == 'administrador') { ?>
												<a href="edicaoCardapio.php?id=<?=$item['id_cardapio']?>" class="btn btn-dark col-md-12 mt-3">Editar Cardápio</a>
											<?php } ?>
										<?php } ?>
									</div>
								</div>
							</div>
						<?php  } ?> 
					<?php } ?>
				</div>

				
			</div>
		</div>
	</div>

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