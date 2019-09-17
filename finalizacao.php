<?php

require_once"head.php";

// require_once"backends/finalizacao.php";
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
      <h1 class="text-white mb-5" style="font-size: 35px;">Finalização do pedido</h1>
    </div> 
  </div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;">
  <div class="card shadow">
    <div class="card-body" >

      <form method="post" action="">

        <h3 class="mb-3 mt-3" style="color: black;"><strong>Dados Pessoais</strong></h3>

        <div class="form-group">
          <label for="nome_cliente">Nome</label>
          <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" value="<?=$resultadoCliente['nome_cliente']?>">
        </div>

        <div class="form-group">
          <label for="email_cliente">Email</label>
          <input type="email" class="form-control" id="email_cliente" name="email_cliente" value="<?=$resultadoCliente['email_cliente']?>">
        </div>

        <div class="form-group">
          <label for="rua">Endereço</label>
          <input type="text" class="form-control" id="rua" name="rua" value="<?=$resultadoCliente['rua']?>">
        </div>  

        <div class="row">
          <div class="col-md-6 mt-2">
            <label for="cidade">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="<?=$resultadoCliente['cidade']?>">
          </div>
          <div class="col-md-6 mt-2">
            <label for=" estado">Estado</label>
            <select id=" estado" class="form-control" name="estado" value="<?=$resultadoCliente['estado']?>">
              <option selected>SC</option>
            </select>
          </div>
        </div>

        <h3 class="mb-3 mt-3" style="color: black;"><strong>Formas de Pagamento</strong></h3>

        <div class="form-check">
         <input class="form-check-input" type="radio" name="forma_pagamento" id="dinheiro" value="dinheiro" >
         <label class="form-check-label" for="dinheiro">Dinheiro</label>
       </div>

       <div class="form-check">
         <input class="form-check-input" type="radio" name="forma_pagamento" id="cheque" value="cheque">
         <label class="form-check-label" for="cheque">Cheque</label>
       </div>

       <div class="form-check">
         <input class="form-check-input" type="radio" name="forma_pagamento" id="boleto_bancario" value="boleto_bancario" >
         <label class="form-check-label" for="boleto_bancario">Boleto Bancário</label>
       </div>

       <div class="form-check">
        <input class="form-check-input" type="radio" name="forma_pagamento" id="cartao_credito" value="cartao_credito">
        <label class="form-check-label" for="cartao_credito">Cartão de Crédito</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="forma_pagamento" id="cartao_debit" value="cartao_debito" >
        <label class="form-check-label" for="cartao_debito">Cartão de Débito</label>
      </div>

      <a href="#" class="btn btn-outline-danger col-md-12 mt-3" name="btnFinalizar">Finalizar</a>

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