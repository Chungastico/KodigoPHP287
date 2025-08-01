<?php
function mergeSort($array) {
    // Caso base: si el arreglo tiene 1 elemento, ya está ordenado
    if(count($array) <= 1) {
        return $array;
    }

    // Dividir el arreglo en mitades
    $middle = floor(count($array) / 2);
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    // Recursivamente ordenar las mitades
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Combinar las mitades ordenadas
    return merge($left, $right);
}

function merge($left, $right) {
    $result = [];

    // Comparar elementos de izquierda y derecha
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }

    // Agregar cualquier elemento restante
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }

    while (count($right) > 0) {
        $result[] = array_shift($right);
    }

    return $result;
}

// Ejemplo de uso:
$numeros = [38, 27, 43, 3, 9, 82, 10];
$ordenado = mergeSort($numeros);

echo "Arreglo ordenado: ";
print_r($ordenado);
?>