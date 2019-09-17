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
    <div class="shadow " style="  background-color: #f2392c;
    background-image: url('media/images/food-pattern.png');
    min-height: 139px;
    min-width: 100%; 
    background-size: 30%; 
    background-position: center 1050px;" >
  </div>
</div>

<div class="row">
  <div class="col-10 col-md-8 offset-1 offset-md-2" style="margin-top: -30px !important;">
    <div class="card shadow">
      <div class="card-body">
        <div class="box">
          RECEBER SUA COMIDA EM CASA NUNCA FOI TÃO FÁCIL!
        </div>
        <div class="mb-3" id="quem_somos">
          Quem somos?
        </div>
        <p class="box">Nós somos um de clube de assinatura de entrega de refeições. Trabalhamos com planos mensais em que você escolhe o que quer comer e o frete é GRÁTIS. Garantimos suas entregas com êxito, de uma maneira que traga mais praticidade para o seu dia-a-dia!</p>

        <div class="text-center mt-4 mb-4" id="quem_somos">
          Como fazer meu pedido?
        </div>

        <div class="row">

          <div class=" col-md-4 col-12">
            <div class="card border-danger mb-3 " style="min-height: 300px;">
              <div class="card-header "> <div class=" text-center" style="font-weight: 800; color: #4f4c4c;">PASSO 1</div></div>
              <div class="card-body text-danger">
                <h5 class="card-title text-danger text-center mt-4 ">Como começar?</h5>
                <p class="card-text text-dark text-center" style="font-size: 15px;">Entre na página cadastro e preencha com suas informações, seja você Cliente, Empresa ou Restaurante.</p>
              </div>
            </div>
          </div>

          <div class=" col-md-4 col-12">
            <div class="card border-danger mb-3 " style="min-height: 300px;">
              <div class="card-header "> <div class=" text-center" style="font-weight: 800; color: #4f4c4c;">PASSO 2</div></div>
              <div class="card-body text-danger">
                <h5 class="card-title text-danger text-center mt-3">O que fazer depois?</h5>
                <p class="card-text text-dark text-center" style="font-size: 15px;">Já cadastrado, escolha o pacote de seu interesse. A partir disso, dependendo do pacote que você selecionou, você poderá escolher a refeição que vai querer no dia que quiser comer.</p>
              </div>
            </div>
          </div>

          <div class=" col-md-4 col-12">
            <div class="card border-danger mb-3 " style="min-height: 300px;">
              <div class="card-header "> <div class=" text-center" style="font-weight: 800; color: #4f4c4c;">PASSO 3</div></div>
              <div class="card-body text-danger">
                <h5 class="card-title text-danger text-center mt-3">Pronto, e agora?</h5>
                <p class="card-text text-dark text-center" style="font-size: 15px;">Receba a sua comida em casa sem se preocupar com o frete, e bom apetite!</p>
              </div>
            </div>
          </div>

          <a href="pacotes.php" class="btn btn-outline-dark col-md-12 col-12 mt-3" name="pacotes">Vizualizar nossos pacotes</a>
          <a href="cardapio.php" class="btn btn-outline-dark col-md-12 col-12 mt-3" name="cardapio">Vizualizar nosso cardápio</a>

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