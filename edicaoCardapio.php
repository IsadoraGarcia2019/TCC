 <?php

 require_once"backends/edicaoCardapio.php";

 require_once"head.php";

 // Verificar se existe alerta via COOKIE
 if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
 	$alerta = unserialize($_COOKIE['alerta']);
 	setcookie('alerta');
 }

 ?> 
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<title>Edição de Cardápio do dia </title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
 	<link rel="stylesheet" href="media/css/main.css">

 </head>
 <body style="background-color: rgb(235, 226, 225);">

 	<?php
 	require_once "header.php";
 	?>

 	<div class="row">
 		<div style="background-image: url('media/images/food-pattern.png'); background-color: #f13d3d; min-height: 100px; min-width: 100%;  background-size: 30%;   background-position: center 1050px;
 		" class="shadow" >
 		<div class="text-center my-5">
 			<h1 class="text-white mb-5">Edição de Cardápio do dia</h1>
 		</div> 
 	</div>
 </div>

 <div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
 	<div class="card" style="margin-right: auto; margin-left: auto;">
 		<div class="card-body" > 

 			<?php require_once"include/alerta.php"; ?>

 			<form class="col-sm" method="post" action="">

 				<h2 class="mb-3"><strong>Dados do Cardápio</strong></h2>

 				<div class="form-row">
 					<div class="form-group col-md-12 mt-3">
 						<label for="nome_comida"><strong>Nome da Comida</strong></label>
 						<input type="text" class="form-control" name="nome_comida" id="nome_comida" value="<?=$resultadoCardapio['nome_comida']?>">
 					</div>
 				</div>

 				<div class="form-row">
 					<label class="form-group col-md-12 mt-1 text-left" for="categoria_comida"><strong>Categoria da Comida</strong></label>
 					<select name="categoria_comida" id="categoria_comida" class="form-control" value="<?=$resultadoCardapio['categoria_comida']?>">
 						<option selected value="cafe_manha" <?= ($resultadoCardapio['categoria_comida']=="cafe_manha") ? 'selected' : ''?>> Café da manhã</option>
 						<option value="almoco" <?= ($resultadoCardapio['categoria_comida']=="almoco") ? 'selected' : ''?>> Almoço</option>
 						<option value="jantar" <?= ($resultadoCardapio['categoria_comida']=="jantar") ? 'selected' : ''?>> Jantar</option>
 					</select>
 				</div>
 				
 				<?php if (empty($disabled)) { ?>
 					<div class="form-row">
 						<button type="submit" class="btn btn-outline-secondary col-md-12 mt-3" name="btnEditar">Editar</button>
 					</div>
 				<?php } ?>
 			</form>
 		</div>
 	</div>
 </div>

 <?php
//INCLUSÃO DO RODAPÉ
 require_once "footer.php";
 ?>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

