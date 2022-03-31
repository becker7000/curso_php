<?php
  
    $dias=[15,12,20,10,21,11];

    //Función count
    echo "\n\t El tamanio del arreglo es: ".count($dias);

    for($i=0; $i<(count($dias));$i++)
        echo "\n\t Posición $i: ".$dias[$i]." dias";

    //Función array_push
    array_push($dias,25);
    array_push($dias,19);
    array_push($dias,38);

    for($i=0; $i<(count($dias));$i++)
        echo "\n\t Posición $i: ".$dias[$i]." dias";

    echo "\n\t";
?>