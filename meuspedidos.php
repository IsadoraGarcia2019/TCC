 <?php

 require_once"head.php";

 require_once"include/conexao.php";

 require_once"backends/meuspedidos.php";

 $lista = "SELECT * FROM finalizacao";
 $queryFinalizacao = mysqli_query($con, $lista);
 $lista = mysqli_fetch_all($queryFinalizacao, MYSQLI_ASSOC);

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
 		<div class="shadow " style="background-color: #1a1818 !important; background-image: url('media/images/food-pattern.png');min-height: 100px; min-width: 100%; background-size: 30%; background-position: center 1050px;"> 
 			<div class="text-center my-5">
 				<h1 class="text-white mb-5">Meus pedidos</h1>
 			</div> 
 		</div>
 	</div>

 	<table class="table table-dark col-md-10 offset-md-1 mt-5" style="background-color: rgba(47, 47, 47);">
 		<thead>
 			<tr>
 				<th scope="col">Id</th>
 				<th scope="col">Data da compra</th>
 				<th scope="col">Id do pacote</th>
 				<th scope="col">Forma de pagamento</th>
 				<th scope="col">Status do pagamento</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php foreach ($lista as $item) { ?>
 				<tr>
 					<td class=" text-danger"><?=utf8_encode($item['id_usuario'])?></td>
 					<td><?=$item['data_compra']?></td>
 					<td><?=$item['id_pacote']?></td>
 					<td><?=$item['forma_pagamento']?></td>
 					<td><?=$item['status_pagamento']?></td>
 				<?php } ?>
 			</tr>
 		</tbody>
 	</table>

 	<?php
//INCLUSÃO DO RODAPÉ
 	require_once "footer.php";
 	?>

 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </body>

 </html>

