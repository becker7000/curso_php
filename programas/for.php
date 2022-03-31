<?php
    
    //Sintaxis basica de la estructura de control de repetición: for.

    $n=(int)readline("Escribe un numero entero: ");

    //Las multiplicaciones inician en 1.
    $factorial=1; 

    for($i=$n;$i>=1;$i--)
        $factorial*=$i; // $factorial = $factorial * $i

    echo "\n\t $n != $factorial \n\n";

?>