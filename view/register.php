<?php
session_start();
if (isset($_SESSION['id_usuario'])) {
    header('Location: ../view/projects.php');
    exit();
}
include '../controller/conexion.php';
$omitStylesheet = true;
include "templates/header.php";
?>

<main class="main-principal">
    <section class="section-container">
        <article class="article-container">
        <section class="section-container">
        <article class="article-container">
            <form class="contact-form session-form" action="../controller/register_process.php" method="post">
                <h1 class="title form-title">Regístrate!</h1>
                <div class="form-group">
                    <label for="nombre">Nombre completo</label>
                    <div class="name-fields">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre/s">
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido/s">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Ingrese su email:</label>
                    <input type="email" id="email" name="email" placeholder="Dirección de correo electrónico">
                </div>

                <div class="form-group">
                    <label for="password">Ingrese su contraseña:</label>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>
                </div>
                <div class="form-group login-register reg">
                    <button class="login-button button__login-form" type="submit">Iniciar Sesión</button>
                    <a class="link-registro" href="login.php">¿Ya eres usuario? Inicia sesión.</a>
                </div>                
            </form>
        </article>
    </section>
</main>
<script src="../script/alerts.js"></script>
<?php include "templates/footer.php"; ?>
