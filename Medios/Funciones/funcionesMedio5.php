<?php

// gsprogramacion.com

// dados dos arrays de strings a1 y a2, realizar una funcion que devuelva un array ordenado por orden afabetico que contenga
// los strings de a1 que se encuentran en cualquier cadena de a2. Ejemplo : a1 = ["ola" , "ando" , "mero"] , a2=["mola" ,"andando" , "esmero", "praxis"]
// devolveria un array = ["ando","mero","ola"] .
function compruebaStrings(array $array1, array $array2): array
{
    $nuevoArray = array();

    foreach ($array1 as $valor) {

        foreach ($array2 as $valor2) {
            // si se encuentra en el segundo array, lo añadimos al nuevo
            $pos = strpos($valor2, $valor);
            if ($pos || $pos === 0) {

                $nuevoArray[] = $valor;
            }
        }
    }

    // lo ordenamos alfabeticamente y eliminamos duplicados
    sort($nuevoArray);
    $nuevoArray = array_unique($nuevoArray);

    // si queremos que salgan con clave correlativa.. (existe una funcion que hace esto, podeis intentar buscarla)
    $i = 0;
    $nuevoArray2 = array();
    foreach ($nuevoArray as $value) {
        $nuevoArray2[$i] = $value;
        $i ++;
    }

    return $nuevoArray2;
}

// prueba
$array = [
    "ive",
    "arm",
    "st",
    "ali"
];

$array2 = [
    "lively",
    "alive",
    "harp",
    "sharp",
    "armstrong"
];

$ArrayX = compruebaStrings($array, $array2);
var_dump($ArrayX);

?>




