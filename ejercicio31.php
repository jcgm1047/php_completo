<?php
$txtNombre = "";
$rdglenguaje = "";
$chkphp = "";
$chkhtml = "";
$chkcss = "";

if ($_POST) {

    $txtNombre =   (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
    $rdglenguaje =   (isset($_POST["Lenguaje"])) ? $_POST["Lenguaje"] : "";

    $chkphp = (isset($_POST["chkphp"]) == "si") ? "checked" : "";
    $chkhtml = (isset($_POST["chkhtml"]) == "si") ? "checked" : "";
    $chkcss = (isset($_POST["chkcss"]) == "si") ? "checked" : "";

    print_r($rdglenguaje);
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

        <?php if ($_POST) { ?>
            <strong>Hola soy </strong> <?php echo $txtNombre; ?>
        <?php } ?> <br>

        ¿Te gusta?<br>
        <br>php <input type="radio" <?php echo ($rdglenguaje == "php") ? "checked" : ""; ?> name="Lenguaje" value="php" id=""> <br />
        <br>html <input type="radio" <?php echo ($rdglenguaje == "html") ? "checked" : ""; ?> name="Lenguaje" value="html" id=""><br />
        <br>css <input type="radio" <?php echo ($rdglenguaje == "css") ? "checked" : ""; ?> name="Lenguaje" value="css" id=""><br />

        Estas aprendiendo...
        <br />PHP<input type="checkbox" <?php $chkphp ?> name="chkphp" value="si" id="">
        <br />HTML<input type="checkbox" <?php $chkhtml ?> name="chkhtml" value="si" id="">
        <br />CSS<input type="checkbox" <?php $chkcss ?> name="chkcss" value="si" id="">

        <br /><strong>Tu lenguaje favorito es: </strong> <?php echo $rdglenguaje ?>




    </form>
</body>

</html>