<?php
session_start();
require '../conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && $password == $user['password']) {
        $_SESSION['user_id'] = $user['user_id'];
        header('Location: ../seleccion_formulario.php');
        exit();
    } else {
        $error = "Nombre de usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RapConnect - Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/inicio_sesion.css">
    <script src="../js/alerta.js" defer></script> <!-- Asegúrate de incluir el script aquí -->

</head>

<body>
    <?php include '../includes/header.php'; ?>
    <br><br><br>
    <div class="login-container">
        <h2>Inicio de sesion</h2>
        <p style="color: #ffeca0;">IMPORTANTE: Solo las personas con una cuenta autorizada pueden acceder a la información de RapConnect.</p>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>

</html>