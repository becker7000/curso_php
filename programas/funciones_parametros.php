<?php

    //Funciones con valores por defecto: 
    //Función con parametros:
    function sumar($a=0,$b=0){
        echo "\n\t $a + $b = ".($a+$b);
    }

    sumar(4,5);
    sumar(30,50);
    sumar(99,2);
    sumar(21,22);

    //Haciendo uso de los valores por defecto:
    //Así volvemos más inteligente a una función:
    sumar();
    sumar(23);

    echo "\n";
    //Array unpacking
    //Ejemplo:
    // $arrayA=[1,2,3];
    // $arrayB=[4,5,6,7];
    // $union=[...$arrayA, ...$arrayB];
    // var_dump($union);

    //Ejemplo de array unpacking + funciones con parametros:
    $duo=[34,23];
    sumar(...$duo);


    echo "\n\n";

?>