<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['spotify']) && isset($_POST['youtube'])) {
        $id = $conn->real_escape_string($_POST['id']);
        $nombre = $conn->real_escape_string($_POST['nombre']);
        $descripcion = $conn->real_escape_string($_POST['descripcion']);
        $spotify = $conn->real_escape_string($_POST['spotify']);
        $youtube = $conn->real_escape_string($_POST['youtube']);

        $image = $_FILES['new_image']['name'];
        if ($image) {
            $imageTmpName = $_FILES['new_image']['tmp_name'];
            $imagePath = '../images/' . basename($image);
            move_uploaded_file($imageTmpName, $imagePath);
            $imageSql = ", image='$image'";
        } else {
            $imageSql = "";
        }

        $sql = "UPDATE raperos SET nombre='$nombre', descripcion='$descripcion', spotify='$spotify', youtube='$youtube' $imageSql WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Datos del rapero actualizados correctamente');
            window.location.href = '../index.php';
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
