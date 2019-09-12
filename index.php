<?php

require_once"head.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cheff Delivery</title>
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
      <h1 class="text-white mb-5" style="font-size: 40px;">Receber sua comida em casa nunca foi tão fácil!</h1>
    </div> 
  </div>
</div>

<div class="col-10 col-md-8 mt-5 offset-md-2 offset-1" style="margin-top: -30px !important;">
  <div class="card" style="margin-right: auto; margin-left: auto;">
    <div class="card-body" >
      <h3 class="mb-3"><strong>Quem somos?</strong></h3>

      <a href="#" type="submit" class="btn btn-outline-secondary col-md-12">Visualizar nossos pacotes</a>
    </div>
  </div>
</div>


<!-- <div class="container">
  <div class="card-index">
    <div class="card-columns">
      <div class="card shadow">
        <a href="cardapio.php"><img src="media/images/cafedamanha2.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h3 class="card-title">Café da Manhã</h3>
          <p class="card-text">Seu café da manhã como você nunca viu antes.</p>
        </div>
      </div>
      <div class="card p-3 shadow">
        <blockquote class="blockquote mb-0 card-body text-center text-danger">
          <a href="pacotes.php" class="text-danger"><p><strong>Temos promoções todos os dias para atender melhor você, faça seu pedido e o frete é totalmente gratuito.</strong></p></a>
        </blockquote>
      </div>
      <div class="card shadow">
        <a href="cardapio.php"><img src="media/images/petiscos.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h3 class="card-title">Almoço</h3>
          <p class="card-text">Temos vários combos e promoções para que suas refeições sejam mais que especiais.</p>
        </div>
      </div>
      <div class="card p-3 text-danger text-center shadow" style="height: 150px;">
        <blockquote class="blockquote mb-0 card-body">
          <a href="CadastroCliente.php" class="text-danger"><p><strong>Receber sua comida em casa nunca foi tão fácil.</strong></p></a>
        </blockquote>
      </div>
      <div class="card shadow">
        <a href="cardapio.php"><img src="media/images/massas1.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body">
          <h3 class="card-title">Jantar</h3>
          <p class="card-text">Pizza para um jantar bem mais saboroso.</p>
        </div>
      </div>
      <div class="card p-3 shadow">
        <blockquote class="blockquote mb-0 card-body text-center text-danger">
          <a href="pacotes.php" class="text-danger"><p><strong>Trabalhamos com pagamentos mensais onde você recebe em casa a sua fatura! Muito mais prático e rápido.</strong></p></a>
        </blockquote>
      </div>
    </div>
  </div>
</div>
</div>
-->

<?php require_once "footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>