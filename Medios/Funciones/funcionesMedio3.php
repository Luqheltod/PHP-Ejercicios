<?php

//gsprogramacion.com

//dado un string con numeros separados por un espacio ("1 2 3 4 5") , realizar una funcion que devuelva el mayor y el menor en un string
//en este caso devolveria "1 5".




function devolver($string){
    
    $numeros = explode (" ", $string);
    
    return min($numeros) . " " . max($numeros);
}


$string = "-11 12 3 4 5";


echo devolver($string);


?>
