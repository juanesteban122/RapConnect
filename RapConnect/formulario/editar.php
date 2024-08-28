<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Rapero</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Incluye la hoja de estilos principal -->
    <link rel="stylesheet" href="../css/seleccion_editar.css"> <!-- Incluye la hoja de estilos específica para esta página -->
    <script src="../js/session_timer.js" defer></script>
</head>
<body>
    <?php 
    include '../includes/header.php'; 
    include '../includes/session_timeout.php'; // Incluir la gestión de tiempo de inactividad
    ?> <!-- Incluye el archivo del encabezado de la página -->

    <div class="container"> <!-- Contenedor principal para el formulario -->
        <h2>Modificar Rapero</h2>
        <form action="editar_formulario.php" method="GET"> <!-- Formulario que enviará datos por el método GET a editar_formulario.php -->
            <div class="form-group"> <!-- Grupo de formulario para el selector de rapero -->
                <label for="id">Selecciona el Rapero:</label> <!-- Etiqueta para el selector -->
                <select class="form-control" id="id" name="id"> <!-- Selector desplegable para elegir un rapero -->
                    <?php
                    include '../conexion.php'; // Incluye el archivo de conexión a la base de datos

                    // Consulta para obtener los id y nombres de los raperos
                    $sql = "SELECT id, nombre FROM raperos";
                    $result = $conn->query($sql); // Ejecuta la consulta

                    // Verifica si hay resultados en la consulta
                    if ($result->num_rows > 0) {
                        // Recorre los resultados
                        while ($row = $result->fetch_assoc()) {
                            // Crea una opción en el selector para cada rapero
                            // Codifica el ID en Base64 para ocultar el valor real en la URL
                            echo '<option value="' . base64_encode($row['id']) . '">' . htmlspecialchars($row['nombre']) . '</option>';
                        }
                    }
                    $conn->close(); // Cierra la conexión a la base de datos
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Cargar Datos</button> <!-- Botón para enviar el formulario -->
        </form>
    </div>

    <?php include '../includes/footer.php'; ?> <!-- Incluye el archivo del pie de página -->
</body>
</html>
