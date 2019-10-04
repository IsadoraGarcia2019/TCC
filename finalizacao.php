<?php

require_once"head.php";

require_once"backends/finalizacao.php";

$lista = "SELECT * FROM pacotes WHERE id = $id";
$queryPacote = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryPacote, MYSQLI_ASSOC);

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
	<title>Finalização de Compra</title>
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
      <h1 class="text-white mb-5" style="font-size: 35px;">Finalização de compra</h1>
    </div> 
  </div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
  <div class="card shadow">
    <div class="card-body" >

      <?php require_once "include/alerta.php"; ?>

      <form id="cadform" name="cadform" method="post" action="" onsubmit="return validaCampo();">

        <h2 class="mb-3 mt-3" style="color: #de2828;">Dados do pacote</h2>
        
        <?php foreach ($lista as $item) { ?>

          <h3 class="nome_pacote mb-3 text-center"><?=utf8_encode($item['nome_pacote'])?></h3>

          <p class="font-italic" style="font-size: 17px;"><?=utf8_encode($item['descricao_pacote'])?></p>

          <h5 class="text-danger text-center mb-3">O que está incluso?</h5>

          <div class="row">
            <?php if ($item['quantidade_cafe'] != 0) { ?>
              <div class="col-md-4 m-0" role="alert">
                <div class="alert alert-primary text-center">
                  <input type="image" src="media/images/icone-cafe.png" name="quantidade_cafe" id="quantidade_cafe" style="max-height: 40px; margin-right: 7px;"><?=$item['quantidade_cafe']?><br>
                </div>
              </div>
            <?php } ?>

            <?php if ($item['quantidade_almoco'] != 0) { ?>
              <div class=" col-md-4 m-0" role="alert">
                <div class="alert alert-danger text-center">
                  <input type="image" src="media/images/hamburger.png" name="quantidade_almoco" id="quantidade_almoco" style="max-height: 40px; margin-right: 7px;"><?=$item['quantidade_almoco']?><br>
                </div>
              </div>
            <?php } ?>

            <?php if ($item['quantidade_jantar'] != 0) { ?>
              <div class=" col-md-4 m-0" role="alert">
                <div class="alert alert-secondary text-center">
                  <input type="image" src="media/images/pizza.png"  name="quantidade_jantar" id="quantidade_jantar" style="max-height: 40px; margin-right: 10px;"><?=$item['quantidade_jantar']?>
                </div>
              </div>
            <?php } ?>
          </div>
          <p class="font-weight-bold text-center text-danger box  "><?=$item['preco_pacote']?></p>
        <?php } ?>
        <h2 class="mb-3 mt-3" style="color: #de2828;">Formas de Pagamento</h2>

        <div class="form-check">
         <input class="form-check-input" type="radio" name="forma_pagamento" id="dinheiro" value="dinheiro" >
         <label class="form-check-label" for="dinheiro" style="font-size: 17px;">Dinheiro</label>
       </div>

       <div class="form-check">
         <input class="form-check-input" type="radio" name="forma_pagamento" id="boleto_bancario" value="boleto_bancario" >
         <label class="form-check-label" for="boleto_bancario" style="font-size: 17px;">Boleto Bancário</label>
       </div>

       <div class="form-check">
        <input class="form-check-input" type="radio" name="forma_pagamento" id="cartao_credito" value="cartao_credito">
        <label class="form-check-label" for="cartao_credito" style="font-size: 17px;">Cartão de Crédito</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="forma_pagamento" id="cartao_debito" value="cartao_debito" >
        <label class="form-check-label" for="cartao_debito" style="font-size: 17px;">Cartão de Débito</label>
      </div>

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