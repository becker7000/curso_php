<?php

    //Sintaxis de la estructura de control: selectiva switch.

    $natural=readline("Natural (1-5): ");

    switch($natural){
        case 1: case 2:
            echo "\n\t One or two";
            break;
        case 3: case 4: 
            echo "\n\t Three or four";
            break;
        case 5: 
            echo "\n\t Five";
            break;
        default:
            echo "\n\t Solo numeros del 1 al 5.";
            break;
    }

    echo "\n\n";

?>