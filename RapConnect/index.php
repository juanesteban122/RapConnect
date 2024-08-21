<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RapConnect</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="../js/buscador.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>

<body>
    <?php include 'includes/header.php'; ?>

    <!-- Formulario de búsqueda -->
    <div class="search-container">
    <form class="form">
        <input type="text" id="searchInput" required>
        <label class="lbl-nombre">
            <span class="text-nomb">Buscar raperos...</span>
        </label>
    </form>
</div>



    <br><br><br>

    <div class="rapper-list">
        <!-- Listado de raperos -->
        <?php
        include 'conexion.php';

        $sql = "SELECT * FROM raperos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="rapper">';
                if (!empty($row['image']) && file_exists('images/' . $row['image'])) {
                    echo '<img src="images/' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['nombre']) . '">';
                } else {
                    echo '<img src="images/default.jpg" alt="Imagen no disponible">';
                }
                echo '<h2>' . htmlspecialchars($row['nombre']) . '</h2>';
                echo '<div class="description">' . htmlspecialchars($row['descripcion']) . '</div>';
                echo '<br>';
                echo '<a class="spotify" href="' . htmlspecialchars($row['spotify']) . '" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512" width="24" height="24">
                    <path fill="#00ff33" d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z"/>
                </svg>
                    </a> | ';
                echo '<a class="youtube" href="' . htmlspecialchars($row['youtube']) . '" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" width="24" height="24">
                    <path fill="#ff0000" d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/>
                    </svg>
        </a>';
                echo '</div>';
            }
        } else {
            echo "No se encontraron raperos.";
        }

        $conn->close();
        ?>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>