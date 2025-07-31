<?php
require_once 'db.php';
$message = '';

// Guardar mensaje
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ins = $pdo->prepare("INSERT INTO contacto (correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?)");
    if ($ins->execute([$_POST['correo'], $_POST['nombre'], $_POST['asunto'], $_POST['comentario']])) {
        $message = '¡Mensaje enviado correctamente!';
    } else {
        $message = 'Error al enviar el mensaje.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contacto - Librería</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h2 class="mb-4">Contáctanos</h2>

    <?php if ($message): ?>
      <div class="alert alert-info"><?= $message ?></div>
    <?php endif; ?>

    <form method="post" class="row g-3">
      <div class="col-md-6">
        <label for="correo" class="form-label">Correo</label>
        <input type="email" id="correo" name="correo" class="form-control" required>
      </div>
      <div class="col-md-6">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" required>
      </div>
      <div class="col-12">
        <label for="asunto" class="form-label">Asunto</label>
        <input type="text" id="asunto" name="asunto" class="form-control">
      </div>
      <div class="col-12">
        <label for="comentario" class="form-label">Comentario</label>
        <textarea id="comentario" name="comentario" class="form-control" rows="4" required></textarea>
      </div>
      <div class="col-12 text-end">
        <button type="submit" class="btn btn-success">Enviar</button>
        <a href="index.php" class="btn btn-outline-secondary">← Volver</a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
