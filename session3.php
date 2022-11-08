<?php

session_start();

echo "Sesion iniciada".":<br>";
echo "Usuario: ".$_SESSION["usuario"]." Estado: ". $_SESSION["estado"];// muestra el usuario y estado 
?>