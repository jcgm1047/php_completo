<?php 

session_start();

if (isset ($_SESSION["usuario"])) {
    echo "sesion iniciada";
} else {

   echo "Sesion destruida";

}

?>