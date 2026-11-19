CREATE DATABASE blog_db;
USE blog_db;

CREATE TABLE articulos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    contenido TEXT NOT NULL,
    autor VARCHAR(100) NOT NULL,
    fecha_publicacion DATE NOT NULL
);

INSERT INTO articulos (titulo, contenido, autor, fecha_publicacion) VALUES
('Introducción a PHP', 'PHP es un lenguaje de programación del lado del servidor...', 'Jamil Marciaga', '2026-11-01'),
('Manejo de MySQL', 'MySQL es un sistema de gestión de bases de datos relacional...', 'Jamil Marciaga', '2026-11-05'),
('HTML y CSS Básico', 'HTML estructura el contenido y CSS le da estilo...', 'Jamil Marciaga', '2026-11-10');
