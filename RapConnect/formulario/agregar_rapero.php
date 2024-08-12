<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo Rapero</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/agregar_rapero.css">
    <script src="../js/validacion_agregar_rapero.js" defer></script> <!-- Archivo JavaScript agregado aquí -->
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <div class="container">
        <h2>Agregar Nuevo Rapero</h2>
        <form action="procesar_agregar_rapero.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre del Rapero" name="nombre" required>
                <span id="nombreError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" placeholder="Descripción del rapero" name="descripcion" required>
                <span id="descripcionError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <div class="form-group">
                <label for="spotify">Spotify:</label>
                <input type="text" class="form-control" id="spotify" placeholder="Link del canal de Spotify" name="spotify" required>
                <span id="spotifyError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <div class="form-group">
                <label for="youtube">YouTube:</label>
                <input type="text" class="form-control" id="youtube" placeholder="Link del canal de YouTube" name="youtube" required>
                <span id="youtubeError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <div class="form-group">
                <label for="image">Imagen:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                <span id="imageError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <button type="submit" class="btn btn-primary">Agregar Rapero</button>
        </form>
    </div>
    <br><br><br><br><br>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
