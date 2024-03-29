<?php

require_once"backends/CadastroCliente.php";

require_once"head.php";

require_once"include/verificacao_logado.php";

// Verificar se existe alerta via COOKIE
if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
  $alerta = unserialize($_COOKIE['alerta']);
  setcookie('alerta');
}

if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
  header('Location:erros.php?mesagem= Você  está logado e por isso não pode se cadastrar');

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cadastro Cliente</title>
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
        <h1 class="text-white mb-5">Cadastrar - se</h1>
      </div> 
    </div>
  </div>

  <div class="col-10 col-md-6 mt-5 offset-md-3 offset-1" style="margin-top: -30px !important;" >
    <div class="card shadow" style="margin-right: auto; margin-left: auto;">
      <div class="card-body" > 

        <?php require_once"include/alerta.php"; ?>

        <form method="post" action="">
          <h2 class="mb-3"><strong>Dados Pessoais</strong></h2>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="email"><strong>E-mail</strong></label>
              <input type="email" class="form-control" id="email" name="email_cliente">
              <small>Certifique-se que seu e-mail é válido e está ativo!!!!</small>
            </div>
            <div class="form-group col-sm">
              <label for="senha"><strong>Senha</strong></label>
              <input type="password" class="form-control" id="senha" name="senha_cliente">
              <small>Escolha uma senha forte que seja difícil alguém descobrir</small>
            </div>
          </div>
          <div class="form-group">
            <label for="nome_cliente"><strong>Nome Completo</strong></label>
            <input type="text" class="form-control" id="nome_cliente" name="nome_cliente">
          </div>
          <div class="form-group">
            <label for="estado_cliente"><strong>Estado</strong></label>
            <select id="estado_cliente" class="form-control" name="estado_cliente">
              <option selected>SC</option>
            </select>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="cidade_cliente"><strong>Cidade</strong></label>
              <input type="text" class="form-control" id="cidade_cliente" name="cidade_cliente" placeholder="Ex: Gaspar">
            </div>
            <div class="form-group col-sm-6">
              <label for="rua_cliente"><strong>Rua</strong></label>
              <input type="text" class="form-control" id="rua_cliente" name="rua_cliente" placeholder="Ex: Rua Sábia 179">
            </div>
            <div class="form-group col-sm-6">
              <label for="telefone_cliente"><strong>Número de telefone</strong></label>
              <input type="text" class="form-control" id="telefone_cliente" name="numero_telefone_cliente">
            </div>
            <div class="form-group col-sm-6">
              <label for="restricao"><strong>Restrição alimentar</strong></label>
              <select id="restricao" class="form-control" name="restricao_alimentar">
                <option selected value="nenhuma">Nenhuma</option> 
                <option value="gluten">Glúten</option> 
                <option value="lactose">Lactose</option> 
                <option value="acucar">Açúcar</option> 
                <option value="soja">Soja</option> 
                <option value="ovos">Ovos</option> 
                <option value="frutos_mar">Frutos do mar</option> 
              </select>
            </div>
          </div>
            <div class="form-group">
            <label for="comentarios"><strong>Comentários</strong></label>
            <textarea class="form-control" id="comentarios" rows="3" name="comentarios"></textarea>
          </div>
          <?php if (empty($disabled)) { ?>
            <button type="submit" class="btn btn-dark col-md-12" name="btnCadastrar">Cadastrar</button>
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

