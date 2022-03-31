<?php

    //Tricotomía de un número:

    $num=readline("Numero: "); 
    //Nota: este dato es guardado como una cadena
    // aún así se pueden hacer comparaciones.

    if($num>0)
        echo "\n El numero es positivo. \n";
    elseif($num<0)
        echo "\n El numero es negativo. \n";
    else
        echo "\n El numero es exactamente cero.\n";

    var_dump($num);

?>
