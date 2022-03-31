<?php

    $cafes = array(
        "Capuccino" => 50,
        "Latte" => 55,
        "Americano" => 39,
        "Te chai" =>60
    );

    echo "\n\t El precio del cafe capuccino es: {$cafes['Capuccino']}";
    var_dump($cafes);

    $personas = array (

        "Cristiano" => array (
            "Edad" => 36,
            "Pais" => "Portugal"
        ),

        "Leonel" => array (
            "Edad" => 34,
            "Pais" => "Argentina"
        )

    );

    echo "\n\t La informacion de la primera persona es, Edad: ".$personas["Cristiano"]["Edad"]." Pais: ".$personas["Cristiano"]["Pais"];

    var_dump($personas);
    
    echo "\n\n";


?>

