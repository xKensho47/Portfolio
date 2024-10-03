<?php
session_start();
include './conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    // Verificar si el correo electrónico ya está en uso
    $q = "SELECT id_usuario 
          FROM usuarios 
          WHERE email = ?";

    $stmt = $conexion->prepare($q);
    if (!$stmt) {
        echo "Error de preparación de consulta: " . $conexion->error;
        exit();
    }

    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // El email ya está en uso
        header('Location: ../view/registro.php?status=ocupado');
        exit();
    } else {
        // Insertar el nuevo usuario en la base de datos
        $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);
        $conexion->begin_transaction();

        try {
            $q_insertar_usuario = 
                "INSERT INTO usuarios (nombre, apellido, email, contraseña)
                 VALUES (?, ?, ?, ?)";
            $stmt_insertar_usuario = $conexion->prepare($q_insertar_usuario);
            
            if (!$stmt_insertar_usuario) {
                throw new Exception("Error de preparación de consulta: " . $conexion->error);
            }

            $stmt_insertar_usuario->bind_param('ssss', $nombre, $apellido, $email, $contraseña_hash);
            $stmt_insertar_usuario->execute();

            $conexion->commit();

            // Redirigir al login tras el registro exitoso
            header('Location: ../view/login.php');
            exit();
        } catch (Exception $e) {
            $conexion->rollback();
            echo "Error en la inserción: " . $e->getMessage();
        }

        // Cerrar los statements después de las operaciones
        if (isset($stmt_insertar_usuario) && $stmt_insertar_usuario !== false) {
            $stmt_insertar_usuario->close();
        }
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "Método de solicitud no válido";
}
