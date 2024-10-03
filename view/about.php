<?php
$omitStylesheet = true;
include "templates/header.php";
?>
<main class="main-principal">
    <section class="section-container">
        <h1 class="title">SOBRE MI</h1>
        <article class="article-container">
            <aside class="aboutme-photo">
                <img src="../images/profile.jpg" alt="">
            </aside>
            <aside class="aboutme-info">
                <div class="info-presentation">
                    <h2 class="info-title">
                        Mi nombre es <span>Tripodi, E. Damián</span>
                    </h2>
                    <p class="info-description">
                        Soy una persona comprometida, con una fuerte pasión por la tecnología y un constante deseo
                        de aprender y desarrollar mis habilidades. Recientemente, me gradué de la Tecnicatura
                        Universitaria en Programación en la UTN, y estoy muy entusiasmado por aplicar mis
                        conocimientos en nuevos desafíos profesionales.
                    </p>
                </div>
                <hr>
                <div class="info-data">
                    <ul class="info-list">
                        <li class="info-item"><label for="edad" class="label-item">Edad: </label>32</li>
                        <li class="info-item"><label for="mail" class="label-item">Mail:
                            </label><img src="../images/email.png" alt="Mi correo electrónico">
                            </li>
                        <li class="info-item"><label for="titulo" class="label-item">Título: </label>Técnico
                            Universitario en Programación</li>
                        <li class="info-item"><label for="ubicacion" class="label-item">Dirección:
                            </label>Ciudadela, GBA Oeste - Argentina</li>
                    </ul>
                    <div class="info-button">
                        <button class="download-button" id="descargaCurriculum">Descargar CV</button>
                    </div>
                </div>
            </aside>
        </article>
    </section>
</main>

<script src="../script/downloadCurriculum.js"></script>
</div><?php include "templates/footer.php"; ?>