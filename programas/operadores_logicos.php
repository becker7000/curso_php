<?php

    //Datos booleanos:

    $los_tigres_son_felinos=true;
    $los_tigres_tienen_cuatro_patas=true;

    $los_tigres_vuelan=false;
    $los_tigres_programan_con_PHP=false;

    $resultado= ($los_tigres_son_felinos && $los_tigres_vuelan)||($los_tigres_programan_con_PHP || $los_tigres_tienen_cuatro_patas);
    var_dump( $resultado );

?>