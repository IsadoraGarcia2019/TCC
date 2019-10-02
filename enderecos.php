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
                    <?php require_once"include/alerta.php"; ?>
                </div>

                <?php if (count($lista) > 0) : ?>
                    <div class="col-md-12 mb-4">
                        <a href="CadastroEndereco.php" class="btn btn-success">
                            <i class="fas fa-plus p-2"></i>
                            Cadastrar novo endereço
                        </a>
                    </div>
                <?php endif; ?>

                <?php foreach ($lista as $item) { ?>

                 <div class="col-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <i class="fas fa-map-marker-alt mr-2 text-danger"></i>
                            <span class="font-weight-bold">
                                <?=strtoupper($item['local'])?>
                            </span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-text text-uppercase"><?=$item['rua']?> - <?=$item['bairro']?></h5>
                                    <p class="card-text pt-2"><?=$item['cidade']?> - <?=$item['estado']?></p>
                                </div>
                                <div class="col-4 text-right py-2">
                                    <a href="edicaoEndereco.php?id=<?=$item['id_endereco']?>" class="btn btn-primary">
                                        <i class="far fa-edit"></i>
                                        Editar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if (count($lista) <= 0) : ?>
                <div class="col-12 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-center mb-4">
                                    <h4 class="card-text">Nenhum endereço cadastrado =(</h4>
                                </div>
                                <div class="col-12 text-center">
                                    <a href="CadastroEndereco.php?id=<?=$item['id_endereco']?>" class="btn btn-success">
                                        <i class="fas fa-plus pr-2"></i>
                                        Cadastrar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
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

