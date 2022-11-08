<?php

    if ($_POST) {
        $minutos=$_POST['Minutos'];
        $iva= ($minutos*10.5)/100;
        define("PRECIO", 90);
        define("PRECIO3",120);
        echo "La llamada cuesta $".PRECIO." el min y pandolos 4 min pasa a costar $".PRECIO3."<br>";
        if ($minutos>3) {
            $precioIVA=$iva*PRECIO3;
            $totalLlamada=($minutos*PRECIO3)+ $precioIVA;
            echo "Su llamada duro ".$minutos."<br>La llamada cuesta $".$totalLlamada."<br>IVA de la llamada es: $".$precioIVA;
        }elseif (($minutos>=1)&&($minutos<4)) {
            $precioIVA=$iva*PRECIO;
            $totalLlamada=($minutos*PRECIO)+($iva*PRECIO);
            echo "Su llamada duro ".$minutos."<br>La llamada cuesta ".$totalLlamada."<br>IVA de la llamada es: $".$precioIVA;
        }
        
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
    <form action="12_telefono.php" method="post">
        Minutos:
        <input type="text" name="Minutos" id="">
        <br>
        <input type="submit" value="CALCULAR">
    
    </form>
</body>
</html>