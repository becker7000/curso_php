<?php

    //Funciones son subprogramas que ejecutan un bloque de codigo
    //Sin necesidad de escribirlo varias veces.

    function atrapar_pokemon(){

        $aleatorio=rand(1,5);

        switch($aleatorio){

            case 1:
                echo "\n\t Pikachu";
                break;
            case 2: 
                echo "\n\t Onix";
                break;
            case 3:
                echo "\n\t Mewtwo";
                break;
            default:
                echo "\n\t Lo sentimos, aun no eres un maestro pokemon";

        }

    }

    for($i=0;$i<30;$i++)
        atrapar_pokemon();

    echo "\n\n";
?>