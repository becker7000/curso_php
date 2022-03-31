<?php

    $a=3; #Entero 
    $b=3; #Entero
    $c=7;
    $d=8;
    $e="3"; #Cadena
    $f=3.0; #Flotante

     /* Operador relacional == da verdadero si ambas 
      * expresiones son iguales en valor.
      */

    echo "\nOperador == \n";
    var_dump($a==$b);
    var_dump($a==$e);
    var_dump($a==$f);

    /* Operador relacional === da verdadero si ambas
     * expresiones son iguales en valor y en tipo.
     */

    echo "\nOperador === \n";
    var_dump($a===$b);
    var_dump($a===$e);
    var_dump($a===$f);

    # Operador != da verdadero si ambas expresiones son distintas.

    echo "\nOperador != \n";
    var_dump( $a != $c);

    # Operadores >=, <=, <,> da verdadero o falso según el caso.

    echo "\nOperadores >=, <=, >, < \n";
    var_dump( $a>=$b);
    var_dump( $c<=$d);
    var_dump( $c<$d);
    var_dump( $c>$d);

    # Operador nave espacial <=>.
    var_dump(2<=>1); // Devuelve 1.
    var_dump(1<=>7); // Devuelve -1.
    var_dump(4<=>4); // Devuelve 0.

    # Operador fusión a null ??.
    # NULL es un valor primitivo.
    # Se usa cuando un registro no tiene valor en un campo.
    $nombre_2="Karla";
    var_dump($nombre_1 ?? $nombre_2);


?>
