 <?php

 require_once"backends/edicaoPacotes.php";

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
 	<title>Edição de Pacote</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
 	<link rel="stylesheet" href="media/css/main.css">

 </head>
 <body style="background-color: rgb(235, 226, 225);">

 	<?php
 	require_once "header.php";
 	?>

 	<div class="row">
 		<div class="shadow " style="  background-color: #1a1818	!important;
 		background-image: url('media/images/food-pattern.png');
 		min-height: 100px; 
 		min-width: 100%; 
 		background-size: 30%; 
 		background-position: center 1050px;"> 
 		<div class="text-center my-5">
 			<h1 class="text-white mb-5">Edição de Pacote</h1>
 		</div> 
 	</div>
 </div>

 <div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
 	<div class="card" style="margin-right: auto; margin-left: auto;">
 		<div class="card-body" > 

 			<?php require_once"include/alerta.php"; ?>

 			<form class="col-sm" method="post" action="">

 				<h2><strong>Dados do Pacote</strong></h2>

 				<div class="form-row">
 					<div class="form-group col-md-12 mt-3">
 						<label for="nome_pacote"><strong>Nome do Pacote</strong></label>
 						<input type="text" class="form-control" name="nome_pacote" id="nome_pacote" placeholder="Ex: Basicão" value="<?=$resultadoPacote['nome_pacote']?>">
 					</div>
 				</div>

 				<div class="form-row">
 					<div class="form-group col-md-12 mt-3">
 						<label for="descricao_pacote"><strong>Descrição do Pacote</strong></label>
 						<input type="text" class="form-control" name="descricao_pacote" id="descricao_pacote" value="<?=$resultadoPacote['descricao_pacote']?>">
 					</div>
 				</div>

 				<div class="form-row">
 					<div class="form-group col-sm mt-3">
 						<label for="preco_pacote"><strong>Preço do Pacote</strong></label>
 						<input type="text" class="form-control" name="preco_pacote" id="preco_pacote" value="<?=$resultadoPacote['preco_pacote']?>">
 					</div>
 				</div>

 				<div class="form-row">
 					<div class="form-group col-sm mt-3">
 						<label for="quantidade"><strong>Quantidade de cafés da manhã</strong></label>
 						<input type="text" name="quantidade_cafe" id="quantidade" class="form-control" value="<?=$resultadoPacote['quantidade']?>"> 							
 					</div>
 				</div>
 				<div class="form-row">
 					<div class="form-group col-sm mt-3">
 						<label for="quantidade"><strong>Quantidade almoços</strong></label>
 						<input type="text" name="quantidade_almoco" id="quantidade" class="form-control" value="<?=$resultadoPacote['quantidade']?>"> 							
 					</div>
 				</div>
 				<div class="form-row">
 					<div class="form-group col-sm mt-3">
 						<label for="quantidade"><strong>Quantidade de jantares</strong></label>
 						<input type="text" name="quantidade_jantar" id="quantidade" class="form-control" value="<?=$resultadoPacote['quantidade']?>"> 							
 					</div>
 				</div>
 				
 				<?php if (empty($disabled)) { ?>
 					<button type="submit" class="btn btn-outline-secondary col-md-12 mt-3" name="btnEditar">Editar</button>
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

