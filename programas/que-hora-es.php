<?php

    function obtener_hora(){
        date_default_timezone_set('America/Mexico_City');
        return date("h:i:s a");
    }

    echo "\n\t Hola, soy una inteligencia artificial.";
    echo "\n\t Puedo darte la hora!";
    echo "\n\t La hora es: ".obtener_hora();

    echo "\n\n";

?>
