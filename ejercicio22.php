<?php 

$frutas= array('f' => "fresa" ,'m' => "mazana" ,'p' => "pera", 't' => "pera" );

/* print_r($frutas['m']); */


foreach ($frutas as $indice => &$value) {
    echo $value . "<br/>" ;


}


