<?php

    //Entrada de datos.
    $segundos=(int)readline("Escribe cuantos segundos: ");

    //Solución del reto de ayer.
    echo "\n\t Segundos introducidos: ".$segundos;

    // 4000 segundos = 1 hora (3600s) + 6 minutos (360s) + 40 segundos 
    $horas=(int)($segundos/3600);
    $minutos= (int)(($segundos%3600)/60);
    $segundos=$segundos%60;
    echo "\n\t Es equivalente a $horas hora(s) con $minutos minuto(s) con $segundos segundo(s). ";

    echo "\n\n";
?>
