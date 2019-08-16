<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cheff Delivery</title>
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style="background-image: url('media/images/img-fundo2.jpg');
background-size: 130%; background-repeat: no-repeat;">

<?php require_once "header.php"; ?>

<div id="container">  
  <div class="box" style="background-color: white; ">
    <h1 class="titulo-box " style="color:#de2828"><strong>Favoritos do momento</strong></h1>
    <div class="alert alert-dark" role="alert">
      <strong>Para você comer no café da manhã, almoço e jantar.</strong>
    </div>
  </div>
</div>

<div class="container">
  <div class="card-columns">
  <div class="card">
    <img src="media/images/petiscos.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Petiscos</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
  <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
  </div>
  <div class="card">
    <img src="media/images/fundo.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Fundo</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card bg-danger text-white text-center p-3">
    <blockquote class="blockquote mb-0">
      <p>Fique calmo e escolha Cheff Delivery</p>
    </blockquote>
  </div>
  <div class="card">
    <img src="media/images/vegetariano.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Sobremesas</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
    <div class="card">
    <img src="media/images/refeiçoes.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Marmitex</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
    <div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
  </div>
</div>
</div>

<?php require_once "footer.php"; ?>

</body>
</html>

