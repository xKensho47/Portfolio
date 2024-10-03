<?php
session_start(); // Asegúrate de que la sesión esté iniciada
if (isset($_SESSION['id_usuario'])) {
    // Si ya hay una sesión activa, redirige a la página de proyectos
    header('Location: ../view/projects.php');
    exit();
}

// Mostrar el mensaje de error si existe
if (isset($_SESSION['mensaje_error'])) {
    echo '<div class="alert alert-danger login-alert">' . $_SESSION['mensaje_error'] . '</div>';
    unset($_SESSION['mensaje_error']);
}

include '../controller/conexion.php';
$omitStylesheet = true;
include "templates/header.php";
?>

<main class="main-principal">
    <section class="section-container">
        <article class="article-container">
            <form class="contact-form session-form" action="../controller/login_process.php" method="post">
                <h1 class="title form-title">Inicia sesión!</h1>
                <div class="form-group">
                    <label for="nombre">Ingrese su email:</label>
                    <input type="email" id="email" name="email" placeholder="Dirección de correo electrónico">
                </div>

                <div class="form-group">
                    <label for="email">Ingrese su contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group login-register">
                    <button class="login-button button__login-form" type="submit">Iniciar Sesión</button>
                    <a class="link-registro" href="register.php">¿Todavía no eres usuario? Regístrate.</a>
                </div>                
            </form>
        </article>
    </section>
</main>
<script src="../script/alerts.js"></script>
<?php include "templates/footer.php"; ?>
