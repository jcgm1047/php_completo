<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="ejercicio16.php" method="post">

        Ingrese un Numero
        <input type="text" name="txtNumero" id="">
        <input type="submit" value="Verificar">

    </form>

    <?php

    if ($_POST) {

        $numeroVerificar = $_POST["txtNumero"];

        while ($numeroVerificar < 10) {
            echo "El numero " . $numeroVerificar . " es menor o igual a 10" . "<br/>";
            $numeroVerificar++;
           

        }
        echo "El numero " . $numeroVerificar . " es mayor o igual a 10";
    }


    ?>



</body>

</html>