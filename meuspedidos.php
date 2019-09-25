 <?php

 require_once"head.php";

 require_once"include/conexao.php";

//require_once"backends/meuspedidos.php";

 $lista = "SELECT * FROM finalizacao WHERE id_usuario = {$_SESSION['id_usuario']}";
 $queryFinalizacao = mysqli_query($con, $lista);
 $lista = mysqli_fetch_all($queryFinalizacao, MYSQLI_ASSOC);

 $lista2 = "SELECT * FROM pacotes";
 $queryPacotes = mysqli_query($con, $lista2);
 $lista2 = mysqli_fetch_all($queryPacotes, MYSQLI_ASSOC);

  // Verificar se existe alerta via COOKIE
 if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
 	$alerta = unserialize($_COOKIE['alerta']);
 	setcookie('alerta');
 }
 if (!isset($_SESSION['logado']) && $_SESSION['logado'] == false) {
 	header('Location:erros.php?mesagem= Você não está logado e por isso não pode vizualizar esta página!');


 } 
 if ($_SESSION['tp_usuario'] == 'restaurante') {
 	header('Location:erros.php?mesagem= Somente clientes podem vizualizar seus pedidos!');
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
 			<h1 class="text-white mb-5 text-center mt-5">Meus pedidos</h1>
 		</div> 
 	</div>
 </div>
 <div class="col-10 col-md-10 mt-5 offset-md- offset-1" style="margin-top: -30px !important;">
 	<div class="card shadow" style="margin-right: auto; margin-left: auto;">
 		<div class="card-body" > 


 			<table class="table table-light col-md-12 mt-3 table-striped table-hover">
 				<thead>
 					<tr>
 						<th scope="col">Id</th>
 						<th scope="col">Data da compra</th>
 						<th scope="col">Nome do pacote</th>
 						<th scope="col">Forma de pagamento</th>
 						<th scope="col">Status do pagamento</th>
 					</tr>
 				</thead>
 				<tbody>
 					<?php foreach ($lista as $item) { foreach ($lista2 as $item2) { ?>
 						<tr>

 							<td class="text-danger"><?=utf8_encode($_SESSION['id_usuario'])?></td>
 							<td><?=$item['data_compra']?></td>
 							<td><?=$item2['nome_pacote']?></td>
 							<td><?php if ($item['forma_pagamento'] == "dinheiro") { ?>
 							Dinheiro<?php } ?></td>
 							<td><?php if ($item['forma_pagamento'] == "boleto_bancario") { ?>
 							Boleto Bancário<?php } ?></td>
 							<td><?php if ($item['forma_pagamento'] == "cartao_credito") { ?>
 							Cartão de crédito<?php } ?></td>
 							<td><?php if ($item['forma_pagamento'] == "cartao_debito") { ?>
 							cartão de débito<?php } ?></td>
 							<td><?php if ($item['status_pagamento'] == "pendente") { ?>
 							Pendente<?php } ?></td>
 							<td><?php if ($item['status_pagamento'] == "pago") { ?>
 							Pago<?php } ?></td>
 							<td><?php if ($item['status_pagamento'] == "atrasado") { ?>
 							Atrasado<?php } ?></td> 




 						</tr>
 					<?php } }?>
 				</tbody>
 			</table>
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

