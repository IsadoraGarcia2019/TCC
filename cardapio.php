	<?php

require_once"head.php";

require_once"include/conexao.php";

$lista = "SELECT * FROM cardapio_dia WHERE DATE(data_cardapio) = CURRENT_DATE() AND excluido <> 'sim'";
$queryCardapio = mysqli_query($con, $lista);
$lista = mysqli_fetch_all($queryCardapio, MYSQLI_ASSOC);

$usuariosql = "SELECT * FROM usuarios 
          JOIN clientes ON clientes.id = usuarios.fk_tipo
          WHERE usuarios.id = {$_SESSION['id_usuario']}";
$queryusuario = mysqli_query($con, $usuariosql);
$usuario = mysqli_fetch_assoc($queryusuario);

// alterando fuso horario
date_default_timezone_set('America/Sao_Paulo');
$agora = date('H');

$hora_inicio_cafe = 5;
$hora_termino_cafe = 8;

$hora_inicio_almoco = 13;
$hora_termino_almoco = 15;

$hora_inicio_janta = 19;
$hora_termino_janta = 21;

if ($agora >= $hora_inicio_cafe && $agora <= $hora_termino_cafe)
	$texto_topo = "café da manhã";

if ($agora >= $hora_inicio_almoco && $agora <= $hora_termino_almoco)
	$texto_topo = "almoço";

if ($agora >= $hora_inicio_janta && $agora <= $hora_termino_janta)
	$texto_topo = "jantar";

// meus pedidos do dia
$sqlPedidosDia = "SELECT
                e.id,
                c.nome_comida,
                e.hora_selecao,
                e.entregue
            FROM escolha_cardapio_dia e
            LEFT JOIN usuarios u ON u.id = e.id_usuario
            LEFT JOIN cardapio_dia c ON c.id_cardapio = e.id_caradapio
            WHERE id_usuario = {$_SESSION['id_usuario']} AND DATE(hora_selecao) = CURRENT_DATE()";
$queryPedidosDia = mysqli_query($con, $sqlPedidosDia);
$pedidosDia = mysqli_fetch_all($queryPedidosDia, MYSQLI_ASSOC);

$total_exibido = 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Cardápio do dia</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="media/css/main.css">
</head>
<body >
	
	<?php require_once "header.php"; ?>
	<div class="row" style="max-width: 100%; margin-left: 0 !important; margin-right: 0 !important;">
		<div class="shadow" style="  background-color: #f2392c ;
		background-image: url('media/images/food-pattern.png');
		min-height: 100px; 
		min-width: 100%; 
		background-size: 30%; 
		background-position: center 1050px;">
		<div class="text-center my-5" >
			<h1 class="text-white pt-3">Cardápio do dia</h1>
		</div> 
	</div>
