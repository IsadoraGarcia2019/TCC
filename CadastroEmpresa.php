<?php

require_once"backends/CadastroEmpresa.php";

require_once"head.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cadastro Empresas</title>
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
			<h1 class="text-white mb-5">Cadastro de Empresas</h1>
		</div> 
	</div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">

	<div class="card" style="margin-right: auto; margin-left: auto;">
		<div class="card-body" > 
			
			<form method="post" action="">
				<h2 class="mb-3"><strong>Dados da Empresa</strong></h2>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="email"><strong>E-mail</strong></label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group col-sm">
						<label for="senha"><strong>Senha</strong></label>
						<input type="password" class="form-control" id="senha" name="senha">
					</div>
				</div>
				<div class="form-group">
					<label for="nome_empresa"><strong>Nome da empresa</strong></label>
					<input type="text" class="form-control" id="nome_empresa" name="nome_empresa">
				</div>
				<div class="form-group">
					<label for="CNPJ"><strong>CNPJ</strong></label>
					<input type="text" class="form-control" id="CNPJ" name="cnpj">
				</div>
				<div class="form-group">
					<label for="numero_funcionarios"><strong>Número de Funcionários</strong></label>
					<input type="number" class="form-control" id="numero_funcionarios" name="numero_funcionarios">
				</div>
				<div class="form-group">
					<label for="horario_empresa"><strong>Horário</strong></label>
					<select id="horario_empresa" name="turno" class="form-control">
						<option selected>-</option>
						<option>Matutino</option>
						<option>Vespertino</option>
						<option>Noturno</option>
					</select>
				</div>
				<div class="form-group">
					<label for="tipo_empresa"><strong>Tipo da empresa</strong></label>
					<select id="tipo_empresa" name="tipo_empresa" class="form-control">
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
					<label for="telefone_cliente"><strong>Número de telefone</strong></label>
					<input type="text" class="form-control" id="telefone_cliente" name="numero_empresa">
				</div>
				<div class="form-group">
					<div class="form-group">
						<label for="cidade_empresa"><strong>Cidade</strong></label>
						<input type="text" class="form-control" id="cidade_empresa" name="cidade_empresa" placeholder="Ex: Gaspar">
					</div>
				</div>
				<div class="form-group">
					<div class="form-group">
						<label for="rua_empresa"><strong>Rua</strong></label>
						<input type="text" class="form-control" id="rua_empresa" name="rua_empresa" placeholder="Ex: Rua Sábia 179">
					</div>
				</div>				
				<?php if (empty($disabled)) { ?>
					<button type="submit" class="btn btn-outline-secondary col-md-12" name="btnCadastrar">Cadastrar</button>
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

