<?php

//gsprogramacion.com

//- Realiza una funcion a la que se le pasará un array de numeros. La funcion devuelve la media de dichos numeros incluidos en el array.


//Recorremos el array y sumamos los valores, despues lo dividemos entre la cantidad de valores que tuviese el array.
function devuelveMedia($array){
    
    $cantidad = count($array);
    $total = 0;
    foreach ($array as $valor) {
        $total +=$valor;;
    }
    
    return $total/$cantidad;
}


echo devuelveMedia([2,2,2,2]);

?> 