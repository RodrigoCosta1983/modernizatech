<?php

require_once('assets/vendor/src/Exception.php');
require_once('assets/vendor/src/PHPMailer.php');
require_once('assets/vendor/src/SMTP.php');

use phpmailer\phpmailer\phpmailer;
use phpmailer\phpmailer\smt;
use phpmailer\phpmailer\exceptions;

$mail = new PHPMailer(true);
 
try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'rodrigo.costa764@gmail.com';
	$mail->Password = 'Ariane1983';
	$mail->Port = 587;
 
	$mail->setFrom('hcarla24@gmail.com'); 
	$mail->addAddress('rodrigo25.info@globomail.com');

	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via gmail Canal TI';
	$mail->Body = 'Chegou o email teste do <strong>Canal TI</strong>';
	$mail->AltBody = 'Chegou o email teste do Canal TI';
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}



?>