<?php 
class persona {

    
public $nombre;
private $edad;
protected $altura;

function __construct($nuevoNombre)
{
    $this->nombre=$nuevoNombre;



}

public function asignarnombre($nuevoNombre){
    $this ->nombre=$nuevoNombre;
}
public function imprimirnombre(){
 echo "hola soy " . $this -> nombre . "<br/>";
}
public function mostrarEdad(){
    $this->edad=26;
    return $this->edad;
}

}

$objAlumno= new persona("le bebe-");
/* $objAlumno->asignarnombre("le bebe"); */
$objAlumno->imprimirnombre();