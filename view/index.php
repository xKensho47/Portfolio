<?php
$omitStylesheet = true;
include "templates/header.php";
?>
<main class="main-principal">
    <section class="pres-container">
        <aside class="image-space">
            <div class="image-space__profile">
                <img src="../../images/profile.png" alt="Profile photo" class="presentation__background">
            </div>
        </aside>
        <aside class="presentation">
            <article class="presentation-pres">
                <div class="presentation__text">
                    <h1 class="title">Bienvenid@! Soy Damián~</h1>
                    <p class="text-thaskify">
                        Técnico Universitario en Programación 🧑🏻‍💻
                    </p>
                </div>
                <div class="presentation__description">
                    <p class="description-thaskify">
                        Te doy la bienvenida a mi portfolio personal, en donde podrás ver y conocer un poco más acerca
                        de mí.
                    </p>
                </div>
            </article>
            <?php if (!isset($_SESSION['id_usuario'])): ?>
            <div class="presentation__button index-button">
                <a href="login.php" class="login"><button class="login-button">LogIn/Sign Up</button></a>
            </div>
            <?php endif; ?>
        </aside>
    </section>
</main>
<?php include "templates/footer.php"; ?>