<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro Empresa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body style="background-image: url('media/images/img-fundo.jpg');
background-size: 100%;
background-repeat: no-repeat;
background-attachment: scroll;">

<div class="card col-md-6 offset-3 mt-5">
	<div class="card-body"> 
		<h1>Cadastro de Empresa</h1>
		<br>
		<form>
			<div class="form-group">
				<label for="nome_empresa">Nome da empresa</label>
				<input type="text" class="form-control" id="nome_empresa">
			</div>
			<div class="form-group">
				<label for="CNPJ">CNPJ</label>
				<input type="text" class="form-control" id="CNPJ">
			</div>
			<div class="form-group">
				<label for="numero_funcionarios">Número de Funcionários</label>
				<input type="number" class="form-control" id="numero_funcionarios">
			</div>
			<div class="form-group">
				<label for="horario_empresa">Horário</label>
				<select id="horario_empresa" class="form-control">
					<option selected>-</option>
					<option>Matutino</option>
					<option>Vespertino</option>
					<option>Noturno</option>
				</select>
				<br>
				<div class="form-group">
					<label for="tipo_empresa">Tipo da empresa</label>
					<select id="tipo_empresa" class="form-control">
						<option selected>-</option>
						<option>Sociedade Empresária Limitada (Ltda.)</option>
						<option>Empresa individual</option>
						<option>Empresa Individual de Responsabilidade Limitada (Eireli)</option>
						<option>Microempreendedor Indivual (MEI)</option>
						<option>Sociedade Simples (SS)</option>
						<option>Sociedade Anônima (SA)</option>
					</select>
				</div>
						<div class="form-group">
							<label for="telefone_cliente">Número de telefone</label>
							<input type="text" class="form-control" id="telefone_cliente">
						</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="cidade_empresa">Cidade</label>
						<input type="text" class="form-control" id="cidade_empresa" placeholder="Ex: Gaspar">
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="rua_empresa">Rua</label>
							<input type="text" class="form-control" id="rua_empresa" placeholder="Ex: Rua Sábia 179">
						</div>
						<div class="form-group">
							<label for="estado_empresa">Estado</label>
							<select id="estado_empresa" class="form-control">
								<option selected>SC</option>
							</select>
						</div>
					</div>
					<button type="submit" class="btn btn-outline-secondary mr-2">Cadastrar</button>
					<button type="submit" class="btn btn-outline-danger">Excluir</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

<?php

//inclusão do header
require_once "footer.php";
?>