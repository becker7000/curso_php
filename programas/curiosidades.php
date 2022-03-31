<?php

    # PHP es debilmente tipado:
    // Tipo de dato entero:
    $num=45;
    // Tipo de dato flotante
    $y=10.45;

    //Forma automatica en la PHP juega con los datos.
    $x="302"; //Esto es un 30 guardado como cadena.

    /* Coerción: transformar de un tipo de dato a otro.
     * 1) Implicita: se hacer de forma automatica.
     * 2) Explicita: se hace de forma manual, obligamos a PHP.
     */
    var_dump($num + $x);
    var_dump($x + $y);
    var_dump($x);

    // Casting de un variable: (Coerción explicita).
    // De string a entero:
    $x = (int)$x;
    var_dump($x);

    /*

        Hacer casting de:
        1) entero a flotante y viceversa
        2) cadena a flotante y viceversa
        3) flotante a entero y viceversa
    
    */

    echo "\n\n";

?>