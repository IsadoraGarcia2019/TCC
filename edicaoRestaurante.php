 <?php

 require_once"backends/edicaoRestaurante.php";

 require_once"backends/edicao.php";

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
 		<div class="shadow topo" >
 		<div class="text-center my-5">
 			<h1 class="text-white mb-5">Edição do meu restaurante</h1>
 		</div> 
 	</div>
 </div>

 <div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
 	<div class="card" style="margin-right: auto; margin-left: auto;">
 		<div class="card-body" > 

 			<?php require_once"include/alerta.php"; ?>

 			<form class="col-sm" method="post" action="">
 				<h2><strong>Dados do Restaurante</strong></h2>
 				<div class="form-row">
 					<div class="form-group col-md-6 mt-3">
 						<label for="nome_restaurante"><strong>Nome do Restaurante</strong></label>
 						<input type="text" class="form-control" name="nome_restaurante" id="nome_restaurante" placeholder="Ex: Canto do Chiquinho" value="<?=$resultadoRestaurante['nome_restaurante']?>">
 					</div>
 					<div class="form-group col-md-6 mt-3">
 						<label for="telefone_restaurante"><strong>Número de telefone</strong></label>
 						<input type="text" class="form-control" name="telefone_restaurante" id="telefone_restaurante" value="<?=$resultadoRestaurante['numero_telefone']?>">
 					</div>
 				</div>
 				<div class="form-row">
 					<div class="form-group col-md-6 col-xs-12">
 						<label for="horario_atendimento"><strong>Horário de Atendimento</strong></label>
 						<select name="horario_atendimento" id="horario_atendimento" class="form-control" value="<?=$resultadoRestaurante['horario_atendimento']?>">
 							<option selected value="segunda_a_sexta"<?= ($resultadoRestaurante['horario_atendimento']=="segunda_a_sexta") ? 'selected' : ''?>>Segunda à Sexta</option>
 							<option value="segunda_a_sabado"<?= ($resultadoRestaurante['horario_atendimento']=="segunda_a_sabado") ? 'selected' : ''?>>Segunda à Sábado</option>
 							<option value="segunda_a_segunda" value="segunda_a_sabado"<?= ($resultadoRestaurante['horario_atendimento']=="segunda_a_segunda") ? 'selected' : ''?>>Segunda à Segunda</option>
 							<option value="terca_a_sabado" value="segunda_a_sabado"<?= ($resultadoRestaurante['horario_atendimento']=="terca_a_sabado") ? 'selected' : ''?>>Terça à Sábado</option>
 							<option value="outros_dias" value="segunda_a_sabado"<?= ($resultadoRestaurante['horario_atendimento']=="outros_dias") ? 'selected' : ''?>>Outros dias </option>
 						</select>
 					</div>
 					<div class="form-group col-md-6 col-xs-12">
 						<label for="dias_atendimento_restaurante"><strong>Quais dias?</strong></label>
 						<input type="text" class="form-control" name="dias_atendimento_restaurante" id="dias_atendimento_restaurante" placeholder="Segunda, Quarta e Sexta" value="<?=$resultadoRestaurante['dias_atendimento']?>">
 					</div>
 				</div>
 				<div class="form-group col-sm p-0">
 					<label class="form-group col-md-12" for="avaliacao"><strong>Avaliação</strong></label>
 					<select name="avaliacao" id="avaliacao" class="form-control" value="<?=$resultadoRestaurante['avaliacao']?>">
 						<option selected value="muito_bom" <?= ($resultadoRestaurante['avaliacao']=="muito_bom") ? 'selected' : ''?>>Muito bom</option>
 						<option  value="bom"  <?= ($resultadoRestaurante['avaliacao']=="bom") ? 'selected' : ''?>>Bom</option>
 						<option  value="mais_ou_menos"  <?= ($resultadoRestaurante['avaliacao']=="mais_ou_menos") ? 'selected' : ''?>>Mais ou menos</option>
 						<option  value="ruim"  <?= ($resultadoRestaurante['avaliacao']=="ruim") ? 'selected' : ''?>>Ruim</option>
 						<option  value="pessimo"  <?= ($resultadoRestaurante['avaliacao']=="pessimo") ? 'selected' : ''?>>Péssimo</option>
 					</select>
 				</div>
 				<div class="form-row">
 					<div class="form-group col-sm mt-3">
 						<label for="localizacao_restaurante"><strong>Localização</strong></label>
 						<input type="text" class="form-control" name="localizacao_restaurante" id="localizacao_restaurante" value="<?=$resultadoRestaurante['localizacao']?>">
 					</div>
 					<div class="form-group col-sm mt-3">
 						<label for="estado_restaurante"><strong>Estado</strong></label>
 						<select name="estado_restaurante" id="estado_restaurante" class="form-control" value="<?=$resultadoRestaurante['estado']?>">
 							<option selected>SC</option>
 						</select>
 					</div>
 				</div>
 				<div class="form-group p-0">
 					<label class="form-group col-md-12 mt-1 text-left" for="categoria"><strong>Categoria</strong></label>
 					<select name="categoria" id="categoria" class="form-control" value="<?=$resultadoRestaurante['categoria']?>">
 						<option selected value="cafeteria" <?= ($resultadoRestaurante['categoria']=="cafeteria") ? 'selected' : ''?>>Cafeteria</option>
 						<option value="panificadora" <?= ($resultadoRestaurante['categoria']=="panificadora") ? 'selected' : ''?>>Panificadora</option>
 						<option value="restaurante_buffet" <?= ($resultadoRestaurante['categoria']=="restaurante_buffet") ? 'selected' : ''?>>Restaurante Buffet</option>
 						<option value="marmitex" <?= ($resultadoRestaurante['categoria']=="marmitex") ? 'selected' : ''?>>Marmitex</option>
 						<option value="vegetariana" <?= ($resultadoRestaurante['categoria']=="vegetariana") ? 'selected' : ''?>>Vegetariana</option>
 						<option value="pizzaria" <?= ($resultadoRestaurante['categoria']=="pizzaria") ? 'selected' : ''?>>Pizzaria</option>
 						<option value="lanches_e_petiscos" <?= ($resultadoRestaurante['categoria']=="lanches_e_petiscos") ? 'selected' : ''?>>Lanches e Petiscos</option>
 					</select>
 				</div>
 				
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

