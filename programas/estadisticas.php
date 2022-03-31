<?php

    //Este programa recibe un conjunto de datos 
    // y calcula la media aritmetica, la mediana y la moda.

    $lista=readline("Escribe un conjunto de numeros: ");
    $lista=explode(",",$lista);

    //Transformando array de strings a array de enteros:
    for($i=0;$i<count($lista);$i++)
        $lista[$i]=(int)$lista[$i]; //Casting a entero
    

    //Calculando el promedio (media aritmetica).

    $suma=0;
    //Count cuenta el numero de elementos de un array
    for($i=0;$i<count($lista);$i++)
        $suma+=$lista[$i];

    $promedio=$suma/count($lista);

    echo "\n\t El promedio de los datos es: ".$promedio;


    //Tarea: extender este programa para que calcule por lo menos 
    // otros dos tipos de promedio

    echo "\n\n";

?>
