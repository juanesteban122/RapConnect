<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si los campos están definidos
    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['spotify']) && isset($_POST['youtube']) && isset($_FILES['image'])) {
        $nombre = $conn->real_escape_string($_POST['nombre']);
        $descripcion = $conn->real_escape_string($_POST['descripcion']);
        $spotify = $conn->real_escape_string($_POST['spotify']);
        $youtube = $conn->real_escape_string($_POST['youtube']);
        
        // Manejo de la carga de archivos
        $image = $_FILES['image'];
        $imageName = $image['name'];
        $imageTmpName = $image['tmp_name'];
        $imageError = $image['error'];
        $imageSize = $image['size'];
        $imageDestination = '../images/' . $imageName;

        if ($imageError === 0) {
            if ($imageSize < 5000000) { // Limita el tamaño de archivo a 5MB
                move_uploaded_file($imageTmpName, $imageDestination);

                // Inserta en la base de datos
                $sql = "INSERT INTO raperos (nombre, descripcion, spotify, youtube, image) VALUES ('$nombre', '$descripcion', '$spotify', '$youtube', '$imageName')";

<<<<<<< HEAD:RapConnect/formulario/procesar_agregar_rapero.php
                if ($conn->query($sql) === TRUE) {
                    echo "<script>
                    alert('Se agregó el rapero correctamente');
                    window.location.href = '../index.php';
                    </script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
=======
            if ($conn->query($sql) === TRUE) {
                echo "<script>
                alert('Se agregó el rapero correctamente');
            window.location.href = '../index.php';
                </script>";
>>>>>>> 4ca00378e00ea8f4bfdf3cc48ff09275068efe28:RapConnect/RapConnect/formulario/procesar_agregar_rapero.php
            } else {
                echo "El archivo es demasiado grande.";
            }
        } else {
            echo "Error al cargar el archivo.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }

    $conn->close();
}
?>
