<?php
$txtnombre="";
$lenguaje="";
$item1="";
$item2="";
$anime="";
if ($_POST) {
    $txtnombre=(isset($_POST["txtnombre"]))?$_POST["txtnombre"]:"Sin datos";
    $lenguaje=(isset($_POST["lenguaje"]))?$_POST["lenguaje"]:"Sin datos";
    $item1=(isset($_POST["item1"])=="si")?"checked": "";
    $item2=(isset($_POST["item2"])=="si")?"checked": "";
    $anime=(isset($_POST["anime"]))?$_POST["anime"]:"Sin datos";
    $comet=(isset($_POST["comet"]))?$_POST["comet"]:"Sin datos";
    print_r($_POST);
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
        
        <strong>HOLA:</strong><?php echo $txtnombre;?>
        <br>
        <br>
        
        <label for="txtnombre">Nombre</label>
        <input type="text" name="txtnombre" id="">
        <br>
        <br>
        
        <label for="lenguaje" namespace>¿Estudiarias?</label>
        <p>PHP<input type="radio" name="lenguaje" value="PHP" <?php echo($lenguaje=="PHP")?"checked":""; ?> id=""></p>
        <p>JS<input type="radio" name="lenguaje" value="JS" <?php echo($lenguaje=="JS")?"checked":""; ?> id=""></p>
        <p>C<input type="radio" name="lenguaje" value="C" <?php echo($lenguaje=="C")?"checked":""; ?> id=""></p>
        <br>
        <label for="">¿Que lenguajes has estudiado?</label>
        <br>
        <label for="item1">HTML5</label>
        <input type="checkbox" name="item1"<?php echo $item1 ?> value="si" id="">
        <label for="item1">SCRETHCH</label>
        <input type="checkbox" name="item2"<?php echo $item2 ?> value="si" id="">
        <br>
        <br>
        <label for="anime">¿Que anime te gusta?</label>
        <select name="anime" id="">
            <option value="" >Ninguno</option>
            <option value="dagronball"<?php echo ($anime="Dragon ball")?"selected":"" ?>  >"Dragon ball"</option>
            <option value="naruto"<?php echo ($anime="Naruto")?"selected":"" ?> >"Naruto"</option>
            <option value="opm"<?php echo ($anime="One Punch Man")?"selected":"" ?> >"One Punch Man"</option>
        </select>
        <br>
        <br>
        <label for="comet">Comentario</label>
        <br>
        <textarea name="comet" id="" cols="30" rows="10">

        </textarea>
        <br>
        <br>
        
        <input type="submit" value="Enviar Informacion">
    </form>
</body>
</html>