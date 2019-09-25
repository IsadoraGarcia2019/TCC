<?php

require_once"backends/edicaoCliente.php";
require_once"head.php";


if (!isset($_SESSION['logado']) && $_SESSION['logado'] == false) {
  header('Location:erros.php?mesagem= Você não está logado e por isso não pode editar nenhum dado');

if ($_SESSION['tp_usuario'] != 'cliente') {
  header('Location:erros.php?mesagem= Somente clientes podem editar seus dados!');
} 
} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Edição de dados pessoais </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="media/css/estilos.css">
  <link rel="stylesheet" href="media/css/main.css">

</head>
<body style="background-color: rgb(235, 226, 225);">

  <?php
  require_once "header.php";
  ?>

  <div class="row">
    <div class="shadow" style="  background-color: #f2392c;
    background-image: url('media/images/food-pattern.png');
    min-height: 100px; 
    min-width: 100%; 
    background-size: 30%; 
    background-position: center 1050px;" >
    <?php Site::navbar(); ?>
    <div class="text-center my-5">
      <h1 class="text-white mb-5">Edição dos meus dados pessoais </h1>
    </div> 
  </div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -20px !important;">
  <div class="card shadow">
    <div class="card-body" >

      <?php require_once"include/alerta.php"; ?>

      <form method="post" action="">
        <h2><strong>Dados Pessoais</strong></h2>
        <div class="form-group mt-3">
          <label for="nome_cliente"><strong>Nome do Cliente</strong></label>
          <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" value="<?=$resultadoCliente['nome_cliente']?>">
        </div>
        <div class="form-group">
          <label for="estado_cliente" ><strong>Estado</strong></label>
          <select id="estado_cliente" class="form-control" name="estado" value="<?=$resultadoCliente['estado']?>">
            <option selected>SC</option>
          </select>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="cidade_cliente"><strong>Cidade</strong></label>
            <input type="text" class="form-control" id="cidade_cliente" placeholder="Ex: Gaspar" name="cidade" value="<?=$resultadoCliente['cidade']?>">
          </div>
          <div class="form-group col-sm-6">
            <label for="rua_cliente"><strong>Rua</strong></label>
            <input type="text" class="form-control" id="rua_cliente" placeholder="Ex: Rua Sábia 179" name="rua" value="<?=$resultadoCliente['rua']?>">
          </div>
          <div class="form-group col-sm-6 col-md-12">
            <label for="telefone_cliente"><strong>Número de telefone</strong></label>
            <input type="text" class="form-control" id="telefone_cliente" name="numero_telefone" value="<?=$resultadoCliente['numero_telefone']?>">
          </div>
          <div class="form-group col-md-12">
            <label for="restricao"><strong>Restrição alimentar</strong></label>
            <select id="restricao" class="form-control" name="restricao_alimentar" value="<?=$resultadoCliente['restricao_alimentar']?>">
              <?=$disabled?>> 
              <option>Nenhuma</option> 
              <option value="gluten" <?= ($resultadoCliente['restricao_alimentar']=="gluten") ? 'selected' : ''?>>Glúten</option> 
              <option value="lactose" <?= ($resultadoCliente['restricao_alimentar']=="lactose") ? 'selected' : ''?>>Lactose</option> 
              <option value="acucar" <?= ($resultadoCliente['restricao_alimentar']=="acucar") ? 'selected' : ''?>>Açúcar</option> 
              <option value="soja" <?= ($resultadoCliente['restricao_alimentar']=="soja") ? 'selected' : ''?>>Soja</option> 
              <option value="ovos" <?= ($resultadoCliente['restricao_alimentar']=="ovos") ? 'selected' : ''?>>Ovos</option> 
              <option value="frutos_do_mar" <?= ($resultadoCliente['restricao_alimentar']=="frutos_do_mar") ? 'selected' : ''?>>Frutos do mar</option> 
            </select>
          </div>
        </div>
        <h2><strong>Preferências</strong></h2>
        <div class="form-group mt-3">
          <label for="comida_cliente"><strong>Comida</strong></label>
          <input type="text" class="form-control" id="comida_cliente" name="preferencia_comida" value="<?=$resultadoCliente['preferencia_comida']?>">
        </div>
        <div class="form-group">
          <label for="restaurante_cliente"><strong>Restaurante</strong></label>
          <input type="text" class="form-control" id="restaurante_cliente" name="preferencia_restaurante" value="<?=$resultadoCliente['preferencia_restaurante']?>">
        </div> 
        <div class="form-group">
          <label for="comentarios"><strong>Comentários</strong></label>
          <textarea class="form-control" id="comentarios" rows="3" name="comentarios"></textarea>
        </div>
        
        <?php if (empty($disabled)) { ?>
          <button type="submit" class="btn btn-dark col-md-12" name="btnEditar">Editar</button>
        <?php } ?>
      </form>
    </div>
  </div>
</div>

<?php

// inclusão do rodapé
require_once"footer.php";

?>

</body>
</html>