 <?php

 require_once"backends/edicaoVendas.php";

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
 	<title>Edição de Venda</title>
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
 			<h1 class="text-white mb-5">Edição de Venda</h1>
 		</div> 
 	</div>
 </div>

 <div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
 	<div class="card shadow" style="margin-right: auto; margin-left: auto;">
 		<div class="card-body" > 

 			<?php require_once"include/alerta.php"; ?>

 			<form class="col-sm" method="post" action="">

 				<h2><strong>Dados do Cliente</strong></h2>

 				<div class="form-row">
 					<div class="form-group col-md-12">
 						<label for="nome_cliente"><strong>Nome do Cliente</strong></label>
 						<input type="text" class="form-control" name="nome_cliente" id="nome_cliente" placeholder="Ex: Basicão" value="<?=utf8_encode($resultadoCliente['nome_cliente'])?>"<?=$disabled?>>
 					</div>
 				</div>

 				<div class="form-row">
 					<div class="form-group col-md-12">
 						<label for="email_cliente"><strong>E-mail do Cliente</strong></label>
 						<input type="text" class="form-control" name="email_cliente" id="email_cliente" value="<?=$resultadoCliente['email_cliente']?>"<?=$disabled?>> 
 					</div>
 				</div>

 				<div class="form-row">
 					<div class="form-group col-sm">
 						<label for="preco_pacote"><strong>Preço do Pacote</strong></label>
 						<input type="text" class="form-control" name="preco_pacote" id="preco_pacote" value="<?=$resultadoPacote['preco_pacote']?>"<?=$disabled?>>
 					</div>
 				</div>

 				<div class="form-row">
 					<div class="form-group col-sm">
 						<label for="rua_cliente"><strong>Endereço do Cliente</strong></label>
 						<input type="text" name="rua" id="rua_cliente" class="form-control" value="<?=$resultadoCliente['rua']?>"<?=$disabled?>> 							
 					</div>
 				</div>
 				<div class="form-row">
 					<div class="form-group col-sm">
 						<label for="cidade_cliente"><strong>Cidade do Cliente</strong></label>
 						<input type="text" name="cidade" id="cidade_cliente" class="form-control" value="<?=$resultadoCliente['cidade']?>"<?=$disabled?>> 							
 					</div>
 				</div>
 				<div class="form-row">
 					<div class="form-group col-sm">
 						<label for="estado_cliente"><strong>Estado do Cliente</strong></label>
 						<input type="text" name="estado" id="estado_cliente" class="form-control" value="<?=$resultadoCliente['estado']?>"<?=$disabled?>> 							
 					</div>
 				</div>

 				<div class="form-row">
 					<div class="form-group col-sm">
 						<label for="forma_pagamento"><strong>Forma de Pagamento</strong></label>
 						<input type="text" name="forma_pagamento" id="forma_pagamento" class="form-control" value="<?=$resultadoFinalizacao['forma_pagamento']?>"> 							
 					</div>
 				</div>
 				
 					<div class="form-row">
 					<div class="form-group col-sm">
 						<label for="status_pagamento"><strong>Estado do Pagamento</strong></label>
 						<input type="text" name="status_pagamento" id="status_pagamento" class="form-control" value="<?=$resultadoFinalizacao['status_pagamento']?>"> 							
 					</div>
 				</div>
 					<button type="submit" class="btn btn-outline-secondary col-md-12 col-12 mt-3" name="btnEditar">Editar</button>
 					<button type="submit" class="btn btn-outline-danger col-md-12 col-12 mt-3" name="btnExcluir">Excluir</button>
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

