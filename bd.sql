CREATE DATABASE IF NOT EXISTS bd;
USE bd;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    rol VARCHAR(30) NOT NULL,
    fecha_registro DATE NOT NULL
);

INSERT INTO usuarios (nombre, rol, fecha_registro) VALUES
('Javier', 'admin', '2020-05-16'),
('Natalia', 'editor', '2022-01-05'),
('Hernan', 'moderador', '2024-08-25'),
('Regina', 'usuario', '2021-04-18'),
('Emma', 'usuario', '2025-03-04');
