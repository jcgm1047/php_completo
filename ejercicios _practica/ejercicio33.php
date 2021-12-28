<?php

$jsonContenido = '[
    
    {"nombre":"Camilo", "apellido":"Gracia"},
    {"nombre":"Oscar", "apellido":"Bohorquez"}
    ]';

$resultado = json_decode($jsonContenido);
/*   print_r($resultado);
 */

foreach ($resultado as $persona) {
    echo ($persona->nombre) . " " . ($persona->apellido . "<br/>");
};
