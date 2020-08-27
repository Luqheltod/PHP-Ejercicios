<?php
//gsprogramacion.com


//1- Declara un array asociativo con tu fecha de nacimiento y muestralo con un var_dump,
//cambia el año a 1847 y muestralo por pantalla con un bucle foreach.


//declaramos el array con los valores de nuestra fecha de nacimiento

$arrayCumple = array("dia" => 21, "mes"=>4, "anio"=>1987);


//lo mostramos con un var_dump

var_dump($arrayCumple);


//cambiamos el año a 1847

$arrayCumple["anio"] = 1847;

//lo mostramos con un bucle foreach

foreach ($arrayCumple as $valor) {
    
    echo $valor . "<br>";
    
}



?>