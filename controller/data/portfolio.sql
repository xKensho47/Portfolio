CREATE DATABASE IF NOT EXISTS portfolio_db;

USE portfolio_db;

-- Creación de la tabla 'projects'
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    link VARCHAR(255),
    link_github VARCHAR(255),
    image VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL,
    contraseña VARCHAR(255) NOT NULL
);

INSERT INTO projects (title, link, link_github, image, description) VALUES
('Arcane', 'https://xkensho47.github.io/ProyectoLaboIII/', 'https://github.com/xKensho47/ProyectoLaboIII', 'ArcaneProject.webp', 'Proyecto individual, realizado con HTML, CSS y Javascript para Laboratorio III. 
'),
('Moviely', '', 'https://github.com/xKensho47/Moviely', 'MovielyProject.webp', 'Proyecto grupal, realizado con HTML, CSS, JavaScript, PHP y MySQL para Práctica Profesional.
'),
('CineFlow', '', 'https://github.com/xKensho47/CProyectoMS', 'CineflowProject.webp', 'Proyecto grupal, realizado con HTML, CSS, JavaScript, PHP y MySQL para Metodología en Sistemas I.
');
