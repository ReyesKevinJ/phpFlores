<?php

session_start();
$_SESSION["usuario"]="Gustavo";
$_SESSION["estado"]="Logueado";
echo "Sesion iniciada".":<br>";
echo "Usuario: ".$_SESSION["usuario"]." Estado: ". $_SESSION["estado"];// muestra el usuario y estado 
?>