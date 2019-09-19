<?php

require_once"head.php";

require_once"include/conexao.php";

$lista = "SELECT * FROM finalizacao";
$queryVendas = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryVendas, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Vendas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<link rel="stylesheet" href="media/css/main.css">
</head>
<body style="background-color: rgb(235, 226, 225);">

	<?php
	require_once "header.php";
	?>

	<div class="row">
		<div class="shadow" style="  background-color: #f2392c ;
		background-image: url('media/images/food-pattern.png');
		min-height: 100px; 
		min-width: 100%; 
		background-size: 30%; 
		background-position: center 1050px;">
		<div class="text-center my-5" >
			<h1 class="text-white pt-3 ">Vendas</h1>
		</div> 
	</div>
</div>

<div class="container">
	<div class="row">
		<?php foreach ($lista as $item) { ?>

			<div class="col-md-4 col-10 offset-1 offset-md-0 mb-5 " style=" margin-top: -30px !important;">

				<div class="card shadow">

					<div class="card-body">

						<h5 class="card-title text-danger"><?=utf8_encode($item['nome_cliente'])?></h5>

						<p class="card-text"><?=utf8_encode($item['email_cliente'])?></p>
						<p class="card-text"><?=utf8_encode($item['rua'])?></p>
						<p class="card-text"><?=utf8_encode($item['cidade'])?></p>
						<p class="card-text"><?=utf8_encode($item['estado'])?></p>

						<h5 class="text-danger text-center mb-3"><?=utf8_encode($item['forma_pagamento'])?></h5>

						<div class="row">

							<div class="alert alert-danger text-center"><?=utf8_encode($item['status_pagamento'])?></div>
						</div>

					</div>

					<?php if ($_SESSION['nome_usuario'] == 'Administrador') { ?>
						<a href="edicaoVendas.php?id=<?=$item['id']?>" class="btn btn-outline-dark col-md-12 mt-3">Editar Venda</a>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
</div>		

</div>

<?php

//inclusão do header
require_once "footer.php";
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>