<?php
include "conexion.php";
$query="SELECT * FROM `personal`";
$res=mysqli_query($con, $query);
// var_dump($res);
while ($row=mysqli_fetch_array($res)) {
    echo $row["cargo"]." ". $row["nombre"]." ".$row["apellido"]." ".$row["dni"]." ".$row["fecha"]."<br>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal</title>
</head>
<body>
    <div class="atras">
        <button><a href="listado.php">Volver</a></button>
    </div>
</body>
</html>