<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Datos del Rapero</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Incluye la hoja de estilos principal -->
    <link rel="stylesheet" href="../css/editar_formulario.css"> <!-- Incluye la hoja de estilos específica para el formulario de edición -->
    <script src="../js/validacion_editar_formulario.js"></script> <!-- Incluye el archivo JavaScript para la validación del formulario -->
    <script src="../js/session_timer.js" defer></script>

</head>
<body>
    <?php include '../includes/header.php'; 
        include '../includes/session_timeout.php'; // Incluir la gestión de tiempo de inactividad
        ?> <!-- Incluye el archivo del encabezado de la página -->

    <?php
    include '../conexion.php'; // Incluye el archivo de conexión a la base de datos

    // Decodifica el ID codificado en Base64 obtenido de la URL
    $id = isset($_GET['id']) ? base64_decode($_GET['id']) : '';

    if ($id) {
        // Prepara la consulta SQL para evitar inyecciones SQL
        $sql = "SELECT * FROM raperos WHERE id = ?";
        $stmt = $conn->prepare($sql); // Prepara la consulta
        $stmt->bind_param('i', $id); // Asocia el parámetro
        $stmt->execute(); // Ejecuta la consulta
        $result = $stmt->get_result(); // Obtiene el resultado
        
        // Verifica si la consulta devolvió un resultado
        if ($result->num_rows > 0) {
            $rapero = $result->fetch_assoc(); // Obtiene los datos del rapero
        } else {
            die('No se encontró ningún rapero con el ID especificado.'); // Muestra un error si no se encuentra el rapero
        }

        $stmt->close(); // Cierra la declaración preparada
    } else {
        die('ID del rapero no especificado.'); // Muestra un error si no se proporciona el ID
    }

    $conn->close(); // Cierra la conexión a la base de datos
    ?>

    <div class="container"> <!-- Contenedor principal para el formulario de edición -->
        <h2>Modificar Rapero</h2>
        <form action="procesar_editar_rapero.php" method="POST" enctype="multipart/form-data"> <!-- Formulario que enviará datos por el método POST a procesar_editar_rapero.php -->
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($rapero['id']); ?>"> <!-- Campo oculto para enviar el ID del rapero -->
            
            <!-- Grupo de formulario para el nombre del rapero -->
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo htmlspecialchars($rapero['nombre']); ?>"> <!-- Campo de entrada para el nombre -->
                <span id="nombreError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            
            <!-- Grupo de formulario para la descripción del rapero -->
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo htmlspecialchars($rapero['descripcion']); ?>"> <!-- Campo de entrada para la descripción -->
                <span id="descripcionError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            
            <!-- Grupo de formulario para el enlace de Spotify del rapero -->
            <div class="form-group">
                <label for="spotify">Spotify:</label>
                <input type="text" class="form-control" id="spotify" name="spotify" value="<?php echo htmlspecialchars($rapero['spotify']); ?>"> <!-- Campo de entrada para el enlace de Spotify -->
                <span id="spotifyError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            
            <!-- Grupo de formulario para el enlace de YouTube del rapero -->
            <div class="form-group">
                <label for="youtube">YouTube:</label>
                <input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo htmlspecialchars($rapero['youtube']); ?>"> <!-- Campo de entrada para el enlace de YouTube -->
                <span id="youtubeError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            
            <!-- Grupo de formulario para la imagen del rapero -->
            <div class="form-group">
                <label for="image">Imagen Actual:</label>
                <img src="../images/<?php echo htmlspecialchars($rapero['image']); ?>" alt="Imagen del Rapero" style="max-width: 200px;"> <!-- Muestra la imagen actual del rapero -->
                <label for="new_image">Cambiar Imagen:</label>
                <input type="file" class="form-control" id="new_image" name="new_image"> <!-- Campo para cargar una nueva imagen -->
                <span id="newImageError" class="error-message"></span> <!-- Contenedor para el mensaje de error -->
            </div>
            
            <button type="submit" class="btn btn-warning">Actualizar Rapero</button> <!-- Botón para enviar el formulario -->
        </form>
        <br><br><br>
    </div>

    <?php include '../includes/footer.php'; ?> <!-- Incluye el archivo del pie de página -->
</body>
</html>
