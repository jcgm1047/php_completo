<?php

$txtNombre = "";
$rdgLenguaje = "";


if ($_POST) {

    $txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
    $rdgLenguaje = (isset($_POST['lenguaje'])) ? $_POST['lenguaje'] : "";
    
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content=h=device-wi"widtth, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <?php if ($_POST) { ?>
        Hola:<?php echo  " " . $txtNombre  ?>
        tu lenguaje es: <?php echo  " " . $rdgLenguaje  ?>
    <?php }  ?>

    <form action="ejercicio31.php" method="post">

        Nombre: <br />
        <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" id="">
        <br />
        Te gusta?: <br />
        <br />php: <input type="radio" <?php echo($rdgLenguaje == "php")?"checked":""; ?> name="lenguaje" value="php" id=><br />
        <br />html: <input type="radio" <?php echo($rdgLenguaje == "html")?"checked":""; ?> name="lenguaje" value="html" id=><br />
        <br />css: <input type="radio" <?php echo($rdgLenguaje == "css")?"checked":""; ?> name="lenguaje" value="css" id=><br />




        <input type="submit" value="Enviar informacion">



    </form>





    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>