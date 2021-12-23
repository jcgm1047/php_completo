<?php 

session_start();

$_SESSION["usuario"]="Juan";
$_SESSION["estatus"]="Logeado";

echo "sesion iniciado" . ": <br/>";

echo "Usuario: " . $_SESSION["usuario"] . "<br/> Estatus: " . $_SESSION["estatus"]; 

?>
