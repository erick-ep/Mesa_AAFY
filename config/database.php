<?php
$host = 'localhost';
$db   = 'ProyectoServer';
$user = 'Proyecto';
$pass = 'Proyecto123'; 
#$conexion = new mysqli_connect($_SERVER, $user, $pass, $db);

try
{
    $pdo =new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $pass
        
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
 catch (PDOException $e) 
    {
        die ("Error papu" . $e->getMessage());
    }   
    