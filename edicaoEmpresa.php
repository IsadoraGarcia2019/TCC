 <?php

 require_once"backends/edicaoEmpresa.php";

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
 	<title>Edição da minha Empresa</title>
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
 			<?php Site::navbar(); ?>
 			<div class="text-center my-5">
 				<h1 class="text-white mb-5">Edição da minha empresa</h1>
 			</div> 
 		</div>
 	</div>

 	<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -20px !important;">

 		<div class="card" style="margin-right: auto; margin-left: auto;">
 			<div class="card-body" > 

 				<?php require_once"include/alerta.php"; ?>

 				<form method="post" action="">
 					<h2><strong>Dados da Empresa</strong></h2>
 					<div class="form-group mt-3">
 						<label for="nome_empresa"><strong>Nome da empresa</strong></label>
 						<input type="text" class="form-control" id="nome_empresa" name="nome_empresa" value="<?=$resultadoEmpresa['nome_empresa']?>">
 					</div>
 					<div class="form-group">
 						<label for="CNPJ"><strong>CNPJ</strong></label>
 						<input type="text" class="form-control" id="CNPJ" name="cnpj" value="<?=$resultadoEmpresa['CNPJ']?>">
 					</div>
 					<div class="form-group">
 						<label for="numero_funcionarios"><strong>Número de Funcionários</strong></label>
 						<input type="number" class="form-control" id="numero_funcionarios" name="numero_funcionarios" value="<?=$resultadoEmpresa['numero_funcionarios']?>">
 					</div>
 					<div class="form-group">
 						<label for="horario_empresa"><strong>Horário</strong></label>
 						<select id="horario_empresa" name="turno" class="form-control" value="<?=$resultadoEmpresa['turno']?>">
 							<option selected value="matutino" <?= ($resultadoEmpresa['turno']=="matutino") ? 'selected' : ''?>>Matutino</option>
 							<option value="vespertino" <?= ($resultadoEmpresa['turno']=="vespertino") ? 'selected' : ''?>>Vespertino</option>
 							<option value="noturno" <?= ($resultadoEmpresa['turno']=="noturno") ? 'selected' : ''?>>Noturno</option>
 						</select>
 					</div>
 					<div class="form-group">
 						<label for="tipo_empresa"><strong>Tipo da empresa</strong></label>
 						<select id="tipo_empresa" name="tipo_empresa" class="form-control"  value="<?=$resultadoEmpresa['tipo_empresa']?>">
 							<option selected>-</option>
 							<option value="SociedadeEmpresariaLimitada" <?= ($resultadoEmpresa['tipo_empresa']=="SociedadeEmpresariaLimitada") ? 'selected' : ''?>>Sociedade Empresária Limitada (Ltda.)</option>
 							<option value="EmpresaIndividual" <?= ($resultadoEmpresa['tipo_empresa']=="EmpresaIndividual") ? 'selected' : ''?>>Empresa individual</option>
 							<option value="EmpresaIndividualDeResponsabilidadeLimitada" <?= ($resultadoEmpresa['tipo_empresa']=="EmpresaIndividualDeResponsabilidadeLimitada") ? 'selected' : ''?>>Empresa Individual de Responsabilidade Limitada (Eireli)</option>
 							<option value="MicroempreendedorIndivual" <?= ($resultadoEmpresa['tipo_empresa']=="MicroempreendedorIndivual") ? 'selected' : ''?>>Microempreendedor Indivual (MEI)</option>
 							<option value="SociedadeSimples" <?= ($resultadoEmpresa['tipo_empresa']=="SociedadeSimples") ? 'selected' : ''?>>Sociedade Simples (SS)</option>
 							<option value="SociedadeAnonima" <?= ($resultadoEmpresa['tipo_empresa']=="SociedadeAnonima") ? 'selected' : ''?>>Sociedade Anônima (SA)</option>
 						</select>
 					</div>
 					<div class="form-group">
 						<label for="telefone_cliente"><strong>Número de telefone</strong></label>
 						<input type="text" class="form-control" id="telefone_cliente" name="numero_empresa" value="<?=$resultadoEmpresa['numero_empresa']?>">
 					</div>
 					<div class="form-group">
 						<div class="form-group">
 							<label for="cidade_empresa"><strong>Cidade</strong></label>
 							<input type="text" class="form-control" id="cidade_empresa" name="cidade_empresa" placeholder="Ex: Gaspar" value="<?=$resultadoEmpresa['cidade_empresa']?>">
 						</div>
 					</div>
 					<div class="form-group">
 						<div class="form-group">
 							<label for="rua_empresa"><strong>Rua</strong></label>
 							<input type="text" class="form-control" id="rua_empresa" name="rua_empresa" placeholder="Ex: Rua Sábia 179" value="<?=$resultadoEmpresa['rua_empresa']?>">
 						</div>
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

