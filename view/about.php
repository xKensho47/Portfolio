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
                    <section class="data-personal move" id="data-personal">
                        <button class="right" id="right"><i class="bi bi-caret-right-fill"></i></button>
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
                    </section>
                    <section class="techs " id="techs">
                        <h3 class="techs-title">Lenguajes y tecnologías:</h3>                        
                        <div class="techs-container">
                            <button class="left" id="left"><i class="bi bi-caret-left-fill"></i></button>
                            <div class="tech01"><img src="../images/techs/c-original.svg" alt=""></div>
                            <div class="tech02"><img src="../images/techs/cplusplus.svg" alt=""></div>
                            <div class="tech03"><img src="../images/techs/csharp.svg" alt=""></div>
                            <div class="tech04"><img src="../images/techs/html5.svg" alt=""></div>
                            <div class="tech05"><img src="../images/techs/css3.svg" alt=""></div>
                            <div class="tech06"><img src="../images/techs/javascript.svg" alt=""></div>
                            <div class="tech07"><img src="../images/techs/php.svg" alt=""></div>
                            <div class="tech08"><img src="../images/techs/github.svg" alt=""></div>
                            <div class="tech09"><img src="../images/techs/git.svg" alt=""></div>
                            <div class="tech10"><img src="../images/techs/python.svg" alt=""></div>
                            <div class="tech11"><img src="../images/techs/java.svg" alt=""></div>
                            <div class="tech12"><img src="../images/techs/mysql.svg" alt=""></div>
                            <div class="tech13"><img src="../images/techs/oracle.svg" alt=""></div>
                        </div>
                    </section>
                </div>
            </aside>
        </article>
    </section>
</main>

<script src="../script/downloadCurriculum.js"></script>
<script src="../script/moverInfo.js"></script>
</div><?php include "templates/footer.php"; ?>