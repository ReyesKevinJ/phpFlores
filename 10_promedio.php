<?php
    // 1 y 3 aplasado
    // 4 y 6 reprobado
    // 7 y 8 aprobado
    // 9 y 10 sobrsaliente
    if ($_POST) {
        $nota1=$_POST['Nota1'];
        $nota2=$_POST['Nota2'];
        $nota3=$_POST['Nota3'];
        $promedio=($nota1+$nota2+$nota3)/3;
        if (($promedio>=1)&&($promedio<=3)) {
            echo "Su promedio es ".$promedio." por lo que esta aplasado vaya a estudiar y deje el tis tos.<br>";
           
        }
        elseif(($promedio>=4)&&($promedio<=6)){
            echo "Su promedio es ".$promedio." por lo que esta reprobado vaya a estudiar y deje el tis tos.<br>";
        }
        elseif(($promedio>=7)&&($promedio<=8)){
            echo "Su promedio es ".$promedio." por lo que esta aprobado asi que tranqui.<br>";
        }
        elseif(($promedio>=9)&&($promedio<=10)){
            echo "Su promedio es ".$promedio." por lo que esta sobresaliente asi que tranqui..<br>";
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
    <form action="10_promedio.php" method="post">
        Nota 1:
        <input type="text" name="Nota1" id="">
        <br>
        Nota 2:    
        <input type="text" name="Nota2" id="">
        <br>
        Nota 3:    
        <input type="text" name="Nota3" id="">
        <br>
        <input type="submit" value="CALCULAR">
    </form>
</body>
</html>