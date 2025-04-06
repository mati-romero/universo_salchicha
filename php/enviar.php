<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST["nombre"]);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $mensaje = htmlspecialchars($_POST["mensaje"]);

        $para = "matias.1993.romero@gmail.com"; 
        $asunto = "Nuevo mensaje de $nombre desde tu sitio web";
        $contenido = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";
        $headers = "From: $email";

        if (mail($para, $asunto, $contenido, $headers)) {
            echo "Mensaje enviado con éxito.";
        } else {
            echo "Hubo un error al enviar el mensaje.";
        }
    }
?>