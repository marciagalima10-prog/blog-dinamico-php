<?php
require 'config/conexion.php';
$resultado = $conexion->query("SELECT * FROM articulos ORDER BY fecha_publicacion DESC");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Blog Dinámico</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1>Mi Blog Dinámico</h1>
        <p>Artículos cargados desde MySQL</p>
    </header>

    <main>
        <?php if ($resultado->num_rows > 0): ?>
            <?php while ($articulo = $resultado->fetch_assoc()): ?>
                <article>
                    <h2><?php echo htmlspecialchars($articulo['titulo']); ?></h2>
                    <p class="meta">
                        Por <?php echo htmlspecialchars($articulo['autor']); ?> |
                        <?php echo $articulo['fecha_publicacion']; ?>
                    </p>
                    <p><?php echo htmlspecialchars(substr($articulo['contenido'], 0, 150)) . '...'; ?></p>
                    <a href="articulo.php?id=<?php echo $articulo['id']; ?>">Leer más</a>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No hay artículos publicados.</p>
        <?php endif; ?>
    </main>
</body>
</html>
