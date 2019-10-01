 <?php


 require_once"head.php";

 require_once"include/conexao.php";

//require_once"backends/meuspedidos.php";

 $lista = "SELECT * FROM finalizacao
 JOIN pacotes p ON p.id = finalizacao.id_pacote
 WHERE id_usuario = {$_SESSION['id_usuario']}

 ";
 $queryFinalizacao = mysqli_query($con, $lista);
 $lista = mysqli_fetch_all($queryFinalizacao, MYSQLI_ASSOC);


 // $lista2 = "SELECT * FROM clientes
 // JOIN pacotes p ON p.quantidade_cafe = clientes.saldo_cafe
 // JOIN pacotes p ON p.quantidade_almoco = clientes.saldo_almoco
 // JOIN pacotes p ON p.quantidade_jantar = clientes.saldo_jantar
 // WHERE id_usuario = {$_SESSION['id_usuario']}

 // ";
 // $querySaldo = mysqli_query($con, $lista2);
 // $lista2 = mysqli_fetch_all($querySaldo, MYSQLI_ASSOC);


  // Verificar se existe alerta via COOKIE
 if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
 	$alerta = unserialize($_COOKIE['alerta']);
 	setcookie('alerta');
 }
 if (!isset($_SESSION['logado']) && $_SESSION['logado'] == false) {
 	header('Location:erros.php?mesagem= Você não está logado e por isso não pode vizualizar esta página!');


 }
 ?> 
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<title>Meus pedidos</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
 	<link rel="stylesheet" href="media/css/main.css">

 </head>
 <body style="background-color: rgb(235, 226, 225);">

 	<?php
 	require_once "header.php";
 	?>

 	<div class="row">
 		<div class="shadow " style="  background-color: #f2392c ;background-image: url('media/images/food-pattern.png');min-height: 100px; min-width: 100%; background-size: 30%; background-position: center 1050px;">
 		</div> 
 	</div>
 </div>

 <div class="row">

 	<div class="col-10 col-md-7 mt-5 offset-md-1 " style="margin-top: -30px !important; min-height: 300px;">
 		<div class="card shadow" style="margin-right: auto; margin-left: auto;">
 			<div class="card-body" > 

 				<h2 class="mb-3 mt-3 text-center" style="color: #de2828;">Minhas Assinaturas</h2>

 				<table class="table table-light col-md-12 mt-3 table-striped table-hover">
 					<thead>
 						<tr>
 							<th scope="col">Data da compra</th>
 							<th scope="col">Nome do pacote</th>
 							<!-- <th scope="col">Saldo do pacote</th> -->
 							<th scope="col">Forma de pagamento</th>
 							<th scope="col">Status do pagamento</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php foreach ($lista as $item) { ?>
 							<tr>

 								<td><?php echo date_format(date_create($item['data_compra']), 'd/m/y H:i:s'); ?></td>


 								<td><?=utf8_encode($item['nome_pacote'])?></td>
 								<td>
 									<?php switch ($item['forma_pagamento']) { 
 										case "dinheiro":
 										echo '<i class="far fa-money-bill-alt text-success mr-3"></i>';
 										echo "Dinheiro";
 										break;
 										case "boleto_bancario":
 										echo '<i class="fas fa-money-check-alt text-primary mr-3"></i>';
 										echo "Boleto Bancário";
 										break;
 										case "cartao_credito":
 										echo '<i class="fas fa-credit-card text-danger mr-3"></i>';
 										echo "Cartão de Crédito";
 										break;
 										case "cartao_debito":
 										echo '<i class="fas fa-credit-card text-secondary mr-3"></i>';
 										echo "Cartão de Débito";
 										break;
 									}
 									?>
 								</td>
 								<td>
 									<?php switch ($item['status_pagamento']) { 
 										case "pendente":
 										echo "<span class='text-warning font-italic'>Pendente</span>";
 										break;
 										case "pago":
 										echo "<span class='text-success font-italic'>Pago</span>";
 										break;
 										case "atrasado":
 										echo "<span class='text-danger font-italic'>Atrasado</span>";
 										break;
 									}
 									?>
 								</td> 
 							</tr>
 						<?php } ?>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 	<div class="col-10 col-md-3 mt-5 " style="margin-top: -30px !important;">
 		<div class="card shadow" style="margin-right: auto; margin-left: auto;">
 			<div class="card-body" > 

 				<h2 class="mb-3 mt-3 text-center" style="color: #de2828;">Meus Saldos</h2>

 				<?php foreach ($lista as $item) { ?>
 					
 					<?php if ($item['quantidade_cafe'] != 0) { ?>
 						<div class="col-12 m-0" role="alert">
 							<div class="alert alert-primary text-center">
 								<img src="media/images/icone-cafe.png" style="max-height: 40px; margin-right: 7px;"><?=$item['saldo_cafe']?><br>
 							</div>
 						</div>
 					<?php } ?>
 				
 					<?php if ($item['quantidade_almoco'] != 0) { ?>
 						<div class=" col-12 m-0" role="alert">
 							<div class="alert alert-danger text-center">
 								<img src="media/images/hamburger.png" style="max-height: 40px; margin-right: 7px;"><?=$item['saldo_almoco']?><br>
 							</div>
 						</div>
 					<?php } ?>
 					
 					<?php if ($item['quantidade_jantar'] != 0) { ?>
 						<div class=" col-12 m-0" role="alert">
 							<div class="alert alert-secondary text-center">
 								<img src="media/images/pizza.png" style="max-height: 40px; margin-right: 10px; "><?=$item['saldo_jantar']?>
 							</div>
 						</div>
 					<?php } ?>
 				<?php 	} ?>
 			</div>
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

