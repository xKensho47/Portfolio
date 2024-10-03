<?php
session_start();
include './conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Verificación de credenciales del usuario
    $q = 
    "SELECT id_usuario, contraseña
     FROM usuarios
     WHERE email = ?";

    $stmt = $conexion->prepare($q);

    if (!$stmt) {
        echo "Error de preparación de consulta: " . $conexion->error;
        exit();
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_usuario, $contraseña_hash);
        $stmt->fetch();

        // Verificar contraseña
        if (password_verify($contraseña, $contraseña_hash)) {
            // Autenticación exitosa
            $_SESSION["id_usuario"] = $id_usuario;
            $_SESSION["email"] = $email;

            // Redirigir a la página de Proyectos
            header('Location: ../../index.php');
            exit();
        } else {
            // Contraseña incorrecta
            header('Location: ../../view/login.php?status=usuario_contra');
            exit();
        }
    } else {
        // El usuario no existe
        header('Location: ../../view/login.php?status=no_existe');
        exit();
    }
} else {
    echo "Método de solicitud no válido";
}
