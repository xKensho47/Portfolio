<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); //Solo inicia la sesión si no hay una activa
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">
  <title>Mi Portfolio</title>
  <link rel="stylesheet" href="../css/normalize.css">
  <?php if (!isset($omitStylesheet) || !$omitStylesheet): ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <?php endif; ?>
  <link rel="stylesheet" href="../css/styles.css">
  
</head>

<body>
  <div class="container">
    <header class="header">
      <a href="../../index.php" class="link-logo">
        <img src="../../images/logo.png" alt="Portfolio Logo" class="logo">Damián Tripodi
      </a>
      <nav class="menu">
        <ul class="menu__lista">
          <li class="menu__item"><a href="../view/projects.php" class="projects">PROYECTOS</a></li>
          <li class="menu__item"><a href="../view/about.php" class="about">SOBRE MI</a></li>
          <li class="menu__item"><a href="../view/contact.php" class="contact">CONTACTO</a></li>
          <!--
          <?php //if (!isset($_SESSION['id_usuario'])): ?>
            <li class="menu__item"><a href="../view/login.php" class="login"><button class="login-button">Login/SignUp</button></a></li>
          <?php //else: ?>
            <li class="menu__item"><a href="../controller/logout_process.php" class="login"><button class="login-button">LogOut</button></a></li>
          <?php //endif; ?>
          -->
        </ul>
      </nav>
    </header>