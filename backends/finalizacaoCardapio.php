<?php 

require_once"include/conexao.php";

require_once"classes/site.class.php";
$obj = new Site();

	// Recuperar ID do pacote
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}

	// Verificando ação de comprar
if (isset($_POST['btnComprar'])) {

	// inserindo edição na tabela
	$sql = "INSERT INTO escolha_cardapio_dia 
            VALUES (
                DEFAULT,
                '{$_SESSION['id_usuario']}',
                '{$_POST['id_cardapio']}',
                '{$_POST['id_endereco']}',
                now(),
                'nao'
            )";

    // Executando o SQL
    if (mysqli_query($obj->con, $sql)) {
        $id = mysqli_insert_id($con);
        $id = mysqli_insert_id($con);

        // Capturando tipo de cardapio
        $sqlTipoCardapio = "SELECT * FROM cardapio_dia WHERE id_cardapio = {$_POST['id_cardapio']}";
        $queryTipoCardapio = mysqli_query($obj->con, $sqlTipoCardapio);
        $resultadoTipoCardapio = mysqli_fetch_assoc($queryTipoCardapio);

        switch ($resultadoTipoCardapio['categoria_comida']) {
            case "cafe_manha":
                $saldo = "saldo_cafe";
                break;
            case "almoco":
                $saldo = "saldo_almoco";
                break;
            case "jantar":
                $saldo = "saldo_jantar";
                break;
        }

        $sqlAbaixaSaldo = "UPDATE clientes JOIN usuarios ON usuarios.fk_tipo = clientes.id SET $saldo = ($saldo - 1) WHERE usuarios.id = '{$_SESSION['id_usuario']}'";
        $queryAbaixaSaldo = mysqli_query($obj->con, $sqlAbaixaSaldo);

        $alerta['tipo'] = "success";
        $alerta['mensagem'] = "Sua pedido foi concluída com sucesso!";
        $alerta = serialize($alerta);

        setcookie('alerta', $alerta, time() + 120);

        header('Location: cardapio.php');
    } else{
        $alerta['tipo'] = "danger";
        $alerta['mensagem'] = "Erro ao concluir sua compra.";

        $alerta = serialize($alerta);

        setcookie('alerta', $alerta, time() + 120);

        header('Location: cardapio.php');
    }
}
?>