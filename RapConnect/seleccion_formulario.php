<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
