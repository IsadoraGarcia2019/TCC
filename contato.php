<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
	<title>Contato</title>
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
      <h1 class="text-white">Contato</h1>
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
        <label for="nome"><strong>Nome</strong></label>
        <input type="text" class="form-control" id="nome">
      </div>
      <div class="form-group col-md-6">
        <label for="email"><strong>E-mail</strong></label>
        <input type="email" class="form-control" id="email">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-sm-6">
        <label for="telefone_cliente"><strong>Número de telefone</strong></label>
        <input type="text" class="form-control" id="telefone_cliente">
      </div>
     <div class="form-group col-sm-6">
    <label for="tipo_comentario"><strong>Tipo do comentário</strong></label>
    <select id="tipo_comentario" class="form-control">
      <option>Crítica</option>
      <option>Dúvida</option>
      <option>Sugestão</option>
      </select>
  </div>
</div>
  <div class="form-group">
    <label for="comentarios"><strong>Comentários</strong></label>
    <textarea class="form-control" id="comentarios" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-outline-secondary">Enviar</button>
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