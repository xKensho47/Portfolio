<?php
include '../../controller/conexion.php';
$omitStylesheet = true;
include "templates/header.php";
?>

<main class="main-principal">
    <section class="section-container">
        <h1 class="title">Contáctame!</h1>
        <article class="article-container">
            <?php
            if (isset($_SESSION['mensaje_enviado'])) {
                echo '<div class="alert alert-success">¡Mensaje enviado correctamente!</div>';
                unset($_SESSION['mensaje_enviado']); // Limpiar la variable de sesión
            } elseif (isset($_SESSION['mensaje_error'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['mensaje_error'] . '</div>';
                unset($_SESSION['mensaje_error']); // Limpiar la variable de sesión
            }
            ?>
            <form class="contact-form" action="../../controller/procesar_formulario.php" method="post">
                <div class="form-group">
                    <label for="nombre">Nombre completo</label>
                    <div class="name-fields">
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre/s">
                        <input type="text" id="apellido" name="apellido" placeholder="Apellido/s">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Número de contacto*</label>
                    <input type="tel" id="telefono" name="telefono" placeholder="Número de contacto" required>
                </div>

                <div class="form-group">
                    <label for="notas">Notas, sugerencias o preguntas*</label>
                    <textarea id="notas" name="notas" placeholder="Escriba su mensaje aquí..." required></textarea>
                </div>

                <button type="submit">Enviar</button>
            </form>
        </article>
    </section>
</main>
<script src="../script/alerts.js"></script>
<?php include "templates/footer.php"; ?>
