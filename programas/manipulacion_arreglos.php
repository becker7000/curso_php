<?php

    //FUNCIONES DE ARREGLOS: 

    //Declarando un dato tipo String(Cadena):
    $frutas=readline("Frutas que te gusta: ");
    //Transformando un string a arreglo:
    //Función explode:
    $frutas=explode(",",$frutas);
    
    
    echo "\n\t Hoy puedes comer la siguiente combinacion: ";
    for($i=0;$i<3;$i++){
        $aleatorio=rand(0,4);
        echo "\n\t ".$frutas[$aleatorio];
    }
    //Reto: buscar una forma en la cual no se repitan las fruta.

    echo "\n\n";


?>