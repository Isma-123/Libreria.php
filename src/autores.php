<?php
require_once 'db.php';

// Obtener autores
$stmt = $pdo->query("SELECT * FROM autores");
$autores = $stmt->fetchAll();

// Procesar alta de autor
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nombre'])) {
    $nuevo = $pdo->prepare("INSERT INTO autores (nombre, nacionalidad) VALUES (?, ?)");
    $nuevo->execute([$_POST['nombre'], $_POST['nacionalidad']]);
    header("Location: autores.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Autores - Librería</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Autores</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
      <?php foreach ($autores as $autor): ?>
      <div class="col">
        <div class="card h-100">
          <div class="card-body">
            <h5 class="card-title"><?= htmlspecialchars($autor['nombre']) ?></h5>
            <p class="card-text">Nacionalidad: <?= htmlspecialchars($autor['nacionalidad']) ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Botón alta modal -->
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAlta">+ Agregar Autor</button>
    <a href="index.php" class="btn btn-outline-secondary ms-2">← Volver</a>

    <!-- Modal alta autor -->
    <div class="modal fade" id="modalAlta" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <form method="post" class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Nuevo Autor</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" name="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Nacionalidad</label>
              <input type="text" name="nacionalidad" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
