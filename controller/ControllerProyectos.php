<?php
include (__DIR__ . '/../controller/conexion.php');
include_once (__DIR__ . '/../model/ModelProyectos.php');

function generateCarousel($conexion)
{
    $result = resultCarousel($conexion);

    echo '
        <section class="carousel-section">
            <h2>NOMBRE DEL PROYECTO:</h2>
            <div class="carousel-container">
                <button class="prev">&#10094;</button>';

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
                <div class="carousel">
                    <h3>' . strtoupper($row['title']) . '<a href="' . $row['link_github'] . '" target="_BLANK">  <i class="fa-brands fa-github fa-beat" style="color: #2d314d;"></i>></a></h3>
                    <div class="carousel-item">                        
                        <a href="' . $row['link'] . '" target="_BLANK">
                            <img src="../images/projects/' . $row['image'] . '" alt="Imagen del proyecto">
                        </a>
                    </div>
                    <p>' . $row['description'] . '</p>
                </div>';
        }
    } else {
        echo '<p>No hay proyectos para mostrar.</p>';
    }

    echo '
                <button class="next">&#10095;</button>
            </div>
        </section>';
}

function resultCarousel($conexion)
{
    $q = "SELECT title, link, link_github, image, description FROM projects";

    $stmt = $conexion->prepare($q);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        echo "Error en la consulta: " . $conexion->error;
        return false;
    }

    return $result;
}
