<?php

$i=1;
do {
    
    
    if ($i<50) {
        
        $a=$i++;
        $suma=$i+$a;
        echo $a." + ".$i." = ".$suma."<br>";
    }else{
        echo $i."<br>";
        $i++;

    }
    
    
} while ($i<=100);


?>