<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cadastro Cliente</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">

</head>
<body style="background-image: url('media/images/img-fundo.jpg');
background-size: 100%;
background-repeat: no-repeat;
background-attachment: scroll;">

<div class="card col-md-6 offset-3 mt-5">
 <div class="card-body"> 
  <h1>Cadastro de Cliente</h1>
  <br>
  <form>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email">
      </div>
      <div class="form-group col-md-6">
        <label for="senha">Senha</label>
        <input type="password" class="form-control" id="senha">
      </div>
    </div>
    <div class="form-group">
      <label for="estado_cliente">Estado</label>
      <select id="estado_cliente" class="form-control">
        <option selected>SC</option>
      </select>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="cidade_cliente">Cidade</label>
        <input type="text" class="form-control" id="cidade_cliente" placeholder="Ex: Gaspar">
      </div>
      <div class="form-group">
        <label for="rua_cliente">Rua</label>
        <input type="text" class="form-control" id="rua_cliente" placeholder="Ex: Rua Sábia 179">
      </div>
      <div class="form-group">
        <label for="telefone_cliente">Número de telefone</label>
        <input type="text" class="form-control" id="telefone_cliente">
      </div>
      <div class="form-group ml-2">
        <label for="restricao">Restrição alimentar</label>
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
   <h2>Preferências</h2>
   <div class="form-group">
    <label for="preco">Preço</label>
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
    <label for="restaurante_cliente">Restaurante</label>
    <input type="text" class="form-control" id="restaurante_cliente">
  </div>
  <div class="form-group">
    <label for="comida_cliente">Comida</label>
    <input type="text" class="form-control" id="comida_cliente">
  </div>
  <div class="form-group">
    <label for="comentarios">Comentários</label>
    <textarea class="form-control" id="comentarios" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
  <button type="submit" class="btn btn-outline-danger">Excluir</button>
</form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<?php

//inclusão do header
require_once "footer.php";
?>