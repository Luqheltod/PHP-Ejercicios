<?php
//gsprogramacion.com


//3- Declara un array con 10 numeros aleatorios , muestralo en pantalla. Ordena el array por orden de mayor a menor y vuelve a mostrarlo .


//Declaramos un array con 10 numeros aleatorios
//Primero declaramos el array y despues instanciamos con un for.

$arrayRandom = array();
for ($i = 0; $i < 10; $i++) {
    
    
    $arrayRandom[$i] = mt_rand(0,100);
    
}

//los mostramos en pantalla.
var_dump($arrayRandom);

//ordenamos el array de mayor a menor

rsort($arrayRandom);

//lo volvemos a mostrar , vemos que ahora esta de mayor a menor , la funcion ha hecho su trabajo.

var_dump($arrayRandom);

?>