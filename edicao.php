<?php
require_once"head.php";

require_once"include/verificacao_pagina_restrita.php";


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
      <div style="background-image: url('media/images/food-pattern.png'); background-color: #f13d3d; min-height: 100px; min-width: 100%;  background-size: 30%;   background-position: center 1050px;
      " class="shadow" >
      <div class="text-center my-5">
        <h1 class="text-white">Edição</h1>
      </div> 
    </div>
  </div>

  <div class="row">
    <a href="edicaoUsuario.php?<?=$_SESSION['id_usuario']?>" class="btn btn-outline-danger btn-lg col-md-6 mr-3 float-left mb-4 mt-5 offset-md-3" name="btnUsuarios">Editar meus dados de acesso </a>
    <a href="edicaoCliente.php?<?=$_SESSION['fk_usuario']?>" class="btn btn-outline-secondary btn-lg col-md-6 mr-3 mb-4 offset-md-3" name="btnClientes">Editar meus dados pessoais</a>
    <a href="edicaoEmpresa.php?<?=$_SESSION['fk_usuario']?>" class="btn btn-outline-secondary btn-lg col-md-6 mr-3 mb-4 offset-md-3" name="btnClientes">Editar dados da minha Empresa</a>
    <a href="edicaoRestaurante.php?<?=$_SESSION['fk_usuario']?>" class="btn btn-outline-secondary btn-lg col-md-6 mr-3 mb-4 offset-md-3" name="btnClientes">Editar dados do meu Restaurante</a>
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
