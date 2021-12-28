

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="ejercicio14.php" method="post">


Ingrese un numero
<input type="text" name="Numtxt" id="">
<input type="submit" value="Ingresa">



</form>



<?php 



if ($_POST) {

    $num = $_POST['Numtxt'];

    for ($i=0; $i <=$num ; $i++) { 
        echo $i . "<br/>" ;
    }
    


}




?>





</body>
</html>






