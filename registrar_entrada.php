<?php
include "conexion.php";

$uid = $_GET['uid'] ?? $_POST['uid'] ?? '';

if (!$uid) {
    echo "No se recibió ningún UID.";
    exit;
}

// Buscar en alumnos
$query = "SELECT nombre, apellido FROM alumnos WHERE rfid_uid = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("s", $uid);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $nombre = $row['nombre'] . ' ' . $row['apellido'];
    $tipo = 'alumno';
} else {
    // Buscar en personal
    $query = "SELECT nombre, apellido FROM personal WHERE rfid_uid = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $uid);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $nombre = $row['nombre'] . ' ' . $row['apellido'];
        $tipo = 'personal';
    } else {
        echo "UID no registrado.";
        exit;
    }
}

// Registrar la asistencia
$query = "INSERT INTO asistencia_registro (rfid_uid, nombre, tipo) VALUES (?, ?, ?)";
$stmt = $con->prepare($query);
$stmt->bind_param("sss", $uid, $nombre, $tipo);
$stmt->execute();

echo "Asistencia registrada para $tipo: $nombre";
?>
