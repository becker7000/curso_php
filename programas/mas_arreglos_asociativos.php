
<?php

    //Guarderia de gatitos

    $michis = array(
        
        "Coco"=>array(
            "Nombre"=>"Coco",
            "Ocupacion"=>"Saltar",
            "Color"=>"Cafe",
            "Comidas"=>array(
                "Favoritas"=>array(
                    "c1"=>"Papilla",
                    "c2"=>"Leche"
                ),
                "Odiadas"=>array(
                    "c1"=>"Vegetales",
                    "c2"=>"Frutas"
                )
            )
        ),

        "Pepe"=>array(
            "Nombre"=>"Pepe",
            "Ocupacion"=>"Dormir",
            "Color"=>"Gris con machas negras",
            "Comidas"=>array(
                "Favoritas"=>array(
                    "c1"=>"Lasaña",
                    "c2"=>"Pizza"
                ),
                "Odiadas"=>array(
                    "c1"=>"Mango",
                    "c2"=>"Papilla"
                )
            )
        ),

        "Hendrix"=>array(
            "Nombre"=>"Hendrix",
            "Ocupacion"=>"Comer",
            "Color"=>"Blanco",
            "Comidas"=>array(
                "Favoritas"=>array(
                    "c1"=>"Pollo",
                    "c2"=>"Todo"
                ),
                "Odiadas"=>array(
                    "c1"=>"Croquetas",
                    "c2"=>"Ninguna"
                )
            )
        )
    );

    // Información del michi 1:
    echo "\n\t Informacion del michi 1: ";
    echo "\n\t Nombre: ".$michis["Coco"]["Nombre"];
    echo "\n\t Ocupacion: ".$michis["Coco"]["Ocupacion"];
    echo "\n\t Color: ".$michis["Coco"]["Color"];
    echo "\n\t Comida favorita 1: ".$michis["Coco"]["Comidas"]["Favoritas"]["c1"];
    echo "\n\t Comida favorita 2: ".$michis["Coco"]["Comidas"]["Favoritas"]["c2"];
    echo "\n\t Comida odiada 1: ".$michis["Coco"]["Comidas"]["Odiadas"]["c1"];
    echo "\n\t Comida odiada 1: ".$michis["Coco"]["Comidas"]["Odiadas"]["c2"];

    
    // Información del michi 2:
    echo "\n\t Informacion del michi 2: ";
    echo "\n\t Nombre: ".$michis["Pepe"]["Nombre"];
    echo "\n\t Ocupacion: ".$michis["Pepe"]["Ocupacion"];
    echo "\n\t Color: ".$michis["Pepe"]["Color"];
    echo "\n\t Comida favorita 1: ".$michis["Pepe"]["Comidas"]["Favoritas"]["c1"];
    echo "\n\t Comida favorita 2: ".$michis["Pepe"]["Comidas"]["Favoritas"]["c2"];
    echo "\n\t Comida odiada 1: ".$michis["Pepe"]["Comidas"]["Odiadas"]["c1"];
    echo "\n\t Comida odiada 1: ".$michis["Pepe"]["Comidas"]["Odiadas"]["c2"];

    // Información del michi 3:
    echo "\n\t Informacion del michi 3: ";
    echo "\n\t Nombre: ".$michis["Hendrix"]["Nombre"];
    echo "\n\t Ocupacion: ".$michis["Hendrix"]["Ocupacion"];
    echo "\n\t Color: ".$michis["Hendrix"]["Color"];
    echo "\n\t Comida favorita 1: ".$michis["Hendrix"]["Comidas"]["Favoritas"]["c1"];
    echo "\n\t Comida favorita 2: ".$michis["Hendrix"]["Comidas"]["Favoritas"]["c2"];
    echo "\n\t Comida odiada 1: ".$michis["Hendrix"]["Comidas"]["Odiadas"]["c1"];
    echo "\n\t Comida odiada 1: ".$michis["Hendrix"]["Comidas"]["Odiadas"]["c2"];

    echo "\n\n";

?>