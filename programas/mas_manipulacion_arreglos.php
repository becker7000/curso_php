<?php

    //Declarando un arreglo de numeros:
    $calificaciones=[9,8,7,8,10,10];

    //Transformando el arreglo a string:
    $calificaciones=implode(" | ",$calificaciones);

    echo "\n\t Lista de calificaciones: ".$calificaciones;

    echo "\n\n";

?>