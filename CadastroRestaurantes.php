<?php

//arrumar esta merda
includeonce "header.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Restaurantes</title>
	<meta charset="utf-8">
	<!-- link bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body style="background-image: url('media/images/img-fundo.jpg');
	background-size: 100%;
	background-repeat: no-repeat;
	background-attachment: scroll;">

	<div class="card col-10 xs-6 col-md-6 mt-5" style="margin-right: auto; margin-left: auto;">
		<div class="card-body pr-2">
			<h1 class="card-title">Cadastro de Restaurantes</h1>
			<form class="col-sm">
				<div class="form-row">
					<div class="form-group col-sm mt-3">
						<label for="nome_restaurante"><strong>Nome do Restaurante</strong></label>
						<input type="text" class="form-control" id="nome_restaurante" placeholder="Ex: Canto do Chiquinho">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm col-xs-12">
						<label for="horario_atendimento"><strong>Horário de Atendimento</strong></label>
						<select id="horario_atendimento" class="form-control">
							<option selected>Segunda à Sexta</option>
							<option >Segunda à Sábado</option>
							<option >Segunda à Segunda</option>
							<option >Terça à Sábado</option>
							<option >Outros dias </option>
						</select>
					</div>
					<div class="form-group col-sm col-xs-12">
						<label for="dias_atendimento_restaurante"><strong>Quais dias?</strong></label>
						<input type="text" class="form-control" id="dias_atendimento_restaurante" placeholder="Segunda, Quarta e Sexta">
					</div>
				</div>
				<div class="form-group col-sm p-0">
					<legend class="col-form-label col-sm-2 p-0"><strong>Avaliação</strong></legend>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="estrelas" id="estrelas1" value="option1" checked>
						<label class="form-check-label" for="estrelas1">
							De 0 à 2 estrelas
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="estrelas" id="estrelas2" value="option2">
						<label class="form-check-label" for="estrelas2">
							De 2 à 4 estrelas
						</label>
					</div>
					<div class="form-check disabled">
						<input class="form-check-input" type="radio" name="estrelas" id="estrelas3" value="option3">
						<label class="form-check-label" for="estrelas3">
							De 4 à 5 estrelas
						</label>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-sm">
						<label for="localizacao_restaurante"><strong>Localização</strong></label>
						<input type="text" class="form-control" id="localizacao_restaurante">
					</div>
					<div class="form-group col-sm">
						<label for="estado_restaurante"><strong>Estado</strong></label>
						<select id="estado_restaurante" class="form-control">
							<option selected>SC</option>
						</select>
					</div>
				</div>
				<button type="submit" class="btn btn-outline-secondary mr-2">Cadastrar</button>
				<button type="submit" class="btn btn-outline-danger">Excluir</button>
			</form>
		</div>
	</div>


	<!-- scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>