</div>
<?php if ($_SESSION['tp_usuario'] != 'administrador') { ?>

	<div class="col-10 col-md-6 mt-5 mb-5 pt-5 offset-md-3 offset-1" style="margin-top: -30px !important;" >
		<div class="card shadow" style="margin-right: auto; margin-left: auto;">
			<div class="card-body" >

                <?php require_once "include/alerta.php"; ?>

                <h3 class="text-left mb-3">Meus pedidos de hoje:</h3>

                <div class="row">
                    <?php foreach ($pedidosDia as $item) { ?>
                        <div class="col-12">
                            <div class="card mb-0 p-3 mt-2">
                                <div class="row">
                                    <div class="col-4 text-center   ">
                                        <?php if ($texto_topo == "café da manhã") : ?>
                                            <p class="font-weight-bold text-warning h3 p-2"><?=ucwords($texto_topo);?></p>
                                        <?php endif; ?>
                                        <?php if ($texto_topo == "almoço") : ?>
                                            <p class="font-weight-bold text-danger h3 p-2"><?=ucwords($texto_topo);?></p>
                                        <?php endif; ?>
                                        <?php if ($texto_topo == "jantar") : ?>
                                            <p class="font-weight-bold text-info h3 p-2"><?=ucwords($texto_topo);?></p>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-8">
                                        <h5 class="card-title mb-1"><?=utf8_encode($item['nome_comida'])?></h5>
                                        <p class="card-title mb-1"><?=date_format(date_create($item['hora_selecao']), 'd/m/y H:i')?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (count($pedidosDia) <= 0) : ?>
                        <div class="col-12 text-center mt-4">
                            <h4 class="mb-2 text-dark">Você não fez pedidos hoje =(</h4>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
		</div>
	</div>

	<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1 mb-5" style="margin-top: -30px !important;" >
		<div class="card shadow" style="margin-right: auto; margin-left: auto;">
			<div class="card-body" > 

				<div class="row">
					<?php if (!($agora >= $hora_inicio_cafe && $agora <= $hora_termino_cafe) && !($agora >= $hora_inicio_almoco && $agora <= $hora_termino_almoco) && !($agora >= $hora_inicio_janta && $agora <= $hora_termino_janta)) { ?>
						<div class="col-12">
							<div class="card border-danger mb-3" >
								<div class="card-body text-danger">
									<h3 class="mb-4 text-dark">Infelizmente não estamos aceitando pedidos no momento <i class="far fa-sad-cry"></i></h3>
								</div>

								<p class="p-3 text-danger">Os horários dos pedidos são:</p>

								<span class="font-weight-bold pr-1 pl-3">Café da manhã:</span><p class="pl-3">Entre 5h e 8h.</p>
								<span class="font-weight-bold pr-1 pl-3">Almoço:</span><p class="pl-3">Entre 10h e 13h.</p>
								<span class="font-weight-bold pr-1 pl-3">Janta:</span><p class="pl-3"> Entre 19h e 21h.</p>
							</div>
						</div>
					<?php } else { ?>
						<div class="col-12">
							<h3 class="mb-4">Opções para o <?=$texto_topo?>:</h3>
						</div>

                        <?php if ($texto_topo == "café da manhã" && $usuario['saldo_cafe'] <= 0) : ?>
                            <div class="col-12 text-center">
                                <h4 class="mb-2">Você não tem saldos de café da manhã =(</h4>
                                <a href="pacotes.php" class="btn btn-success mt-3 mb-2">
                                    Comprar novo pacote
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if ($texto_topo == "almoço" && $usuario['saldo_almoco'] <= 0) : ?>
                            <div class="col-12 text-center">
                                <h4 class="mb-2">Você não tem saldos de almoço =(</h4>
                                <a href="pacotes.php" class="btn btn-success mt-3 mb-2">
                                    Comprar novo pacote
                                </a>
                            </div>
                        <?php endif; ?>

                        <?php if ($texto_topo == "jantar" && $usuario['saldo_jantar'] <= 0) : ?>
                            <div class="col-12 text-center">
                                <h4 class="mb-2">Você não tem saldos de jantar =(</h4>
                                <a href="pacotes.php" class="btn btn-success mt-3 mb-2">
                                    Comprar novo pacote
                                </a>
                            </div>
                        <?php endif; ?>
					<?php } ?>

					<?php foreach ($lista as $item) { ?>
						<?php if (($agora >= $hora_inicio_cafe && $agora <= $hora_termino_cafe && $item['categoria_comida'] == 'cafe_manha' && $usuario['saldo_cafe'] > 0) ||
                                  ($agora >= $hora_inicio_almoco && $agora <= $hora_termino_almoco && $item['categoria_comida'] == 'almoco' && $usuario['saldo_almoco'] > 0) ||
                                  ($agora >= $hora_inicio_janta && $agora <= $hora_termino_janta && $item['categoria_comida'] == 'jantar' && $usuario['saldo_jantar'] > 0)) {
						    $total_exibido++; ?>
							<div class="col-6 mb-4">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title"><?=$item['nome_comida']?></h5>

                                        <?php if ($_SESSION['tp_usuario'] != 'administrador') { ?>
                                            <a href="finalizacaoCardapio.php?id=<?=$item['id_cardapio']?>" class="btn btn-danger col-md-12" name="btnPedir">Pedir agora</a>
                                        <?php } ?>
									</div>
								</div>
							</div>
						<?php } ?> 
					<?php } ?>
                    <?php if (count($lista)<=0 || $total_exibido==0) : ?>
                        <div class="col-12 text-center">
                            <h4 class="mb-2">Nenhuma opção para o dia de hoje =(</h4>
                            <p>Aguarde, estamos atualizando as informações...</p>
                        </div>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if ($_SESSION['tp_usuario'] == 'administrador') { ?>
	<div class="col-10 col-md-6 mt-5 offset-md-3 offset-1 mb-5 pb-5" style="margin-top: -30px !important;" >
		<div class="card shadow" style="margin-right: auto; margin-left: auto;">
			<div class="card-body" > 

				<div class="row">
                    <div class="col-12">
                        <h3 class="mb-4">Registros do dia de hoje:</h3>
                    </div>
					<?php foreach ($lista as $item) { ?>
                        <div class="col-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-1"><?=$item['nome_comida']?></h5>
                                    <p class="card-text m-0 p-0"><?=ucwords(str_replace('_', ' ', $item['categoria_comida']))?></p>
                                    <a href="edicaoCardapio.php?id=<?=$item['id_cardapio']?>" class="btn btn-dark col-md-12 mt-3">Editar Cardápio</a>
                                </div>
                            </div>
                        </div>
					<?php } ?>
                    <?php if (count($lista)<=0) : ?>
                        <div class="col-12 text-center">
                            <h4 class="mb-2">Nenhuma opção para o dia de hoje =(</h4>
                            <a href="CadastroCardapio.php" class="btn btn-success mt-3 mb-2">
                                Cadastrar novo item
                            </a>
                        </div>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>


<?php require_once"footer.php"; ?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/superfish.min.js"></script>	
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>