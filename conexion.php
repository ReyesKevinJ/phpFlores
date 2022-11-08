<?php 
$servidor="localhost";//127.0.0.1
$usuario="root";
$pass="";

try {

    $conexion= new PDO("mysql:host=$servidor;dbname=album",$usuario,$pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "conexion establecida";

    // $sql= "INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'promo 22', 'foto.jpg');";

    // $conexion->exec($sql);//ejecuta el codigo sql para insertar registro.

    $sql="SELECT * FROM `fotos`"; /* Se guarda la consulta sql en la variable */

    $sentencia=$conexion->prepare($sql); /* Utilizo el  */
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();
    print_r($resultado);

} catch (PDOException $error) {
    echo "conexion erronea a causa de ".$error;
}



?>