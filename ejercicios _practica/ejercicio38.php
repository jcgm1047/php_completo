<?php 

$archivo="contenido.txt";
$archivoabierto=fopen($archivo,"r");
$contenido=fread($archivoabierto,filesize($archivo));
echo $contenido;

?>