<?php

require_once"include/conexao.php";
//na pagina de categoria
$categoria = $_POST["categoria"];
$sql = mysqli_query("SELECT * FROM restaurantes WHERE categoria LIKE %$categoria% ORDER BY id", $con);


?>