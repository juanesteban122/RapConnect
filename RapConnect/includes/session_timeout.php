<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Establecer el tiempo máximo de inactividad en segundos (e.g., 1800 segundos = 30 minutos)
$tiempo_maximo_inactividad = 1800;

if (isset($_SESSION['LAST_ACTIVITY'])) {
    // Calcular el tiempo de inactividad
    $tiempo_inactividad = time() - $_SESSION['LAST_ACTIVITY'];

    // Si el tiempo de inactividad supera el tiempo máximo permitido, cerrar sesión
    if ($tiempo_inactividad > $tiempo_maximo_inactividad) {
        session_unset();
        session_destroy();
        $_SESSION['session_expired'] = true; // Marcar la sesión como expirada
        header("Location: ../inicio_sesion/login.php?session_expired=1"); // Redirigir al inicio de sesión con parámetro
        exit();
    }
}

// Actualizar la última actividad a la hora actual
$_SESSION['LAST_ACTIVITY'] = time();
?>
