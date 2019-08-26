<?php

require_once"backends/edicaoCliente.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Edição de dados pessoais </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="media/css/estilos.css">

</head>
<body style="background-color: rgb(235, 226, 225);">

  <?php
  require_once "header.php";
  ?>

  <div class="row">
    <div style="background-image: url('media/images/food-pattern.png'); background-color: #f13d3d; min-height: 100px; min-width: 100%;  background-size: 30%;   background-position: center 1050px;
    " class="shadow" >
    <div class="text-center my-5">
      <h1 class="text-white mb-5">Edição dos meus dados pessoais </h1>
    </div> 
  </div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -20px !important;">
  <div class="card" style="margin-right: auto; margin-left: auto;">
    <div class="card-body" >

      <form method="post" action="">
        <h2><strong>Dados Pessoais</strong></h2>
        <div class="form-group">
          <label for="estado_cliente" ><strong>Estado</strong></label>
          <select id="estado_cliente" class="form-control" name="estado_cliente">
            <option selected>SC</option>
          </select>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="cidade_cliente"><strong>Cidade</strong></label>
            <input type="text" class="form-control" id="cidade_cliente" placeholder="Ex: Gaspar" name="cidade_cliente">
          </div>
          <div class="form-group col-sm-6">
            <label for="rua_cliente"><strong>Rua</strong></label>
            <input type="text" class="form-control" id="rua_cliente" placeholder="Ex: Rua Sábia 179" name="rua_cliente">
          </div>
          <div class="form-group col-sm-6 col-md-12">
            <label for="telefone_cliente"><strong>Número de telefone</strong></label>
            <input type="text" class="form-control" id="telefone_cliente" name="numero_telefone_cliente">
          </div>
          <div class="form-group col-md-12">
            <label for="restricao"><strong>Restrição alimentar</strong></label>
            <select id="restricao" class="form-control" name="restricao_alimentar">
              <option>Nenhuma</option> 
              <option value="gluten">Glúten</option> 
              <option value="lactose">Lactose</option> 
              <option value="acucar">Açúcar</option> 
              <option value="soja">Soja</option> 
              <option value="ovos">Ovos</option> 
              <option value="frutos_do_mar">Frutos do mar</option> 
            </select>
          </div>
        </div>
        <h2><strong>Preferências</strong></h2>
        <div class="form-group">
          <label for="comida_cliente"><strong>Comida</strong></label>
          <input type="text" class="form-control" id="comida_cliente" name="preferencia_comida">
        </div>
        <div class="form-group">
          <label for="restaurante_cliente"><strong>Restaurante</strong></label>
          <input type="text" class="form-control" id="restaurante_cliente" name="preferencia_restaurante">
        </div>       

        <?php if (empty($disabled)) { ?>
          <button type="submit" class="btn btn-outline-danger float-left mb-3 col-md-12 mt-3" name="btnExcluir">Excluir</button>
        <?php } ?>

        <?php if (empty($disabled)) { ?>
          <button type="submit" class="btn btn-outline-secondary col-md-12 " name="btnEditar">Editar</button>
        <?php } ?>

      </form>
    </div>
  </div>
</div>

</body>
</html>