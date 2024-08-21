<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Datos del Rapero</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/editar_formulario.css">
    <script src="../js/validacion_editar_formulario.js"></script>
</head>

<body>
    <?php include '../includes/header.php'; ?>

    <?php
    include '../conexion.php';
    $id = $_GET['id'] ?? '';

    if ($id) {
        $sql = "SELECT * FROM raperos WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $rapero = $result->fetch_assoc();
        $stmt->close();
    } else {
        die('ID del rapero no especificado.');
    }
    $conn->close();
    ?>
    <div class="container">
        <h2>Modificar Rapero</h2>
        <form action="procesar_editar_rapero.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($rapero['id']); ?>">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($rapero['nombre']); ?>">
                <span id="nombreError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo htmlspecialchars($rapero['descripcion']); ?>">
                <span id="descripcionError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <div class="form-group">
                <label for="spotify">Spotify:</label>
                <input type="text" class="form-control" id="spotify" name="spotify" value="<?php echo htmlspecialchars($rapero['spotify']); ?>">
                <span id="spotifyError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <div class="form-group">
                <label for="youtube">YouTube:</label>
                <input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo htmlspecialchars($rapero['youtube']); ?>">
                <span id="youtubeError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <div class="form-group">
                <label for="image">Imagen Actual:</label>
                <img src="../images/<?php echo htmlspecialchars($rapero['image']); ?>" alt="Imagen del Rapero" style="max-width: 200px;">
                <label for="new_image">Cambiar Imagen:</label>
                <input type="file" class="form-control" id="new_image" name="new_image">
                <span id="newImageError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            <button type="submit" class="btn btn-warning">Actualizar Rapero</button>
        </form>
        <br><br><br>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>

</html>