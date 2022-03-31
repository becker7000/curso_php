
<?php

    //Sintáxis básica de un arreglo:
    //Lógica cero.
    //$edades = [20,30,32,19,23,18,27];
    //Atajo para comentar una linea o varias: ctrl + } 

    $edades = array(19,20,21,22,23,24);
    // echo "Una de las edades es: ".$edades[4];
    // var_dump($edades);

    for($i=0;$i<6;$i++)
        echo "\n\t Edad $i: ".$edades[$i];

    echo "\n\n";

?>