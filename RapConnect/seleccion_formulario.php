<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: inicio_sesion/login.php');
    exit;
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/estilo_seleccion_formulario.css">
    <title>RapConnect</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
<br>

<div class="centered-container">
    <p>Esta pequeña sección está destinada a la gestión de raperos. Usa los botones a continuación para añadir nuevos raperos, editar los datos de los raperos actuales o eliminar raperos de la base de datos.</p>
    <a href="formulario/agregar_rapero.php" class="btn btn-primary" role="button">Agregar nuevo Rapero</a>
    <a href="formulario/editar.php" class="btn btn-warning" role="button">Modificar un Rapero</a>
    <a href="formulario/eliminar.php" class="btn btn-danger" role="button">Eliminar Rapero</a>

    <a href="inicio_sesion/logout.php">Cerrar sesión</a>
    


</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>




