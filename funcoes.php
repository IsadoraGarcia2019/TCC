<?php

	//incluir o phpmailer
require_once"phpmailer/class.phpmailer.php";

	//definições de cesso
define('USUARIO', 'deliiverycheff@gmail.com');
define('SENHA', 'cheffdelivery2019');

	//criando uma função de envio de e-mails
function enviar_email($para, $de, $de_nome, $copia, $assunto, $corpo) {

	//instanciando um objeto do mailer
	$mail = new PHPMailer();

	//ativando caracetres UTF8
	$mail->CharSet = "UTF-8";
	//mudando a codificação para o UTF-8 funcionar
	$mail->Encoding = "base64";
	//mensagem é HTML?
	$mail->IsHTML(true);
	//ativar o SMTP
	$mail->IsSMTP();
	//ativando a autenticãção via SMTP
	$mail->SMTPAuth = true;
	//definindo o certificado do SMTP
	$mail->SMTPSecure = 'ssl';
	//servidro SMTP
	$mail->Host = 'smtp.gmail.com';

	// $mail->Host = 'mail.cheffdelivery.cf';

	//porta de envio de e-mails do servidor
	$mail->Port = 465;
	//passando o usuario para conectar
	$mail->Username = USUARIO;
	//passando a senha do usuario
	$mail->Password = SENHA;

	//definindo o remetente
	$mail->SetFrom($de, $de_nome);
	//definindo o assunto
	$mail->Subject = $assunto;
	//defininsdo o corpo do e-mail
	$mail->Body = $corpo;
	//definindo o destinatario
	$mail->AddAddress($para);
		//definindo a copia do e-mail
	// $mail->AddCC($copia);
	//definindo a copia OCULTA
	$mail->AddBCC($copia);

	if ($mail->Send()) {
		return true;
	} else {
		return $mail->ErrorInfo;
	}
}

?>