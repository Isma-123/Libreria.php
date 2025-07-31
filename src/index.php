<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio - Librería</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <h1 class="mb-4 text-center">Bienvenido a la Librería</h1>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <div class="card-body">
            <h5 class="card-title">Libros</h5>
            <p class="card-text">Consulta el catálogo de libros disponibles.</p>
            <a href="libros.php" class="btn btn-primary">Ver Libros</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <div class="card-body">
            <h5 class="card-title">Autores</h5>
            <p class="card-text">Conoce a nuestros autores destacados.</p>
            <a href="autores.php" class="btn btn-secondary">Ver Autores</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 text-center">
          <div class="card-body">
            <h5 class="card-title">Contacto</h5>
            <p class="card-text">Envía tus comentarios y sugerencias.</p>
            <a href="contacto.php" class="btn btn-success">Contactar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>