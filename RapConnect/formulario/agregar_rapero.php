<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Rapero</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Ruta relativa para el archivo CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>
    <?php include '../includes/header.php'; ?>


<!---FORMULARIO BOOSTRAP-->
<div class="container">
  <h2>Agregar Nuevo Rapero</h2>
  <form action="procesar_agregar_rapero.php" method="POST">
  <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre del Rapero" name="nombre">
  </div>
  <div class="form-group">
      <label for="descripcion">Descripción:</label>
      <input type="text" class="form-control" id="descripcion" placeholder="Descripción del rapero" name="descripcion">
  </div>
  <div class="form-group">
      <label for="spotify">Spotify:</label>
      <input type="text" class="form-control" id="spotify" placeholder="Link del canal de Spotify" name="spotify">
  </div>
  <div class="form-group">
      <label for="youtube">YouTube:</label>
      <input type="text" class="form-control" id="youtube" placeholder="Link del canal de YouTube" name="youtube">
  </div>
  <button type="submit" class="btn btn-primary">Agregar Rapero</button>
</form>

</div>



<!--FIN DE FORMULARIO-->
    <?php include '../includes/footer.php'; ?>
</body>
</html>