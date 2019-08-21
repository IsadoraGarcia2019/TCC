<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cheff Delivery</title>
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-image: url('media/images/food-pattern.png'); 
background-size: 100%; background-color: rgb(235, 226, 225); background-repeat: no-repeat;">

<?php require_once "header.php"; ?>

<div class="container"> 
  <div class="row"> 
    <div class="box col-md-12" style="background-color: white; ">
      <h1 class="titulo-box text-center" style="color:#de2828"><strong>Nosso cardápio</strong></h1>
      <div class="alert alert-secondary" role="alert">
        <strong>Para você comer no café da manhã, almoço e jantar.</strong>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container">
  <div class="card-index">
    <div class="card-columns">
      <div class="card shadow">
        <img src="media/images/cafedamanha2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Café da Manhã</h3>
          <p class="card-text">Seu café da manhã como você nunca viu antes..</p>
        </div>
      </div>
      <div class="card p-3 shadow">
        <blockquote class="blockquote mb-0 card-body text-center text-danger">
          <p><strong>Temos promoções todos os dias para melhor atender você, faça seu pedido e o frete é totalmente gratuito</strong></p>
        </blockquote>
      </div>
      <div class="card shadow">
        <img src="media/images/japonesa.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Asiática</h3>
          <p class="card-text">Vamos de sushi hoje?</p>
        </div>
      </div>
      <div class="card shadow">
        <img src="media/images/frenchfries.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Almoço</h3>
          <p class="card-text">Temos vários combos e promoções para que suas refeições sejam mais que especiais</p>
        </div>
      </div>
      <div class="card p-3 text-danger text-center shadow">
        <blockquote class="blockquote mb-0 card-body">
          <p><strong>Receber sua comida em casa nunca foi tão fácil</strong></p>
        </blockquote>
      </div>
      <div class="card shadow">
        <img src="media/images/sobremesas.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Sobremesas</h3>
          <p class="card-text">Porque depois do almoço sempre tem aquela sobremesa não é mesmo? Peça a sua agora!</p>
        </div>
      </div>
      <div class="card shadow">
        <img src="media/images/massas1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Jantar</h3>
          <p class="card-text">Pizza para um jantar bem mais saboroso</p>
        </div>
      </div>
      <div class="card p-3 shadow">
        <blockquote class="blockquote mb-0 card-body text-center text-danger">
          <p><strong>Trabalhamos com pagamentos mensais onde você deposita quanto quer gastar</strong></p>
        </blockquote>
      </div>
      <div class="card shadow">
        <img src="media/images/vegetariano.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title">Vegetariana</h3>
          <p class="card-text">E para os amantes de comida vegetariana, temos um cardápio especial para vocês</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php require_once "footer.php"; ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

