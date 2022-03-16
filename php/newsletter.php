<?php
$field_email = $_POST['email'];

<<<<<<< HEAD
$mail_to = 'servicios@clubbodyshop.com';
$subject = 'Solicitud de Membresia '.$field_email;
=======

$body_message .= 'E-mail: '.$field_email."\n";

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		//alert('Gracias por el mensaje. Nos pondremos en contacto con usted en breve.');
		window.location = '/index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
<<<<<<< HEAD
		//alert('Message failed. Please, send an email to servicios@clubbodyshop.com');
=======
		//alert('Mensaje fallido. Por favor, envíe un correo electrónico a servicios@clubbodyshop.com.com');
>>>>>>> bec38b7bf420c64d1fd99404c54377fb076cf63b
		window.location = '/index.html';
	</script>
<?php
}
?>