<?php

require_once"head.php";

// require_once"backends/finalizacaoCardapio.php";

$lista = "SELECT * FROM cardapio_dia WHERE id_cardapio = $id";
$queryPacote = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryPacote, MYSQLI_ASSOC);

$lista2 = "SELECT * FROM enderecos WHERE id_endereco = $id";
$queryPacote = mysqli_query($con, $lista2);
$lista2 = mysqli_fetch_all($queryPacote, MYSQLI_ASSOC);

// Verificar se existe alerta via COOKIE
if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
  $alerta = unserialize($_COOKIE['alerta']);
  setcookie('alerta');
}

if (!isset($_SESSION['logado']) && $_SESSION['logado'] == false) {
  header('Location:erros.php?mesagem= Você não está logado e por isso não pode acessar essa página!');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Finalização Cardápio</title>
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="media/css/main.css">
</head>

<body style="background-color: rgb(235, 226, 225);">

  <?php require_once "header.php"; ?>

  <div class="row">
    <div class="shadow " style="  background-color: #f2392c ;
    background-image: url('media/images/food-pattern.png');
    min-height: 100px; 
    min-width: 100%; 
    background-size: 30%; 
    background-position: center 1050px;" >
    <div class="text-center my-5">
      <h1 class="text-white mb-5" style="font-size: 35px;">Finalização Cardápio</h1>
    </div> 
  </div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
  <div class="card shadow">
    <div class="card-body" >

      <?php require_once "include/alerta.php"; ?>

      <form id="cadform" name="cadform" method="post" action="" onsubmit="return validaCampo();">

        <h2 class="mb-3 mt-3" style="color: #de2828;">Dados do pedido</h2>
        
        <?php foreach ($lista as $item) { ?>

          <h3 class="nome_comida mb-3 text-center"><?=utf8_encode($item['nome_comida'])?></h3>

          <p class="font-italic" style="font-size: 17px;"><?=utf8_encode($item['categoria_comida'])?></p>

        <?php } ?>
        <h5 class="text-danger text-center mb-3">Em qual endereço deve ser entregue?</h5>

        <?php foreach ($lista2 as $item) { ?>
          <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
            <div class=" col-md-12 col-12"> 
              <div class="card border-secondary mb-3 " style="min-height: 100px;">

                <h5 class="card-text text-dark text-center font-weight-bold mt-3"><i class="fas fa-map-marker-alt mr-2" style="color: red;" ></i><?=utf8_encode($item['local'])?></h5>

                <div class="card-text text-secondary ml-3">Rua <?=utf8_encode($item['rua'])?></div>

                <div class="card-text text-secondary ml-3">Bairro <?=utf8_encode($item['bairro'])?></div>

                <div class="card-text text-secondary ml-3">Cidade <?=utf8_encode($item['cidade'])?></div>

                <div class="card-text text-secondary ml-3 mb-4">Estado <?=utf8_encode($item['estado'])?></div>

              </div>
            </div>
          </div>

        <?php } ?>
        <button class="btn btn-outline-danger col-md-12 mt-3" name="btnComprar">Comprar</button>
      </form>
    </div>
  </div>
</div>


<?php require_once "footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>