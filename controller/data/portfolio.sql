CREATE DATABASE IF NOT EXISTS portfolio_db;

USE portfolio_db;

-- Creación de la tabla 'projects'
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

-- Insertar datos de ejemplo en la tabla 'projects'
INSERT INTO projects (title, link, image, description) VALUES
('Proyecto 1', 'https://linkproyecto1.com', 'ruta_a_imagen_proyecto1.jpg', 'Descripción breve del Proyecto 1'),
('Proyecto 2', 'https://linkproyecto2.com', 'ruta_a_imagen_proyecto2.jpg', 'Descripción breve del Proyecto 2'),
('Proyecto 3', 'https://linkproyecto3.com', 'ruta_a_imagen_proyecto3.jpg', 'Descripción breve del Proyecto 3');
