<?php
session_start(); // Inicia la sesión para usar variables de sesión
require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $apellido = htmlspecialchars(trim($_POST['apellido']));
    $email = htmlspecialchars(trim($_POST['email']));
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $notas = htmlspecialchars(trim($_POST['notas']));

    // Validar el email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor
            $mail->isSMTP();
            $mail->Host = 'smtp.mail.yahoo.com';
            $mail->SMTPAuth = true;
            $mail->Username = $_ENV['YAHOO_EMAIL'];
            $mail->Password = $_ENV['YAHOO_PASSWORD'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Destinatarios
            $mail->setFrom($mail->Username, 'Dam Seta');
            $mail->addAddress($email);

            // Contenido del correo
            $mail->isHTML(true);
            $mail->Subject = 'Nuevo mensaje de contacto';
            $mail->Body = "Nombre: $nombre $apellido<br><br>Email: $email<br>Telefono: $telefono<br><br>Notas: $notas";

            // Enviar el correo
            $mail->send();
            
            // Establecer una variable de sesión para el mensaje enviado
            $_SESSION['mensaje_enviado'] = true;
            header('Location: ../view/contact.php');
            exit;
        } catch (Exception $e) {
            $_SESSION['mensaje_error'] = "Error al enviar el mensaje: {$mail->ErrorInfo}";
            header('Location: ../view/contact.php');
            exit;
        }
    } else {
        $_SESSION['mensaje_error'] = "Email no válido.";
        header('Location: ../view/contact.php');
        exit;
    }
} else {
    echo "Método de solicitud no válido.";
}