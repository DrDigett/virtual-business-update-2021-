<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "tourvirtual@virtualbusiness.pe";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['telf']) ||
!isset($_POST['mensaje'])) {

echo "<script language='javascript'>
alert('Alerta: Hubo un error al enviar el mensaje. Intentalo de nuevo. Gracias.');
window.location.href = 'http://virtualbusiness.pe/';
</script>";
die();
}

$email_message = "RESPUESTA DEL FORMULARIO DE CONTACTO:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Telefono: " . $_POST['telf'] . "\n";
$email_message .= "Mensaje: " . $_POST['mensaje'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

//echo "¡El formulario se ha enviado con éxito!";
echo "<script language='javascript'>
alert('Gracias por registrar sus datos.');
window.location.href = 'http://virtualbusiness.pe/';
</script>";
}
?>