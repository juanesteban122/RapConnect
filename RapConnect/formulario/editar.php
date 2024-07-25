<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Rapero</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/seleccion_editar.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>

    <div class="container">
        <h2>Modificar Rapero</h2>
        <form action="editar_formulario.php" method="GET">
            <div class="form-group">
                <label for="id">Selecciona el Rapero:</label>
                <select class="form-control" id="id" name="id">
                    <?php
                    include '../conexion.php';
                    $sql = "SELECT id, nombre FROM raperos";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['id'] . '">' . $row['nombre'] . '</option>';
                        }
                    }
                    $conn->close();
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Cargar Datos</button>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>
</html>



