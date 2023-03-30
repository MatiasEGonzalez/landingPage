<?php
// Obtener los valores de los campos de entrada del formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Crear el mensaje de correo electrónico
$para = 'gonzalez.m-emiliano@hotmail.com'; // Dirección de correo electrónico a la que se enviará el mensaje
$asunto = 'Nuevo mensaje enviado desde el formulario de contacto';
$mensaje = "Nombre: $nombre\nCorreo electrónico: $correo\nMensaje: $mensaje";
$headers = "From: $correo\r\nReply-To: $correo\r\n";

// Enviar el correo electrónico
mail($para, $asunto, $mensaje, $headers);

// Redirigir al usuario a una página de confirmación
header('Location: confirmacion.html');
exit();
?>
