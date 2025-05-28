<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "asistencia";

// Crear conexión
// $con = new mysqli($servername, $username, $password, $database);

// // Comprobar conexión
// if ($con->connect_error) {
//     die("Conexión fallida: " . $con->connect_error);
// }
// echo "Conexión exitosa";
// Crear conexión
$con = new mysqli($servername, $username, $password, $database);
// if($con){
//     echo "okey";
// }else{
//     echo "error";
// }

if ($con->connect_error) {
    die("Error de conexión: " . $con->connect_error);
}


?>