<?php

    /* La estructura de control if: Sintaxis */

    $edad=(int)readline("Escribe tu edad: ");

    if($edad>=18)
        echo "\n\t Eres mayor de edad \n\n";
    else 
        echo "\n\t Eres menor de edad \n\n";

    var_dump($edad);

    echo "\n\n";

?>