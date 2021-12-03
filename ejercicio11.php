<!doctype html>
<html lang="en">

<head>
    <title>operadores aritmeticos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>


    <form action="ejercicio11.php" method="post">
        Valor A
        <br>
        <input type="text" name="valorA" id="">
        <br>
        Valor B
        <br>
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_POST) {

        $valorA = $_POST["valorA"];
        $valorB = $_POST["valorB"];

      
        $suma = $valorA + $valorB;
        
        $resta = $valorA - $valorB;
       
        $division = $valorA / $valorB;
       
        $mulitplicacion = $valorA * $valorB;
        echo "<br/>" . $suma;
        echo "<br/>" . $resta;
        echo "<br/>" . $division;
        echo "<br/>" . $mulitplicacion;

if ($valorA == $valorB) {
    echo "<br/>". "Ambos valores son iguales";

}else {
    echo "<br/>"."los valores no son iguales";
}

    
    }

    ?>












    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>