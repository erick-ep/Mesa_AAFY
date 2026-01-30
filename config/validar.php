<?php
require_once 'database.php';

$username= $_POST['username'];

$sql = "INSERT INTO usuarios(username) VALUES ('$username')";
if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$stmt = $pdo ->prepare($sql);
$stmt -> bindParam (':username', $username);
$stmt -> execute();

echo "Registro guardado con exito";