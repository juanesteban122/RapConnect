<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RapConnect</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="rapper-list">
        <?php
        include 'conexion.php';

        // Consulta SQL para obtener todos los raperos
        $sql = "SELECT * FROM raperos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="rapper">';
                echo '<img src="images/' . $row['image'] . '" alt="' . $row['nombre'] . '">';
                echo '<h2>' . $row['nombre'] . '</h2>';
                echo '<div class="description">' . $row['descripcion'] . '</div>';
                echo '<br>';
                echo '<a class="spotify" href="' . $row['spotify'] . '" target="_blank">Spotify</a> | ';
                echo '<a class="youtube" href="' . $row['youtube'] . '" target="_blank">YouTube</a>';
                echo '</div>';
            }
        } else {
            echo "No se encontraron raperos.";
        }

        $conn->close(); // Cerrar conexión
        ?>

    </div>
    
    <?php include 'includes/footer.php'; ?>
</body>
</html>
