<?php 
class persona {

    
public $nombre;
private $edad;
protected $altura;

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

$objAlumno= new persona();
$objAlumno->asignarnombre("le bebe");
$objAlumno->imprimirnombre();