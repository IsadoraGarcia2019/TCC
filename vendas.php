 <?php

 require_once"head.php";

 require_once"include/conexao.php";



 $lista = "SELECT finalizacao.*, p.*, finalizacao.id as id_finalizacao, p.id as id_pacote FROM finalizacao
 JOIN pacotes p ON p.id = finalizacao.id_pacote";
 $queryFinalizacao = mysqli_query($con, $lista);
 $lista = mysqli_fetch_all($queryFinalizacao, MYSQLI_ASSOC);

  // Verificar se existe alerta via COOKIE
 if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
 	$alerta = unserialize($_COOKIE['alerta']);
 	setcookie('alerta');
 }

 if ($_SESSION['tp_usuario'] != 'administrador') {
 	header('Location:erros.php?mesagem= Somente o administrador pode ter acesso à essa página!');
 }
 ?> 
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
 	<meta charset="utf-8">
 	<title>Vendas</title>
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="media/css/estilos.css">
 	<link rel="stylesheet" href="media/css/main.css">

 </head>
 <body style="background-color: rgb(235, 226, 225);">

 	<?php
 	require_once "header.php";
 	?>

 	<div class="row">
 		<div class="shadow " style="background-color: #1a1818 !important; background-image: url('media/images/food-pattern.png');min-height: 100px; min-width: 100%; background-size: 30%; background-position: center 1050px;"> 
 			<div class="text-center my-5">
 				<h1 class="text-white mb-5">Vendas</h1>
 			</div> 
 		</div>
 	</div>

 	<div class="col-10 col-md-10 mt-5 offset-md- offset-1" style="margin-top: -30px !important;">
 		<div class="card shadow" style="margin-right: auto; margin-left: auto;">
 			<div class="card-body" > 
 				<table class="table table-light col-md-12 mt-3 table-striped table-hover">
 					<thead>
 						<tr>
 							<th class="text-center">Id</th>
 							<th class="text-center">Data da compra</th>
 							<th class="text-left">Pacote</th>
 							<th class="text-left">Forma de pagamento</th>
 							<th class="text-left">Status do pagamento</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php foreach ($lista as $item) { ?>
 							<tr>
 								<td class="py-4 text-center text-danger"><?=utf8_encode($item['id_finalizacao'])?></td>
 								<td class="py-4 text-center"><?=date_format(date_create($item['data_compra']), 'd/m/Y H:i:s')?></td>
 								<td class="py-4 text-left"><a href="edicaoPacotes.php?id=<?=$item['id_pacote']?>"><?=utf8_encode($item['nome_pacote'])?></a></td>
 								<td class="py-4">
 									<?php switch ($item['forma_pagamento']) { 
 										case "dinheiro":
 										echo '<i class="far fa-money-bill-alt text-success mr-3"></i>';
 										echo "Dinheiro";
 										break;
 										case "boleto_bancario":
 										echo '<i class="fas fa-money-check-alt text-info mr-3"></i>';
 										echo "Boleto Bancário";
 										break;
 										case "cartao_credito":
 										echo '<i class="fas fa-credit-card text-danger mr-3"></i>';
 										echo "Cartão de Crédito";
 										break;
 										case "cartao_debito":
 										echo '<i class="fas fa-credit-card text-warning mr-3"></i>';
 										echo "Cartão de Débito";
 										break;
 									}
 									?>
 								</td>
                                <td class="py-4 text-left">
                                    <?php switch ($item['status_pagamento']) {
                                            case "pago":
                                                echo '<i class="fas fa-check text-success mr-3"></i>';
                                                echo "<span class='text-success'>Pago</span>";
                                                break;
                                            case "pendente":
                                                echo '<i class="fas fa-clock text-warning mr-3"></i>';
                                                echo "<span class='text-warning'>Pendente</span>";
                                                break;
                                            case "atrasado":
                                                echo '<i class="fas fa-times text-danger mr-3"></i>';
                                                echo "<span class='text-danger'>Atrasado</span>";
                                                break;
                                        }
                                    ?>
                                </td>
                                <?php if($item['status_pagamento']!='pago') : ?>
                                <td class="text-center pl-5">
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alterar pagamento</button>
                                        <div class="dropdown-menu" name="BtnStatus" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-item" name="Pendente" href="backends/alterarVenda.php?status_pagamento=pendente&id=<?=$item['id_finalizacao']?>">Pendente</a>
                                            <a class="dropdown-item" name="Pago" href="backends/alterarVenda.php?status_pagamento=pago&id=<?=$item['id_finalizacao']?>">Pago</a>
                                            <a class="dropdown-item" name="Atrasado" href="backends/alterarVenda.php?status_pagamento=atrasado&id=<?=$item['id_finalizacao']?>">Atrasado</a>
                                        </div>
                                    </div>
                                </td>
                                <?php else : ?>
                                <td class="py-4 text-center">
                                    <i class="fas fa-lock text-dark mr-3"></i>
                                    <small class="text-italic">Não pode alterar depois de pago.</small>
                                </td>
                                <?php endif; ?>





 						<?php } ?>
 					</tr>
 				</tbody>
 			</table>
 		</div>
 	</div>
 </div>

 <?php
//INCLUSÃO DO RODAPÉ
 require_once "footer.php";
 ?>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>

