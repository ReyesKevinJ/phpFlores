<?php
    if ($_POST) {
        $cant1=$_POST['cantidad1'];
        $precio1=$_POST['precio1'];
        $cant2=$_POST['cantidad2'];
        $precio2=$_POST['precio2'];
        $cant3=$_POST['cantidad3'];
        $precio3=$_POST['precio3'];
        $subtotal1=$precio1*$cant1;
        $subtotal2=$precio2*$cant2;
        $subtotal3=$precio3*$cant3;
        $neto=$subtotal1+$subtotal2+$subtotal3;
        $iva=($neto*21)/100;
        $dgr=($neto*3)/100;
        $percep_muni=($neto*1.5)/100;
        $bruto=$neto+$iva+$dgr+$percep_muni;
        echo "NETO: ".$subtotal1." + ".$subtotal2." + ".$subtotal3." = ".$neto;
        echo "<br>IVA= ".$iva;
        echo "<br>DGR= ".$dgr;
        echo "<br>Percepcion Municipal= ".$percep_muni;
        echo "<br>Bruto: ".$bruto;
        if ($bruto>1000000) {
            $desc=($bruto*5)/100;
            $bruto_con_desc=$bruto-$desc;
            echo "<br>Como su compra supera el millon tiene un descuento de 5%";
            echo "<br>Descuento de: ".$desc."<br>Total con descuento".$bruto_con_desc;

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
<form action="examen2_2.php" method="post">
        DETALLE 1:
        <input type="text" name="detalle" id="">
        <br>
        CANTIDAD 1:    
        <input type="text" name="cantidad1" id="">
        <br>
        PRECIO 1:    
        <input type="text" name="precio1" id="">
        <br>
        DETALLE 2:
        <input type="text" name="detalle" id="">
        <br>
        CANTIDAD 2:    
        <input type="text" name="cantidad2" id="">
        <br>
        PRECIO 2:    
        <input type="text" name="precio2" id="">
        <br>
        DETALLE 3:
        <input type="text" name="detalle" id="">
        <br>
        CANTIDAD 3:    
        <input type="text" name="cantidad3" id="">
        <br>
        PRECIO 3:    
        <input type="text" name="precio3" id="">
        <br>
        
        <input type="submit" value="CALCULAR">
    </form>
</body>
</html>