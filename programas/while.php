<?php

    //Suma de Gauss con while:
    // 1+2+3+4+5+...+n=suma

    $n=(int)readline("Numero maximo: ");
    $suma=0; //La suma simpre se inician cero.
    $i=1;

    while($i<=$n){
        $suma+=$i; //$suma = $suma + $n
        $i++;
    }

    echo "\n\t La suma del 1 al $n = $suma \n\n";

?>
