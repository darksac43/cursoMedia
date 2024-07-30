<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (empty($name) || empty($email) || empty($message)) {
        echo "Todos los campos son obligatorios.";
    } else {
        $to = "cursomedia7@gmail.com"; // Reemplaza con tu dirección de correo
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado con éxito.";
        } else {
            echo "Hubo un error al enviar el mensaje.";
        }
    }
} else {
    echo "Método de solicitud no válido.";
}
?>

