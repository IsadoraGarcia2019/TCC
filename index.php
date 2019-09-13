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
      <h3 class="mb-3" style="color: #d42626;"><strong>Quem somos?</strong></h3>
      <p style="font-size: 18px;">Nós somos um de clube de assinatura de entrega de refeições. Trabalhamos com planos mensais em que você escolhe o que quer comer e o frete é grátis. "Somos aquilo que fazemos repetidamente: excelência". Garantimos suas entregas com êxito, de uma maneira que traga mais praticidade para o seu dia-a-dia. Entre em contato conosco e vire nosso cliente!</p>

      <h3 class="mb-3" style="color: #d42626;"><strong>Como fazer seu pedido?</strong></h3>

      <h5 style="font-size: 18px; font-weight: bold;">Passo 1:</h5> 
      <p style="font-size: 18px;">Entre na página cadastro e preencha com suas informações, seja você Cliente, Empresa ou Restaurante.</p>

      <h5 style="font-size: 18px; font-weight: bold;">Passo 2:</h5>
      <p style="font-size: 18px;">Já cadastrado, escolha o pacote de seu interesse. A partir disso, dependendo do pacote que você selecionou, você poderá escolher a refeição que vai querer no dia que quiser comer.</p>

      <h5 style="font-size: 18px; font-weight: bold;">Passo 3:</h5>
      <p style="font-size: 18px;">Recebe a sua comida em casa sem se preocupar com o frete, e bom apetite!</p>

      <a href="#" type="submit" class="btn btn-outline-secondary col-md-12">Visualizar nossos pacotes</a>
    </div>
  </div>
</div>

 <div class="container">
  <h2 style="margin-top: 20px; color: #d42626; text-align: center;"><strong>Nossos Cardápio</h2></strong>
  <div class="card-index">
    <div class="card-columns">
      <div class="card shadow mt-4">
        <a href="pacotes.php"><img src="media/images/cafedamanha2.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body" style="height: 90px;">
          <h3 class="card-title" style="text-align: center;">Café da Manhã</h3>
        </div>
      </div>
      <div class="card shadow mt-4">
        <a href="pacotes.php"><img src="media/images/petiscos.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body" style="height: 85px;">
          <h3 class="card-title" style="text-align: center;">Almoço</h3>
        </div>
      </div>
      <div class="card shadow mt-4">
        <a href="pacotes.php"><img src="media/images/massas1.jpg" class="card-img-top" alt="..."></a>
        <div class="card-body" style="height: 90px;">
          <h3 class="card-title" style="text-align: center;">Jantar</h3>
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