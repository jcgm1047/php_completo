<?php 
class persona {

    
public $nombre;

public function asignarnombre($nuevoNombre){


    $this ->nombre=$nuevoNombre;
}


}

$objAlumno= new persona();
$objAlumno->asignarnombre("le bebe");

echo $objAlumno->nombre;
?>