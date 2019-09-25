<?php
require_once"backends/CadastroRestaurantes.php";

require_once"head.php";

require_once"include/verificacao_logado.php";

// Verificar se existe alerta via COOKIE
if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
	$alerta = unserialize($_COOKIE['alerta']);
	setcookie('alerta');
}
if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
  header('Location:erros.php?mesagem= Você  está logado e por isso não pode se cadastrar');

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Restaurantes</title>
	<meta charset="utf-8">
	<!-- link bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<link rel="stylesheet" href="media/css/main.css">

</head>
<body style="background-color: rgb(235, 226, 225);">

	<?php
	require_once "header.php";
	?>

	<div class="row">
		<div class="shadow " style="  background-color: #f2392c ;
		background-image: url('media/images/food-pattern.png');
		min-height: 100px; 
		min-width: 100%; 
		background-size: 30%; 
		background-position: center 1050px;" >
		<div class="text-center my-5">
			<h1 class="text-white mb-5">Cadastro de Restaurantes</h1>
		</div> 
	</div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
	<div class="card shadow" style="margin-right: auto; margin-left: auto;">
		<div class="card-body" >

			<?php require_once"include/alerta.php"; ?> 

			<form class="col-sm" method="post" action="">
				<h2 class="mb-3"><strong>Dados do Restaurante</strong></h2>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email"><strong>E-mail</strong></label>
						<input type="email" class="form-control" name="email" id="email">
					</div>
					<div class="form-group col-md-6">
						<label for="senha"><strong>Senha</strong></label>
						<input type="password" class="form-control" name="senha" id="senha">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6 mt-3">
						<label for="nome_restaurante"><strong>Nome do Restaurante</strong></label>
						<input type="text" class="form-control" name="nome_restaurante" id="nome_restaurante" placeholder="Ex: Canto do Chiquinho">
					</div>
					<div class="form-group col-md-6 mt-3">
						<label for="numero_telefone"><strong>Número de telefone</strong></label>
						<input type="text" class="form-control" name="numero_telefone" id="numero_telefone">
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
						<label for="dias_atendimento"><strong>Quais dias?</strong></label>
						<input type="text" class="form-control" name="dias_atendimento" id="dias_atendimento" placeholder="Segunda, Quarta e Sexta">
					</div>
				</div>
				<div class="form-group col-sm p-0">
					<label class="form-group col-md-12" for="avaliacao"><strong>Avaliação</strong></label>
					<select name="avaliacao" id="avaliacao" class="form-control">
						<option selected value="muito_bom">Muito bom</option>
						<option value="bom">Bom</option>
						<option value="mais_ou_menos">Mais ou menos</option>
						<option value="ruim">Ruim</option>
						<option value="pessimo">Péssimo</option>
					</select>
				</div>
				<div class="form-row">
					<div class="form-group col-sm mt-3">
						<label for="localizacao"><strong>Localização</strong></label>
						<input type="text" class="form-control" name="localizacao" id="localizacao">
					</div>
					<div class="form-group col-sm mt-3">
						<label for="estado"><strong>Estado</strong></label>
						<select name="estado" id="estado" class="form-control" >
							<option selected>SC</option>
						</select>
					</div>
				</div>
				<div class="form-group p-0">
					<label class="form-group col-md-12 mt-1 text-left" for="categoria"><strong>Categoria</strong></label>
					<select name="categoria" id="categoria" class="form-control" value="categoria" >
						<option selecte value="cafeteria">Cafeteria</option>
						<option value="panificadora">Panificadora</option>
						<option value="restaurante_buffet">Restaurante Buffet</option>
						<option value="marmitex">Marmitex</option>
						<option value="vegetariana">Vegetariana</option>
						<option value="pizzaria">Pizzaria</option>
						<option value="lanches_e_petiscos">Lanches e Petiscos</option>
					</select>
				</div>
				<?php if (empty($disabled)) { ?>
					<input type="submit" class="btn btn-dark col-md-12" name="btnCadastrar" value="Cadastrar">
				<?php } ?>
			</form>
		</div>
	</div>
</div>
</div>


<?php

//inclusão do rodapé
require_once "footer.php";
?>

<!-- scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
