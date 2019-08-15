<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cadastro Cliente</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="media/css/estilos.css">

</head>
<body>

<?php
require_once "header.php";
?>

<div class="row">
  <div style="background-image: url('media/images/img-fundo.jpg'); min-height: 200px; min-width: 100%;     background-position: center 1050px;
" class="shadow">
    <div class="text-center my-5">
      <h1 class="text-white">Cadastro de Cliente</h1>
    </div> 
  </div>
</div>

<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -60px !important;">
<div class="card" style="margin-right: auto; margin-left: auto;">
 <div class="card-body" > 

  <br>
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email"><strong>E-mail</strong></label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="form-group col-sm">
        <label for="senha"><strong>Senha</strong></label>
        <input type="password" class="form-control" id="senha">
      </div>
    </div>
    <div class="form-group">
      <label for="estado_cliente"><strong>Estado</strong></label>
      <select id="estado_cliente" class="form-control">
        <option selected>SC</option>
      </select>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="cidade_cliente"><strong>Cidade</strong></label>
        <input type="text" class="form-control" id="cidade_cliente" placeholder="Ex: Gaspar">
      </div>
      <div class="form-group col-sm-6">
        <label for="rua_cliente"><strong>Rua</strong></label>
        <input type="text" class="form-control" id="rua_cliente" placeholder="Ex: Rua Sábia 179">
      </div>
      <div class="form-group col-sm-6">
        <label for="telefone_cliente"><strong>Número de telefone</strong></label>
        <input type="text" class="form-control" id="telefone_cliente">
      </div>
      <div class="form-group col-sm-6">
        <label for="restricao"><strong>Restrição alimentar</strong></label>
        <select id="restricao" class="form-control">
         <option selected>Nenhuma</option> 
         <option>Glúten</option> 
         <option>Lactose</option> 
         <option>Açúcar</option> 
         <option>Soja</option> 
         <option>Ovos</option> 
         <option>Frutos do mar</option> 
       </select>
     </div>
   </div>
   <h2><strong>Preferências</strong></h2>
   <div class="form-group">
    <label for="preco"><strong>Preço</strong></label>
    <select id="preco" class="form-control">
      <option>R$2,00 a R$9,99</option>
      <option>R$10,00 a R$24,99</option>
      <option>R$25,00 a R$39,99</option>
      <option>R$40,00 a R$66,59</option>
      <option>R$65,60 a R$100,00</option>
      <option selected>Qualquer preço</option>
    </select>
  </div>
  <div class="form-group">
    <label for="restaurante_cliente"><strong>Restaurante</strong></label>
    <input type="text" class="form-control" id="restaurante_cliente">
  </div>
  <div class="form-group">
    <label for="comida_cliente"><strong>Comida</strong></label>
    <input type="text" class="form-control" id="comida_cliente">
  </div>
  <div class="form-group">
    <label for="comentarios"><strong>Comentários</strong></label>
    <textarea class="form-control" id="comentarios" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
  <button type="submit" class="btn btn-outline-danger">Excluir</button>
</form>
</div>
</div>
</div>

<?php

//inclusão do header
require_once "footer.php";
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
