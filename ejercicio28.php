<?php 


$servidor = "localhost"; //127.0.0.1
$usuario = "root";
$contrasena="";

try {
    
$conn = new PDO("mysql:host=$servidor;dbname=album", $ususario,$contrasena);



} catch (\Throwable $th) {
    //throw $th;
}



?>