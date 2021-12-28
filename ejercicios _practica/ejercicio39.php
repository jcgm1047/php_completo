<?php 

$nombreArchivo= "archivo.txt";
$contenidoArchivo="hola, saludos";

$archivoCrear=fopen($contenidoArchivo,"w");
fwrite($archivoCrear,$contenidoArchivo);
fclose($archivoCrear);


?>