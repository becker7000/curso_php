<?php

    //Función más inteligente:
    //Esta función puede tener multiples parametros:

    function sumar_mejorada(...$parametros){
        $suma=0;
        foreach($parametros as $elemento){
            echo "\n\t $elemento";
            $suma+=$elemento; //Suma acumulada
        }

        echo "\n\t La suma total es: $suma";
    }

    echo "\n\t Separa los numeros a sumar con una coma ',' ";
    echo "\n";
    $numeros=readline("Numeros: ");
    $numeros=explode(",",$numeros);

    sumar_mejorada(...$numeros);

    echo "\n";

?>