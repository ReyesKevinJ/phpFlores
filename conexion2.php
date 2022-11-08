<?php
$servidor="localhost";
$usuario="root";
$pass="";

try {

    $conexion= new PDO("mysql:host=$servidor;dbname=tienda2",$usuario,$pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "conexion establecida";
    $sql= "INSERT INTO `producto` (`nombre`, `precio`,`codigo_fabricante`) VALUES ('Coca',200 , 1);";

 

    

    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $sql= "INSERT INTO `producto` (`nombre`, `precio`,`codigo_fabricante`) VALUES ('Coca 1L',560 , 1);";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $sql= "INSERT INTO `producto` (`nombre`, `precio`,`codigo_fabricante`) VALUES ('Taza',150 , 2);";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();
    $sql= "INSERT INTO `producto` (`nombre`, `precio`,`codigo_fabricante`) VALUES ('Remera',2000 , 3);";
    $sentencia=$conexion->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();
    print_r($resultado);

} catch (PDOException $error) {
    echo "conexion erronea a causa de ".$error;
}

?>