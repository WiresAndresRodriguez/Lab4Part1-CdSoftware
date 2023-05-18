<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];
  
  // Configura la dirección de correo electrónico donde recibirás los mensajes del formulario
  $destinatario = "tucorreo@example.com";
  
  // Construye el cuerpo del mensaje
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Email: $email\n";
  $contenido .= "Mensaje:\n$mensaje\n";
  
  // Envía el correo electrónico
  $asunto = "Mensaje de formulario de contacto";
  $headers = "From: $nombre <$email>";
  
  if (mail($destinatario, $asunto, $contenido, $headers)) {
    echo "¡Gracias por tu mensaje! Nos pondremos en contacto contigo pronto.";
  } else {
    echo "Ha ocurrido un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
  }
}
?>
