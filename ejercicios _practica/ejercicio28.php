<?php


$servidor = "localhost"; //127.0.0.1
$usuario = "root";
$contrasena = "";

try {

    $conn = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasena);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando con la programacion', 'foto.jpg')";

    $conn -> exec($sql);



    echo "Conexion establecida";
} catch (PDOException $error) {
    echo "Conexion erronea " . $error;
}
