  <?php 
  require_once"head.php";
  require_once"classes/site.class.php";
  require_once"classes/login.class.php";
  $site = new Site();
  $site->Session();
  ?>

  <header>

    <link rel="shortcut icon" type="image/x-icon" href="./icone.ico">
    <nav class="navbar navbar-expand-lg navbar-light"  style="background-color: #de2828; width: 100%;">
      <a href="index.php"><img src="media/images/cheffmenu2.png" style="height: 65px; width: 150px"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
          <?php if ($_SESSION['tp_usuario'] != 'administrador') { ?>
            <li class="nav-item active">
              <a class="nav-link text-light" href="index.php" style="margin-left: 10px;">Página Inicial <span class="sr-only">(current)</span></a>
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
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">
                  Minhas Informações
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="meuspedidos.php">Meus Pedidos</a>
                  <a class="dropdown-item" href="enderecos.php">Meus Endereços</a>
                </div>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">
                  Assinaturas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="cardapio.php">Cardápio do dia</a>
                  <a class="dropdown-item" href="pacotes.php">Pacotes</a>
                </div>
              </li>
            <?php } ?>
            <?php if(!isset($_SESSION['logado'])) { ?>
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">
                Assinaturas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="cardapio.php">Cardápio do dia</a>
                <a class="dropdown-item" href="pacotes.php">Pacotes</a>
              </div>
            </li>  
            <li class="nav-item">
              <a class="nav-link text-light" href="CadastroCliente.php" style="margin-left: 10px;">Cadastrar-me</a>
            </li>  
          <?php } ?>
        <?php } ?>
        <?php if ($_SESSION['tp_usuario'] == 'administrador') { ?>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-light" href="index.php" style="margin-left: 10px;">Página Inicial <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">Cadastro </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <a class="dropdown-item" href="CadastroPacotes.php">Cadastrar pacotes</a>
                <a class="dropdown-item" href="CadastroCardapio.php">Cadastrar cardápio do dia</a>
              </div>
            </li>  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">Vizualizar</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <a class="dropdown-item" href="pacotes.php">Pacotes</a>
                <a class="dropdown-item" href="cardapio.php">Cardápio do dia</a>
                <a class="dropdown-item" href="vendas.php">Vendas</a>
                <a class="dropdown-item" href="entregas.php">Entregas do dia</a>
              </div>
            </li>
          </ul>
        <?php } ?>
      </ul>
      <?php Site::Navbar(); ?>
    </div>
  </nav>
</header>