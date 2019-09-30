<?php
require_once"head.php";

require_once"include/verificacao_pagina_restrita.php";

require_once"backends/edicao.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Edição</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="media/css/estilos.css">
  <link rel="stylesheet" href="media/css/main.css">

</head>

<body>

  <body style="background-color: rgb(235, 226, 225);">

    <?php
    require_once "header.php";
    ?>

    <div class="row">
      <div class="shadow" style="  background-color: #f2392c ;
      background-image: url('media/images/food-pattern.png');
      min-height: 100px; 
      min-width: 100%; 
      background-size: 30%; 
      background-position: center 1050px;" >
      <div class="text-center my-5">
        <h1 class="text-white">Edição</h1>
      </div> 
    </div>
  </div>


  <div class="col-10 col-md-8 mt-5 offset-md-2 offset-1" style="margin-top: -30px !important;">
    <div class="card shadow" style="margin-right: auto; margin-left: auto;">
      <div class="card-body" >

        <div class="row">
          <div class=" col-md-4 col-12">
            <div class="card border-dark mb-3 " style="min-height: 200px;">
              <div class="card-header "> <div class=" text-center" style="font-weight: 800; color: #4f4c4c;">EDIÇÃO DADOS DE ACESSO</div></div>
              <div class="card-body text-danger">
               <p class="card-text text-dark text-center" style="font-size: 15px;">Página onde você edita seus dados de login, ou seja, e-mail e senha.</p>
               <div class="row">
                <a href="edicaoUsuario.php?id=<?=$_SESSION['id_usuario']?>" class="btn btn-dark col-8 offset-md-2" name="btnUsuarios"><i class="fas fa-user-edit"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class=" col-md-4 col-12">
          <div class="card border-dark mb-3 " style="min-height: 200px;">
            <div class="card-header "> <div class=" text-center" style="font-weight: 800; color: #4f4c4c;">EDIÇÃO DE DADOS PESSOAIS</div></div>
            <div class="card-body text-danger">
             <p class="card-text text-dark text-center" style="font-size: 15px;">Página onde você edita seus dados pessoias, ou seja, nome, endereço, telefone...</p>

             <div class="row">
              <?php if($_SESSION['tp_usuario'] == 'cliente'){ ?>
                <a href="edicaoCliente.php?id=<?=$_SESSION['fk_usuario']?>" class="btn btn-dark col-md-8 offset-md-2 " name="btnClientes"><i class="far fa-edit"></i></a>
              <?php } ?>
            </div>

          </div>
        </div>
      </div>

      <div class=" col-md-4 col-12">
        <div class="card border-dark mb-3 " style="min-height: 200px;">
          <div class="card-header "> <div class=" text-center" style="font-weight: 800; color: #4f4c4c;">ADIÇÃO DE ENDEREÇO</div></div>
          <div class="card-body text-danger">
           <p class="card-text text-dark text-center" style="font-size: 15px;">Página onde você adiciona novos endereços onde deseja receber sua refeição.</p>

           <div class="row">
            <?php if($_SESSION['tp_usuario'] == 'cliente'){ ?>
              <a href="CadastroEndereco.php?id=<?=$_SESSION['fk_usuario']?>" class="btn btn-dark col-md-8 offset-md-2 " name="btnEndereco"><i class="fas fa-plus"></i></a>
            <?php } ?>
          </div>

        </div>
      </div>
    </div>
  </div>
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
