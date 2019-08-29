<?php 
require_once"head.php";
require_once "classes/site.class.php";
require_once"head.php";
?>

<header>

  <link rel="shortcut icon" type="image/x-icon" href="./icone.ico">
  <header>
    <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #de2828; width: 100%;">
      <a href="index.php"><img src="media/images/cheffmenu2.png" style="height: 65px; width: 150px"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-light" href="index.php" style="margin-left: 10px;">Página inicial <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="login.php" style="margin-left: 10px;">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="contato.php" style="margin-left: 10px;">Contato</a>
          </li>        

          <?php if(isset($_SESSION['logado'])) { ?>
            <li class="nav-item">
              <a class="nav-link text-light" href="edicao.php" style="margin-left: 10px;">Edição</a>
            </li>
          <?php } ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">
              Assinaturas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="cardapio.php">Cardápio do dia</a>
              <a class="dropdown-item" href="combos.php">Pacotes</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">
              Cadastro
            </a>

            <?php if(!isset($_SESSION['logado'])) { ?>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <a class="dropdown-item" href="CadastroCliente.php">Cliente</a>
                <a class="dropdown-item" href="CadastroEmpresa.php">Empresa</a>
                <a class="dropdown-item" href="CadastroRestaurantes.php">Restaurante</a>
              </div>
            <?php } ?>

          </li>  
        </ul>
        <?php Site::Navbar(); ?>

        <form action="buscar.php" method="POST" target="principal" class="form-inline my-2 my-lg-0">
         <input name="buscar" type="text" class="form-control mr-sm-2" size="10" placeholder="Vai pedir o que?" aria-label="Search">
         <input type="submit" value="buscar" class="btn my-2 my-sm-0 text-light" style="background-color: rgb(143, 19, 10);">
       </form>
     </div>
   </nav>
 </header>