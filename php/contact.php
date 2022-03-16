<?php

$field_first_name = $_POST['Nombre'];

$field_subject = $_POST['Asunto'];

$field_email = $_POST['email'];

$field_phone = $_POST['telefono'];

$field_message = $_POST['Mensaje'];


$mail_to = 'aneudysq@gmail.com';

$subject = 'Solicitud de Mebresia'.$field_first_name;

$body_message = 'De: '.$field_first_name."\n";

$body_message .= 'Asunto: '.$field_subject."\n";

$body_message .= 'E-mail: '.$field_email."\n";

$body_message .= 'Telefono: '.$field_phone."\n";

$body_message .= 'Mensaje: '.$field_message;

$headers = 'De: '.$field_email."\r\n";

$headers .= 'Responder a: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		//alert('Gracias por el mensaje. Nos pondremos en contacto con usted en breve.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		//alert('Mensaje fallido. Por favor, envíe un correo electrónico a gordon@template-help.com');
		window.location = 'index.html';
	</script>
<?php
}
?>