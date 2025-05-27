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
$con= mysqli_connect("localhost", "root", "", "asistencia");
// if($con){
//     echo "okey";
// }else{
//     echo "error";
// }


?>