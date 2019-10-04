<?php

    require_once"head.php";
    require_once"include/conexao.php";

    $sql = "SELECT
                e.id,
                cli.nome_cliente,
                CONCAT(en.rua, ', ', en.bairro, '<br>', en.cidade, ', ', en.estado) as endereco,
                c.nome_comida,
                e.hora_selecao,
                e.entregue
            FROM escolha_cardapio_dia e
            LEFT JOIN usuarios u ON u.id = e.id_usuario
            LEFT JOIN cardapio_dia c ON c.id_cardapio = e.id_caradapio
            LEFT JOIN clientes cli ON cli.id = u.fk_tipo
            LEFT JOIN enderecos en ON en.id_endereco = e.id_endereco";
    $query = mysqli_query($con, $sql);
    $lista = mysqli_fetch_all($query, MYSQLI_ASSOC);

    // Verificar se existe alerta via COOKIE
    if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
        $alerta = unserialize($_COOKIE['alerta']);
        setcookie('alerta');
    }

    if (!isset($_SESSION['logado']) && $_SESSION['logado'] == false) {
        header('Location:erros.php?mesagem= Você não está logado e por isso não pode vizualizar esta página!');
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Entregas do Dia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="media/css/estilos.css">
    <link rel="stylesheet" href="media/css/main.css">

</head>
<body style="background-color: rgb(235, 226, 225);">

    <?php require_once "header.php"; ?>

    <div class="row" style="max-width: 100%; margin-left: 0 !important; margin-right: 0 !important;">
        <div class="shadow " style="background-color: #1a1818 ;background-image: url('media/images/food-pattern.png'); min-height: 100px; min-width: 100%; background-size: 30%; background-position: center 1050px;">
            <h1 class="text-white mb-5 text-center mt-5">Entregas do dia</h1>
        </div>
    </div>
</div>

<div class="row" style="max-width: 100%; margin-left: 0 !important; margin-right: 0 !important;">
<div class="container">
    <div class="col-12 mt-5 " style="margin-top: -30px !important; min-height: 300px;">
        <div class="card shadow" style="margin-right: auto; margin-left: auto;">
            <div class="card-body" >

                <div class="col-md-12">
                    <?php require_once"include/alerta.php"; ?>
                </div>

                <table class="table table-light mt-3 table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-left">Id</th>
                        <th class="text-left">Cliente</th>
                        <th class="text-left">Endereço</th>
                        <th class="text-left">Pedido</th>
                        <th class="text-left">Horario Pedido</th>
                        <th class="text-left">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($lista as $item) { ?>
                    <tr>
                        <td class="py-4 text-left"><?=utf8_encode($item['id'])?></td>
                        <td class="py-4 text-left"><?=utf8_encode($item['nome_cliente'])?></td>
                        <td class="py-4 text-left"><?=utf8_encode($item['endereco'])?></td>
                        <td class="py-4 text-left"><?=utf8_encode($item['nome_comida'])?></td>
                        <td class="py-4 text-left">
                            <i class="fas fa-clock text-dark mr-2"></i>
                            <?=date_format(date_create($item['hora_selecao']), 'H:i')?>
                        </td>
                        <td class="py-4 text-left">
                            <?php switch ($item['entregue']) {
                                case "sim":
                                    echo '<i class="fas fa-check text-success mr-3"></i>';
                                    echo "<span class='text-success'>Sim</span>";
                                    break;
                                case "nao":
                                    echo '<i class="fas fa-times text-danger mr-3"></i>';
                                    echo "<span class='text-danger'>Não</span>";
                                    break;
                            }
                            ?>
                        </td>
                        <?php if($item['entregue']!='sim') : ?>
                            <td class="text-left">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alterar Entrega</button>
                                    <div class="dropdown-menu" name="BtnStatus" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" name="Pendente" href="backends/alterarEntrega.php?entregue=sim&id=<?=$item['id']?>">Entregue</a>
                                    </div>
                                </div>
                            </td>
                        <?php else : ?>
                            <td class="py-4 text-left">
                                <i class="fas fa-lock text-dark mr-3"></i>
                                <small class="text-italic">Já entregue.</small>
                            </td>
                        <?php endif; ?>
                        <?php } ?>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
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

