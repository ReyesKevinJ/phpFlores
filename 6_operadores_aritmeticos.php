<?php
    if($_POST){
        $valorA=$_POST['ValorA'];
        $valorB=$_POST['ValorB'];
        $operacion=$_POST['operacion'];
        switch($operacion){
            case $operacion === "+":
                $resultado= $valorA + $valorB;
                echo "La suma de ".$valorA." + ".$valorB." = ".$resultado."<br>";
            break;
            case $operacion === "-":
                $resultado= $valorA - $valorB;
                echo "La resta de ".$valorA." - ".$valorB." = ".$resultado."<br>";
            break;
            case $operacion === "*":
                $resultado= $valorA * $valorB;
                echo "La multiplicacion de ".$valorA." * ".$valorB." = ".$resultado."<br>";
            break;
            case $operacion === "/":
                $resultado= $valorA / $valorB;
                echo "La division de ".$valorA." / ".$valorB." = ".$resultado."<br>";
            break;
        }
    }
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <form action="6_operadores_aritmeticos.php" class=" form-inline" method="post">
        
        <input class="form-control" type="text" name="ValorA" id="" placeholder="Valor A">
        <br>
        
        <input class="form-control" type="text" name="ValorB" id="" placeholder="Valor B">
        <br>
        <select name="operacion" id="" class=" form-control-sm">
            <option value="+">suma</option>
            <option value="-">resta</option>
            <option value="*">multiplicacion</option>
            <option value="/">division</option>
        </select>
        <input type="submit" value="CALCULAR" class="btn btn-outline-dark btn-sm">
        
    </form>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>