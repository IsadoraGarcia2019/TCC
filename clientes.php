 <?php

 require_once"head.php";

 require_once"include/conexao.php";

 $lista = "SELECT * FROM clientes";
 $query = mysqli_query($con, $lista);
 $lista = mysqli_fetch_all($query, MYSQLI_ASSOC);

  // Verificar se existe alerta via COOKIE
 if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
 	$alerta = unserialize($_COOKIE['alerta']);
 	setcookie('alerta');
 }
 if ($_SESSION['tp_usuario'] != 'administrador') {
 	header('Location:erros.php?mesagem= Somente o administrador pode ter acesso à essa página!');
 }
 ?> 
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<title>Clientes</title>
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
 			<h1 class="text-white mb-5 text-center mt-5">Listagem de Clientes</h1>

 		</div> 
 	</div>
 </div>

 <div class="row">

 	<div class="col-10 col-md-10 mt-5 offset-md-1 " style="margin-top: -30px !important; min-height: 300px;">
 		<div class="card shadow" style="margin-right: auto; margin-left: auto;">
 			<div class="card-body" > 

 				<table class="table table-light col-md-12 mt-3 table-striped table-hover">
 					<thead>
 						<tr>
 							<th scope="col">Id Cliente</th>
 							<th scope="col">Nome do cliente</th>
 							<th scope="col">Número de telefone</th>
 							<th scope="col">Restrição alimentar</th>
 							<th scope="col">Comentários</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php foreach ($lista as $item) { ?>
 							<tr>
 								<td class="text-danger"><?=utf8_encode($item['id'])?></td>

 								<td class="text-uppercase"><?=utf8_encode($item['nome_cliente'])?></td>

 								<td><?=utf8_encode($item['numero_telefone'])?></td>

 								<td class="text-uppercase text-danger"><?=utf8_encode($item['restricao_alimentar'])?></td>

 								<td><?=utf8_encode($item['comentarios'])?></td>
 							</tr>
 						<?php } ?>
 					</tbody>
 				</table>
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

