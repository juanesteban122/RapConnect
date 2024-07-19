<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si los campos están definidos
    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['spotify']) && isset($_POST['youtube'])) {
        $nombre = $conn->real_escape_string($_POST['nombre']);
        $descripcion = $conn->real_escape_string($_POST['descripcion']);
        $spotify = $conn->real_escape_string($_POST['spotify']);
        $youtube = $conn->real_escape_string($_POST['youtube']);

        // Inserta en la base de datos
        $sql = "INSERT INTO raperos (nombre, descripcion, spotify, youtube) VALUES ('$nombre', '$descripcion', '$spotify', '$youtube')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Se agregó el rapero correctamente');
            window.location.href = '/RapConnect/index.php';
            </script>";            


        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }

    $conn->close();
}
?>
