<?php if (isset($alerta)) { ?>
	<div class="alert alert-<?=$alerta['tipo']?>">
		<?=$alerta['mensagem']?>
	</div>
<?php } ?>