 <?php

 require_once"backends/edicaoRestaurante.php";

 require_once"backends/edicao.php";

 require_once"head.php";

 ?> 
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<title>Edição do meu restaurante</title>
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
 			<h1 class="text-white mb-5">Edição do meu restaurante</h1>
 		</div> 
 	</div>
 </div>

 <div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
 	<div class="card" style="margin-right: auto; margin-left: auto;">
 		<div class="card-body" > 

 			<form class="col-sm" method="post" action="">
 				<h2><strong>Dados do Restaurante</strong></h2>
 				<div class="form-row">
 					<div class="form-group col-md-6 mt-3">
 						<label for="nome_restaurante"><strong>Nome do Restaurante</strong></label>
 						<input type="text" class="form-control" name="nome_restaurante" id="nome_restaurante" placeholder="Ex: Canto do Chiquinho">
 					</div>
 					<div class="form-group col-md-6 mt-3">
 						<label for="telefone_restaurante"><strong>Número de telefone</strong></label>
 						<input type="text" class="form-control" name="telefone_restaurante" id="telefone_restaurante">
 					</div>
 				</div>
 				<div class="form-row">
 					<div class="form-group col-md-6 col-xs-12">
 						<label for="horario_atendimento"><strong>Horário de Atendimento</strong></label>
 						<select name="horario_atendimento" id="horario_atendimento" class="form-control">
 							<option selected>Segunda à Sexta</option>
 							<option >Segunda à Sábado</option>
 							<option >Segunda à Segunda</option>
 							<option >Terça à Sábado</option>
 							<option >Outros dias </option>
 						</select>
 					</div>
 					<div class="form-group col-md-6 col-xs-12">
 						<label for="dias_atendimento_restaurante"><strong>Quais dias?</strong></label>
 						<input type="text" class="form-control" name="dias_atendimento_restaurante" id="dias_atendimento_restaurante" placeholder="Segunda, Quarta e Sexta">
 					</div>
 				</div>
 				<div class="form-group col-sm p-0">
 					<label class="form-group col-md-12" for="avaliacao"><strong>Avaliação</strong></label>
 					<select name="avaliacao" id="avaliacao" class="form-control">
 						<option selected>Muito bom</option>
 						<option >Bom</option>
 						<option >Mais ou menos</option>
 						<option >Ruim</option>
 						<option >Péssimo</option>
 					</select>
 				</div>
 				<div class="form-row">
 					<div class="form-group col-sm mt-3">
 						<label for="localizacao_restaurante"><strong>Localização</strong></label>
 						<input type="text" class="form-control" name="localizacao_restaurante" id="localizacao_restaurante">
 					</div>
 					<div class="form-group col-sm mt-3">
 						<label for="estado_restaurante"><strong>Estado</strong></label>
 						<select name="estado_restaurante" id="estado_restaurante" class="form-control">
 							<option selected>SC</option>
 						</select>
 					</div>
 				</div>
 				<div class="form-group p-0">
 					<label class="form-group col-md-12 mt-1 text-left" for="categoria"><strong>Categoria</strong></label>
 					<select name="categoria" id="categoria" class="form-control">
 						<option selected>Cafeteria</option>
 						<option >Panificadora</option>
 						<option >Restaurante Buffet</option>
 						<option >Marmitex</option>
 						<option >Vegetariana</option>
 						<option >Pizzaria</option>
 						<option >Lanches e Petiscos</option>
 					</select>
 				</div>

 				<?php if (empty($disabled)) { ?>
 					<button type="submit" class="btn btn-outline-danger float-left mb-3 col-md-12 mt-3" name="btnExcluir">Excluir</button>
 				<?php } ?>
 				
 				<?php if (empty($disabled)) { ?>
 					<button type="submit" class="btn btn-outline-secondary col-md-12" name="btnEditar">Editar</button>
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

