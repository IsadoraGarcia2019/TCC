<?php

require_once"head.php";

require_once"include/conexao.php";

$lista = "SELECT * FROM pacotes";
$queryPacote = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryPacote, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Pacotes</title>
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
		<?php foreach ($lista as $item) { ?>

			<div class="col-md-4 col-10 offset-1 offset-md-0 mb-5 " style=" margin-top: -30px !important;">

				<div class="card shadow">

					<img src="media/images/<?=$item['nome_imagem']?>" class="card-img-top" style="max-height: 230px;">	

					<div class="card-body">

						<h5 class="card-title text-danger"><?=utf8_encode($item['nome_pacote'])?></h5>

						<p class="card-text"><?=utf8_encode($item['descricao_pacote'])?></p>

						<h5 class="text-danger text-center mb-3">O que está incluso?</h5>

						<div class="row">

							<?php if ($item['quantidade_cafe'] != 0) { ?>
								<div class="col-md-4 m-0" role="alert">

									<div class="alert alert-primary text-center">
										<img src="media/images/icone-cafe.png" style="max-height: 40px; margin-right: 7px;"><?=$item['quantidade_cafe']?><br>
									</div>
								</div>

							<?php } ?>

							<?php if ($item['quantidade_almoco'] != 0) { ?>
								<div class=" col-md-4 m-0" role="alert">

									<div class="alert alert-danger text-center">
										<img src="media/images/hamburger.png" style="max-height: 40px; margin-right: 7px;"><?=$item['quantidade_almoco']?><br>
									</div>
								</div>

							<?php } ?>

							<?php if ($item['quantidade_jantar'] != 0) { ?>
								<div class=" col-md-4 m-0" role="alert">

									<div class="alert alert-secondary text-center">
										<img src="media/images/pizza.png" style="max-height: 40px; margin-right: 10px; "><?=$item['quantidade_jantar']?>
									</div>
								</div>

							<?php } ?>

						</div>
						<a href="#" class="btn btn-outline-danger col-md-12"><?=$item['preco_pacote']?></a>
						<?php if ($_SESSION['nome_usuario'] == 'Administrador') { ?>
							<a href="edicaoPacotes.php?id=<?=$item['id']?>" class="btn btn-outline-dark col-md-12 mt-3"  >Editar Pacote</a>
						<?php } ?>
					</div>
				</div>
			</div>
		<?php } ?>
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