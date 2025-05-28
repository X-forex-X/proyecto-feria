<?php
include "conexion.php";
$query="SELECT * FROM `alumnos`";
$res=mysqli_query($con, $query);
// var_dump($res);
while ($row=mysqli_fetch_array($res)) {
    echo $row["nombre"].$row["apellido"]." ".$row["dni"]." ".$row["ano"]." ".$row["division"]." ".$row["fecha"]."<br>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
        <div class="atras">
        <button><a href="listado.php">Volver</a></button>
    </div>
</body>
</html>