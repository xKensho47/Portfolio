<?php
session_start(); // Asegúrate de iniciar la sesión al principio
/*
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    // Si no ha iniciado sesión, establece un mensaje de error en la sesión
    $_SESSION['mensaje_error'] = "¡Necesita iniciar sesión para acceder al contenido!";
    // Redirigir al usuario a la página de inicio de sesión
    header('Location: ../view/login.php');
    exit();
}
*/
// Incluir el archivo de encabezado después de verificar la sesión
$omitStylesheet = true;
include (__DIR__ . '/../view/templates/header.php');
?>
<?php include_once (__DIR__ . '/../controller/ControllerProyectos.php'); ?>

<main class="main-principal">
    <section class="section-container">
        <h1 class="title">Mis Proyectos</h1>
        <p class="p-projects">Los siguientes proyectos, han sido realizados durante la <abbr title="Tecnicatura Universitaria en Programación">TUP</abbr>, en la <abbr title="Universidad Tecnológica Nacional">UTN.</abbr></p>
        <article class="article-container">
            <?php
            generateCarousel($conexion);
            ?>
        </article>
    </section>
</main>
<script src="../script/carousel.js"></script>
<script src="../script/alerts.js"></script>
<script src="https://kit.fontawesome.com/02e8257299.js" crossorigin="anonymous"></script>
<?php include "templates/footer.php"; ?>

<?php $conexion->close(); ?>
