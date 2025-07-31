<?php
require_once 'db.php';
$stmt = $pdo->query("SELECT l.id, l.titulo, a.nombre AS autor, l.precio
                     FROM libros l
                     LEFT JOIN autores a ON l.autor_id = a.id");
$libros = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Libros - Librería</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Listado de Libros</h2>
    <div class="table-responsive mb-4">
      <table class="table table-striped table-hover">
        <thead class="table-dark">
          <tr><th>ID</th><th>Título</th><th>Autor</th><th>Precio (USD)</th></tr>
        </thead>
        <tbody>
          <?php foreach ($libros as $lib): ?>
          <tr>
            <td><?= $lib['id'] ?></td>
            <td><?= htmlspecialchars($lib['titulo']) ?></td>
            <td><?= htmlspecialchars($lib['autor'] ?? 'Sin autor') ?></td>
            <td><?= number_format($lib['precio'],2) ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <a href="index.php" class="btn btn-outline-secondary">← Volver</a>
  </div>
</body>
</html>