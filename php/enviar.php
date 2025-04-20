<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST["nombre"]);
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $mensaje = htmlspecialchars($_POST["mensaje"]);

        $para = "universosalchicha1@gmail.com"; 
        $asunto = "Nuevo mensaje de $nombre desde tu sitio web";
        $contenido = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";
        $headers = "From: $email";

        if (mail($para, $asunto, $contenido, $headers)) {
            echo "S";
        } else {
            echo "N";
        }
    }
?>