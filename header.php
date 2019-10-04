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
      <a href="index.php"><img src="media/images/CHEFF DELIVERY.png" style="height: 85px;"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
          <?php if ($_SESSION['tp_usuario'] != 'administrador') { ?>
            <li class="nav-item active">
              <a class="nav-link text-light" href="index.php" style="margin-left: 10px;">Página Inicial</a>
            </li>
            <?php if(isset($_SESSION['logado'])) { ?>
                <li class="nav-item">
                  <a class="nav-link text-light font-weight-bold" href="cardapio.php" style="margin-left: 10px;">
                      Cardápio do dia
                      <i class="fas fa-star ml-2 text-warning"></i>
                  </a>
              </li>
            <?php } ?>
              <li class="nav-item">
                  <a class="nav-link text-light" href="pacotes.php" style="margin-left: 10px;">Pacotes</a>
              </li>
              <?php if(isset($_SESSION['logado'])) { ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown_menu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">
                  Minhas Informações
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown_menu">
                    <a class="dropdown-item" href="edicaoCliente.php?id=<?=$_SESSION['fk_usuario']?>">Editar informações pessoais</a>
                    <a class="dropdown-item" href="edicaoUsuario.php?id=<?=$_SESSION['id_usuario']?>">Editar dados de acesso</a>
                    <a class="dropdown-item" href="meuspedidos.php">Meus pedidos</a>
                    <a class="dropdown-item" href="enderecos.php">Meus endereços</a>
                </div>
              </li>
              <?php } ?>
              <li class="nav-item">
                  <a class="nav-link text-light" href="contato.php" style="margin-left: 10px;">Contato</a>
              </li>
          <?php } ?>
        <?php if ($_SESSION['tp_usuario'] == 'administrador') { ?>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-light" href="index.php" style="margin-left: 10px;">Página Inicial</a>
            </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">Pacotes </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                      <a class="dropdown-item" href="pacotes.php">Visualizar pacotes</a>
                      <a class="dropdown-item" href="CadastroPacotes.php">Cadastrar pacotes</a>
                  </div>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left: 10px;">Cardápio do dia </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                  <a class="dropdown-item" href="cardapio.php">Visualizar cardápio do dia</a>
                  <a class="dropdown-item" href="CadastroCardapio.php">Cadastrar cardápio do dia</a>
              </div>
            </li>
              <li class="nav-item active">
                  <a class="nav-link text-light" href="vendas.php" style="margin-left: 10px;">Vendas</a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link text-light" href="entregas.php" style="margin-left: 10px;">Entregas do dia</a>
              </li>
          </ul>
        <?php } ?>
      </ul>
      <?php if(isset($_SESSION['nome_usuario'])) { ?>
          <div class="text-white">
              Olá, <?=$_SESSION['nome_usuario']?>
              <a href="backends/logoff.php" class="btn btn-dark ml-3 mr-3">SAIR</a>
          </div>
      <?php } else { ?>
          <div class="text-white">
              <a href="login.php" class="btn btn-success ml-3 mr-1">LOGIN</a>
              <a href="CadastroCliente.php" class="btn btn-dark ml-1 mr-3">CADASTRAR-SE</a>
          </div>
      <?php } ?>
    </div>
  </nav>
</header>