<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['spotify']) && isset($_POST['youtube']) && isset($_FILES['image'])) {
        $nombre = $conn->real_escape_string($_POST['nombre']);
        $descripcion = $conn->real_escape_string($_POST['descripcion']);
        $spotify = $conn->real_escape_string($_POST['spotify']);
        $youtube = $conn->real_escape_string($_POST['youtube']);

        // Manejo de la imagen
        $image = $_FILES['image'];
        $imageName = $image['name'];
        $imageTmpName = $image['tmp_name'];
        $imageError = $image['error'];
        $imageSize = $image['size'];
        $imageExt = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
        $allowedExt = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($imageExt, $allowedExt) && $imageError === 0 && $imageSize < 5 * 1024 * 1024) {
            $newImageName = uniqid('', true) . "." . $imageExt;
            $imageDestination = '../images/' . $newImageName;
            move_uploaded_file($imageTmpName, $imageDestination);

            // Inserta en la base de datos
            $sql = "INSERT INTO raperos (nombre, descripcion, spotify, youtube, image) VALUES ('$nombre', '$descripcion', '$spotify', '$youtube', '$newImageName')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>
                alert('Se agregó el rapero correctamente');
                window.location.href = '/RapConnect/index.php';
                </script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error con la imagen. Asegúrate de que sea una imagen válida y que no supere los 5 MB.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }

    $conn->close();
}
?>



