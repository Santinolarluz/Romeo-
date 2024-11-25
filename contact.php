<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje enviado</title>
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>
    <div class="confirmation-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Captura los valores del formulario
            $name = htmlspecialchars(trim($_POST["name"]));
            $email = htmlspecialchars(trim($_POST["email"]));
            $phone = htmlspecialchars(trim($_POST["phone"]));
            $message = htmlspecialchars(trim($_POST["message"]));

            // Validación simple
            if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
                // Datos del correo
                $to = "romeososastudio@gmail.com";
                $subject = "RomeososaStudio";
                $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
                $headers = "From: " . $email . "\r\n";
                $headers .= "Reply-To: " . $email . "\r\n";
                $headers .= "X-Mailer: PHP/" . phpversion();

                // Intentar enviar el correo
                if (mail($to, $subject, $body, $headers)) {
                    echo '<h1 class="message-success">Mensaje enviado con Exito</h1>';
                    echo '<p class="message-info">Gracias, ' . $name . '. nos contactaremos contigo pronto.</p>';
                } else {
                    echo '<h1 class="message-error">Error al enviar el mensaje</h1>';
                    echo '<p class="message-info">Por favor, Intente de nuevo o mas tarde</p>';
                }
            } else {
                echo '<h1 class="message-error">Por favor, complete todos los campos.</h1>';
            }
        }
        ?>
        <a href="index.php"><img src="assets/img/Romeo.png" alt="Imagen de éxito" class="success-image"></a>
    </div>
</body>
</html>
