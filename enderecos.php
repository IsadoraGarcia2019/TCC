 <?php


 require_once"head.php";

 require_once"include/conexao.php";

 $lista = "SELECT * FROM enderecos WHERE id_usuario = {$_SESSION['id_usuario']}

 ";
 $query = mysqli_query($con, $lista);
 $lista = mysqli_fetch_all($query, MYSQLI_ASSOC);



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
 	<title>Meus Endereços</title>
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
 			<h1 class="text-white mb-5 text-center mt-5">Meus Endereços</h1>
 		</div> 
 	</div>
 </div>

 <div class="row">

 	<div class="col-10 col-md-8 mt-5 offset-md-2 " style="margin-top: -30px !important; min-height: 300px;">
 		<div class="card shadow" style="margin-right: auto; margin-left: auto;">
 			<div class="card-body" > 

 				<div class="col-md-12">
 					<div class="alert alert-warning " role="alert">
 						Se deseja adicionar algum endereço <a href="CadastroEndereco.php" class="alert-link ml-5 ">Clique aqui</a>
 					</div>
 				</div>

 				<?php foreach ($lista as $item) { ?>
 					<div class=" col-md-12 col-12">
 						<div class="card border-secondary mb-3 " style="min-height: 100px;">

 							<h5 class="card-text text-dark text-center font-weight-bold mt-3"><i class="fas fa-map-marker-alt mr-2" style="color: red;"	></i><?=utf8_encode($item['local'])?></h5>

 							<div class="card-text text-secondary ml-3">Rua <?=utf8_encode($item['rua'])?></div>

 							<div class="card-text text-secondary ml-3">Bairro <?=utf8_encode($item['bairro'])?></div>

 							<div class="card-text text-secondary ml-3">Cidade <?=utf8_encode($item['cidade'])?></div>

 							<div class="card-text text-secondary ml-3 mb-4">Estado <?=utf8_encode($item['estado'])?></div>

 							<div class="row">
 								<a href="edicaoEndereco.php?id=<?=$item['id_endereco']?>" class="btn btn-dark col-md-6 offset-md-3 mb-3"><i class="far fa-edit"></i></a>
 							</div>
 						</div>
 					</div>

 				<?php } ?>
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

