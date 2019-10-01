<?php

require_once"head.php";
//CHAMANDO O ARQUIVO DE FUNÇÕES
require_once"funcoes.php";


//RECEBER AS INFORMAÇÕES DO FORMULÁRIO
if (isset($_POST['enviar'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	// $corpo = "<h1>Obrigado pelo seu contato $nome </h1>";
	// $corpo .= "<p>Assim que possível retornaremos sua mensagem. Mensagem enviada: </p>";
	$corpo .= "<p>$mensagem</p>";

	$envio = enviar_email('deliiverycheff@gmail.com', $email, $nome, 'Contato no site - Cheff Delivery', $corpo);

	if ($envio == true) {
		echo "Contato enviado com sucesso!";
	} else {
		echo "Erro ao enviar Contato :( <br>";
		echo $envio;
	}

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Contato</title>
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
			<h1 class="text-white mb-5 text-center mt-5">Contato</h1>
		</div> 
	</div>
</div>
<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
	<div class="card shadow" style="margin-right: auto; margin-left: auto;">
		<div class="card-body" > 
			<form method="post" action="">
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="nome"><strong>Nome</strong></label>
						<input type="text" class="form-control" id="nome" placeholder="Ex: Fulano" value="<?=$_SESSION['nome_usuario']?>">
					</div>
					<div class="form-group col-md-6">
						<label for="email"><strong>E-mail</strong></label>
						<input type="email" class="form-control" id="email" name="email" placeholder="Ex: fulano@provedor.com" value="<?=$_SESSION['email']?>">
						<small class="ml-2">Certifique-se que seu e-mail é válido :)</small>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label for="mensagem"><strong>Mensagem</strong></label>
						<textarea class="form-control" id="mensagem" name="mensagem" rows="3"></textarea>
					</div>
				</div>
				<input type="submit" class="btn btn-dark col-md-12" name="enivar" value="Enviar">
			</form>
		</div>
	</div>
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