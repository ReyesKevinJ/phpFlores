<?php
    //and &&
    //or ||
    if ($_POST) {
        $valorA=$_POST['ValorA'];
        $valorB=$_POST['ValorB'];
        if (($valorA!=$valorB) || ($valorA<$valorB) ) {
            echo "Son diferentes y ValorA es menor";
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
    <form action="8_operadores_logicos.php" method="post">
        ValorA:
        <input type="text" name="ValorA" id="">
        <br>
        ValorB:    
        <input type="text" name="ValorB" id="">
        <br>
        <input type="submit" value="CALCULAR">
    </form>
</body>
</html>