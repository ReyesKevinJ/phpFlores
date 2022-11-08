<?php

    if ($_POST) {
        $capital=$_POST['Capital'];
        $años=$_POST['Años'];
        $interesAño= 0.6;
        for ($i=1; $i<=$años ; $i++) { 
            $int_gene= $capital * $interesAño;
            $saldo_anual= $capital + $int_gene;
            echo "<br>Interes Generado en Año ".$i." = ".$int_gene."<br>Capital Inicial ".$capital."<br>Saldo Anual ".$i." = ".$saldo_anual."<br>";
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
    <form action="examen_1.php" method="post">
        CAPITAL INICIAL:
        <input type="text" name="Capital" id="">
        <br>
        AÑOS:    
        <input type="text" name="Años" id="">
        <br>
        
        <input type="submit" value="CALCULAR">
    </form>
</body>
</html>
