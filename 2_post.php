<?php
    // SE RECEPCIONA LO QUUE SE ENVIA POR EL METODO POST
    if ($_POST) {
        $nombre=$_POST['nombre']; // SE GUARDA LA VARIABLE
    
        echo "MI NOMBRE ES ".$nombre; // IMPRIME LA VARIABLE
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
    <form action="post.php" method="post">
        nombre:
        <input type="text" name="nombre" id="">
        <br>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>