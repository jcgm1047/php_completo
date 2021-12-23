<?php
$txtNombre = "";
$rdglenguaje = "";

$chkphp = "";
$chkhtml = "";
$chkcss = "";

$lsanime = "";

if ($_POST) {

    $txtNombre =   (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
    $rdglenguaje =   (isset($_POST["Lenguaje"])) ? $_POST["Lenguaje"] : "";

    $chkphp = (isset($_POST["chkphp"]) == "si") ? "checked" : "";
    $chkhtml = (isset($_POST["chkhtml"]) == "si") ? "checked" : "";
    $chkcss = (isset($_POST["chkcss"]) == "si") ? "checked" : "";

    $lsanime = (isset($_POST["lsanime"])) ? $_POST["lsanime"] : "";

    $txtcomentario = (isset($_POST["txtcomentario"])) ? $_POST["txtcomentario"] : "";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio31.php" method="post">

        <strong>Nombre</strong>

        <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" id=""> <br />

        <input type="submit" value="Enviar Informacion"><br />



        ¿Te gusta?<br>
        <br>php <input type="radio" <?php echo ($rdglenguaje == "php") ? "checked" : ""; ?> name="Lenguaje" value="php" id=""> <br />
        <br>html <input type="radio" <?php echo ($rdglenguaje == "html") ? "checked" : ""; ?> name="Lenguaje" value="html" id=""><br />
        <br>css <input type="radio" <?php echo ($rdglenguaje == "css") ? "checked" : ""; ?> name="Lenguaje" value="css" id=""><br />

        Estas aprendiendo...
        <br />PHP<input type="checkbox" <?php echo $chkphp; ?> name="chkphp" value="si" id="">
        <br />HTML<input type="checkbox" <?php echo $chkhtml; ?> name="chkhtml" value="si" id="">
        <br />CSS<input type="checkbox" <?php echo $chkcss; ?> name="chkcss" value="si" id=""><br>



        Que anime te gusta?<br>

        <select name="lsanime" id="">
            <option value="Ningunad de las antreriores">Ningunad de las antreriores</option>
            <option value="Naruto" <?php echo ($lsanime == "Naruto") ? "selected" : ""; ?>>Naruto</option>
            <option value="dragon" <?php echo ($lsanime == "dragon") ? "selected" : ""; ?>>Dragon Ball</option>
            <option value="one" <?php echo ($lsanime == "one") ? "selected" : ""; ?>>One Peace</option>

        </select><br>
        <input type="submit" value="Enviar informacion"><br>

        <strong>Tu Nomre es </strong> <?php echo $txtNombre ?><br>
        <strong>Te gusta Programar con </strong><br>
        -<?php echo ($chkphp == "checked") ? "php" : ""; ?><br>
        -<?php echo ($chkhtml == "checked") ? "html" : ""; ?><br>
        -<?php echo ($chkcss == "checked") ? "css" : ""; ?><br>
        <strong>Estas aprendiendo </strong> <?php echo $rdglenguaje ?><br>
        <strong>Tu Anime Favorito es </strong> <?php echo $lsanime ?><br>

        <strong>Tienes alguna duda?</strong><br>
        <input type="text" name="txtcomentario" id=""><br>
        <input type="submit" value="Enmviar informacion"><br>
        <strong>Tu mensaje es </strong> <?php echo $txtcomentario; ?>



    </form>
</body>

</html>