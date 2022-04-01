<?php

    $cafes=array(
        "Capuccino"=>50,
        "Latte"=>45,
        "Americano"=>40,
        "Te chai"=>55,
        "Cold brew"=>40,
        "Oaxaca"=>45,
        "Veracruz"=>40,
        "Michoacan"=>45,
        "Con leche"=>50
    );

    //Ciclo foreach
    echo "\n\t Los precios de los cafés son: ";
    foreach($cafes as $cafe => $precio)
        echo "\n\t El café $cafe cuesta $$precio";

    //Readline por default guarda una cadena(string)
    echo "\n\n";
    $producto=readline("Escribe un cafe de deseas buscar: ");
    foreach($cafes as $cafe => $precio){
        if($producto==$cafe){
            echo "\n\t Café $cafe encontrado ";
            echo "\n\t Costo: $precio";
        }
    }

    echo "\n\n";

?>