<?php

require_once"backends/CadastroEndereco.php";

require_once"head.php";

// Verificar se existe alerta via COOKIE
if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
  $alerta = unserialize($_COOKIE['alerta']);
  setcookie('alerta');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Edição de Endereço</title>
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
      <div class="text-center my-5">
        <h1 class="text-white mb-5">Editar um endereço</h1>
      </div> 
    </div>
  </div>

  <div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;" >
    <div class="card shadow" style="margin-right: auto; margin-left: auto;">
      <div class="card-body" > 

        <?php require_once"include/alerta.php"; ?>

        <form method="post" action="">
          <h2 class="mb-3"><strong>Edição Endereço</strong></h2>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="local"><strong>Nome do local</strong></label>
              <input type="text" class="form-control" id="local" name="local" value="<?=$resultadoEndereco['local']?>">
              <small>Adicione o endereço de trabalho, casa, escola....</small>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="rua"><strong>Rua</strong></label>
              <input type="text" class="form-control" id="rua" name="rua" value="<?=$resultadoEndereco['rua']?>">
            </div>
            <div class="form-group col-6">
              <label for="bairro"><strong>Bairro</strong></label>
              <input type="text" class="form-control" id="bairro" name="bairro" value="<?=$resultadoEndereco['bairro']?>">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-6">
              <label for="cidade_cliente"><strong>Cidade</strong></label>
              <input type="text" class="form-control" id="cidade_cliente" name="cidade_cliente" value="<?=$resultadoEndereco['cidade']?>">
            </div>
            <div class="form-group col-6">
              <label for="estado"><strong>Estado</strong></label>
              <select id="estado" class="form-control" name="estado" value="<?=$resultadoEndereco['estado']?>">
                <option selected>SC</option>
              </select>
            </div>
          </div>
          
          <?php if (empty($disabled)) { ?>
            <button type="submit" class="btn btn-dark col-md-12" name="btnEditar"><i class="fas fa-pencil-alt"></i></button>
          <?php } ?>

          <?php if (empty($disabled)) { ?>
            <button type="submit" class="btn btn-danger col-md-12 mt-3  " name="btnExcluir"><i class="fas fa-trash-alt"></i></button>
          <?php } ?>
        </form>
      </div>
    </div>
  </div>

  <?php
  //inclusão do rodapé
  require_once "footer.php";
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
