<?php

require_once"head.php";

require_once"include/conexao.php";

$lista = "SELECT * FROM pacotes";
$queryPacote = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryPacote, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Meus pagamentos</title>
	<meta charset="utf-8">
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
			<h1 class="text-white mb-5 text-center mt-5">Meus pagamentos</h1>
		</div>
	</div>

	<div class="row">

		<?php foreach ($lista as $item) { ?>

		<table class="table table-borderless table-dark col-md-10 offset-md-1 mt-5">
			<thead>
				<tr>
					<th scope="col">Pacote</th>
					<th scope="col">Preço</th>
					<th scope="col">Data da compra</th>
					<th scope="col">Quantidade de café</th>
					<th scope="col">Quantidade de almoço</th>
					<th scope="col">Quantidade de jantar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="card-title text-danger"><?=utf8_encode($item['nome_pacote'])?></td>
					<td><?=$item['preco_pacote']?></td>
					<td>19/09/2019</td>
					<td><?=$item['quantidade_cafe']?></td>
					<td><?=$item['quantidade_almoco']?></td>
					<td><?=$item['quantidade_jantar']?></td>
				</tr>
		
			</tbody>
		</table>
	<?php } ?>
	</div>


	<?php

    //inclusão do rodapé
	require_once "footer.php";
	?>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>