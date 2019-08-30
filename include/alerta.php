<?php

	unset($alerta);

	if (isset($_COOKIE['alerta']) && !is_null($_COOKIE['alerta'])) {
	  $alerta = unserialize($_COOKIE['alerta']);
	  setcookie('alerta', null, time() - 1);
	}

	if (isset($alerta)) {
?>
	<div class="alert alert-<?=$alerta['tipo']?>">
		<?=$alerta['mensagem']?>
	</div>
<?php } ?>
