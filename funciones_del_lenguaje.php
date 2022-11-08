<?php

    //$n=7.9;
    //numero aleatorio
    //echo rand(1,10);
    //redondea numero  
    //echo round($n);
    if ($_POST) {
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];
        strtolower($usuario);
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
    <form action="" method="post">
        <input type="text" name="usuario" placeholder="usuario" id="">
        <input type="password" name="contraseña" placeholder="contraseña" id="">
        <input type="submit" value="ENVIAR">
    </form>
    <?php
        if ($_POST) {
            echo strtolower($usuario);
        }
        
    ?>
</body>
</html>