<?php
    // SE RECEPCIONA LO QUUE SE ENVIA POR EL METODO POST
    if ($_GET) {
        $nombre=$_GET['nombre']; // SE GUARDA LA VARIABLE
    
        echo "MI NOMBRE ES ".$nombre; // IMPRIME LA VARIABLE

        echo "<br>";

        $apellido=$_GET['apellido']; // SE GUARDA LA VARIABLE
    
        echo "MI APELLIDO ES ".$apellido; // IMPRIME LA VARIABLE

        echo "<br>";

        $edad=$_GET['edad']; // SE GUARDA LA VARIABLE
    
        echo "MI EDAD ES ".$edad; // IMPRIME LA VARIABLE

        echo "<br>";

        $altura=$_GET['altura']; // SE GUARDA LA VARIABLE
    
        echo "MI ALTURA ES ".$altura; // IMPRIME LA VARIABLE

    }
   
?>