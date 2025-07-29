<?php

function aVeryBigSum($ar) {
    $acumulador=0;
    for ($i=0;$i<count($ar);$i++){
        $acumulador+=$ar[$i];
    }
    return $acumulador;
}



