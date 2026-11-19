<?php
require 'config/conexion.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$stmt = $conexion->prepare("SELECT * FROM articulos WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$articulo = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $articulo ? htmlspecialchars($articulo['titulo']) : 'No encontrado'; ?></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <?php if ($articulo): ?>
        <article>
            <h1><?php echo htmlspecialchars($articulo['titulo']); ?></h1>
            <p class="meta">
                Por <?php echo htmlspecialchars($articulo['autor']); ?> |
                <?php echo $articulo['fecha_publicacion']; ?>
            </p>
            <p><?php echo nl2br(htmlspecialchars($articulo['contenido'])); ?></p>
            <a href="index.php">← Volver al inicio</a>
        </article>
    <?php else: ?>
        <p>Artículo no encontrado.</p>
        <a href="index.php">← Volver al inicio</a>
    <?php endif; ?>
</body>
</html>
