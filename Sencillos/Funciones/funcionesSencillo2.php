<?php

// dado un array de numeros, realiza una funcion que determine si la suma de los mismos es par o impar.
$array = [-3,4,1,-1];

function parImpar(array $array)
{
    $sumaTotal = array_sum($array);

    if ($sumaTotal % 2 == 0) {

        return "Par";
    } else {

        return "Impar";
    }
}

echo parImpar($array);
?>
    
    
    