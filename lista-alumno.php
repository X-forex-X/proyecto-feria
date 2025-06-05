<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alumnos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div class="atras">
        <button><a href="listado.php">Volver</a></button>
    </div>
</body>
</html>

<?php
include "conexion.php";
$query = "SELECT * FROM `alumnos`";
$res = mysqli_query($con, $query);

echo '<h2>Listado de Alumnos</h2>';
echo '<table border="1">';
echo '<tr><th>Nombre</th><th>Apellido</th><th>DNI</th><th>Año</th><th>División</th><th>Fecha</th><th>UID RFID</th><th>Acción</th></tr>';

while ($row = mysqli_fetch_array($res)) {
    echo "<tr>
            <form method='POST' action='asignar_uid.php'>
                <td>{$row["nombre"]}</td>
                <td>{$row["apellido"]}</td>
                <td>{$row["dni"]}</td>
                <td>{$row["ano"]}</td>
                <td>{$row["division"]}</td>
                <td>{$row["fecha"]}</td>
                <td>
                    <input type='text' name='uid' value='{$row["rfid_uid"]}' placeholder='Escaneá aquí' required>
                    <input type='hidden' name='id_alumno' value='{$row["dni"]}'>
                </td>
                <td><button type='submit'>Guardar</button></td>
            </form>
          </tr>";
}
echo '</table>';
?>
