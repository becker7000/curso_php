<?php

    //Probando varios tipos de datos y casting:

    $nombre="Jimmy";
    var_dump($nombre);

    $appellido="Page";
    var_dump($appellido);

    $edad=70;
    var_dump($edad);

    $promedio=(8+9.5+9+10+7.2)/5.0;
    var_dump($promedio);

    //Concatenando cadenas: 
    $nombre_completo=$nombre." ".$appellido;
    var_dump($nombre_completo);

    //Casting de entero a booleano:
    //Coerción explícita.
    $asistencia_a1=(bool)1;
    var_dump($asistencia_a1);

    $num=(int)($promedio+$edad);
    var_dump($num);

    $num= 10 + "20 gatitos andan caminando";
    var_dump($num);

?>