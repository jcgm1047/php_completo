<?php
class persona
{

    public $nombre;
    private $edad;
    protected $altura;

    public function asignarnombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }
    public function imprimirnombre()
    {
        echo "hola soy " . $this->nombre . "<br/>";
    }
    public function mostrarEdad()
    {
        $this->edad = 26;
        return $this->edad;
    }
}

$objAlumno = new persona();
$objAlumno->asignarnombre("le bebe");


class Trabajador extends persona
{
    public $puesto;
    public function presentarseComoTrabajador()
    {
        echo "hola soy " . $this->nombre . " y soy un " . $this->puesto;
    }
}

$objtrabajador = new Trabajador();
$objtrabajador->asignarnombre("Camilo Garcia ");
$objtrabajador->puesto=" Profersor";
$objtrabajador-> presentarseComoTrabajador();