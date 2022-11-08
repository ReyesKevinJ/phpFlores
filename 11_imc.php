<?php

    if ($_POST) {
        $altura=$_POST['Altura'];
        $peso=$_POST['Peso'];
        $imc= round( $peso / ($altura * $altura),1);
        $pesoIdeal= 24 * ($altura * $altura);
        $pesoAbajar= $peso-$pesoIdeal;
        $pesoAalcanzar= $peso - $pesoAbajar;
        echo "Altura: ".$altura."<br>Peso: ".$peso."<br>IMC: ".$imc;
        echo "<br>Peso a alcanzar: ".$pesoAalcanzar;
        if ($imc<18.5) {
            echo "<br>Categoria: Bajo Peso<br>Dede subir: ".round($pesoAbajar*-1);    
        }elseif (($imc>=18.5)&&($imc<25)) {
            echo "<br>Categoria: Peso Normal";
        }elseif (($imc>=25)&&($imc<30)) {
            echo "<br>Categoria: Sobrepeso<br>Dede bajar: ".round($pesoAbajar);
        }elseif (($imc>=30)&&($imc<35)) {
            echo "<br>Categoria: Obesidad tipo 1<br>Dede bajar: ".round($pesoAbajar);
        }elseif (($imc>=35)&&($imc<40)) {
            echo "<br>Categoria: Obesidad tipo 2<br>Dede bajar: ".round($pesoAbajar);
        }elseif ($imc>=40) {
            echo "<br>Categoria: Obesidad tipo 3<br>Dede bajar: ".round($pesoAbajar);
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
    <form action="11_imc.php" method="post">
        Atura en mtrs:
        <input type="text" name="Altura" id="">
        <br>
        Peso kg:
        <input type="text" name="Peso" id="">
        <br>
        <input type="submit" value="CALCULAR">
    </form>
    <div class="container">
        <table class="table table-striped text-center">
            <tr>
                <td>
                    <p>IMC</p>
                </td>
                <td>
                    <p>DIAGNOSTICO</p>
                </td>
            </tr>
            <tr class=" bg-info">
                <td>
                    <p>BAJO PESO</p>
                </td>
                <td>
                    <p> < 18.5 </p>
                </td>
            </tr>
            <tr class=" bg-success">
                <td>
                    <p>PESO NORMAL</p>
                </td>
                <td>
                    <p>18.5 - 24.9</p>
                </td>
            </tr>
            <tr class="bg-warning">
                <td>
                    <p>SOBREPESO</p>
                </td>
                <td>
                    <p>25 - 29.9</p>
                </td>
            </tr>
            <tr class=" bg-danger">
                <td >
                    <p>OBESIDAD TIPO 1</p>
                </td>
                <td>
                    <p>30 - 34.9</p>
                </td>
            </tr>
            <tr class=" bg-danger">
                <td>
                    <p>OBESIDAD TIPO 2</p>
                </td>
                <td>
                    <p>35 - 39.9</p>
                </td>
            </tr>
            <tr class=" bg-danger">
                <td>
                    <p>OBESIDAD TIPO 3</p>
                </td>
                <td>
                    <p> >= 40</p>
                </td>
            </tr>
        </table>
    </div>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>