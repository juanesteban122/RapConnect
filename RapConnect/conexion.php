<?php
$servername = "localhost";
$username = "root"; // Nombre de usuario de tu base de datos
$password = ""; // Contraseña de tu base de datos
$dbname = "RapConnect"; //nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
//echo'MELO CARAMELO';


// $servername = "sql201.infinityfree.com";
// $username = "if0_37198464"; // Nombre de usuario de tu base de datos
// $password = "rapconnect12"; // Contraseña de tu base de datos
// $dbname = "if0_37198464_rapconnect"; //nombre de la base de datos
