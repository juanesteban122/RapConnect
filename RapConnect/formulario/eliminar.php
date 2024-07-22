<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Rapero</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/eliminar.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <div class="container">
        <h2>Eliminar Rapero</h2>
        <?php
        include '../conexion.php';

        // Consulta SQL para obtener todos los raperos
        $sql = "SELECT * FROM raperos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<form action="procesar_eliminar.php" method="POST">';
            while ($row = $result->fetch_assoc()) {
                echo '<div class="form-group">';
                echo '<label>' . $row['nombre'] . '</label>';
                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';  
                echo '<button type="submit" class="btn btn-danger">Eliminar</button>';
                echo '</div>';
            }
            echo '</form>';
        } else {
            echo "<p>No se encontraron raperos para eliminar.</p>";
        }

        $conn->close(); // Cerrar conexión
        ?>
    </div>

    <h1>hola</h1>
    <?php include '../includes/footer.php'; ?>
</body>
</html>
