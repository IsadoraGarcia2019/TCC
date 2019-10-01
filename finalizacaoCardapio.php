<?php

require_once"head.php";

require_once"backends/finalizacaoCardapio.php";

$lista = "SELECT * FROM cardapio_dia WHERE id_cardapio = $id";
$queryCardapio = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryCardapio, MYSQLI_ASSOC);

$lista2 = "SELECT * FROM enderecos WHERE id_endereco = $id";
$queryCardapio = mysqli_query($con, $lista2);
$lista2 = mysqli_fetch_all($queryCardapio, MYSQLI_ASSOC);

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
    </div> 
  </div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
  <div class="card shadow">
    <div class="card-body" >

      <?php require_once "include/alerta.php"; ?>

      <form id="cadform" name="cadform" method="post" action="" onsubmit="return validaCampo();">

        <h2 class="mb-3 mt-3 text-danger" style="color: #de2828; margin-left: 15px;">Dados do pedido</h2>
        
        <?php foreach ($lista as $item) { ?>

          <div class="col-12 mb-4">
            <div class="card border-secondary">
              <div class="card-body">
                <div class="row">
                  <i class="fas fa-utensils float-left mr-2 text-danger ml-2"></i>
                  <h5 class="card-title"><?=utf8_encode($item['nome_comida'])?></h5>
                </div>
                <p class="font-italic text-uppercase ml-3" style="font-size: 17px;"><?=utf8_encode($item['categoria_comida'])?></p>
              </div>
            </div>
          </div>
        <?php } ?>
        <h5 class="text-danger text-center mb-3">Em qual endereço deve ser entregue?</h5>

        <div class=" col-md-12 col-12"> 
          <div class="card border-secondary mb-3 " style="min-height: 100px;">

            <h5 class="card-text text-dark text-center font-weight-bold mt-3"><i class="fas fa-map-marker-alt mr-2 text-danger" ></i><?=utf8_encode($item['local'])?></h5>

            <div class="card-text text-secondary ml-3">Rua <?=utf8_encode($item['rua'])?></div>

            <div class="card-text text-secondary ml-3">Bairro <?=utf8_encode($item['bairro'])?></div>

            <div class="card-text text-secondary ml-3">Cidade <?=utf8_encode($item['cidade'])?></div>

            <div class="card-text text-secondary ml-3 mb-4">Estado <?=utf8_encode($item['estado'])?></div>

          </div>
          <button class="btn btn-danger col-md-12  mt-3" name="btnComprar"><i class="fas fa-shopping-basket"></i></button>

        </div>
        
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