<?php

    if ($_POST) {
        $lado_1=$_POST['Lado1'];
        $lado_2=$_POST['Lado2'];
        $lado_3=$_POST['Lado3'];
        if (($lado_1 == $lado_2)&&($lado_2 == $lado_3)&&($lado_1 == $lado_3)) {
            echo "Equilatero 3 lados iguales";
        }if (($lado_1 == $lado_2)&&($lado_1 !== $lado_3)||($lado_1 == $lado_3)&&($lado_1!==$lado_2)||($lado_2 == $lado_3)&&($lado_1!==$lado_2)) {
            echo "Isoceles 2 lados iguales";
        }if (($lado_1 !== $lado_2)&&($lado_1 !== $lado_3)&&($lado_2 !== $lado_3)) {
            echo "Escaleno 3 lados distinto";
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
    <form action="examen_2.php" method="post">
        LADO 1:
        <input type="text" name="Lado1" id="">
        <br>
        LADO 2:    
        <input type="text" name="Lado2" id="">
        <br>
        LADO 3:    
        <input type="text" name="Lado3" id="">
        <br>
        
        <input type="submit" value="CALCULAR">
    </form>
</body>
</html>