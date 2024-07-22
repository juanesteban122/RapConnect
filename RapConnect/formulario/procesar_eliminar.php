<?php
include '../conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si el ID está definido
    if (isset($_POST['id'])) {
        $id = $conn->real_escape_string($_POST['id']);

        // Consulta SQL para eliminar el rapero
        $sql = "DELETE FROM raperos WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            alert('Rapero eliminado correctamente');
            window.location.href = '/RapConnect/index.php';
            </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "ID del rapero no especificado.";
    }

    $conn->close();
}
?>
