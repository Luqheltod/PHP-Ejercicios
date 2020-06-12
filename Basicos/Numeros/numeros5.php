<?php

//gsprogramacion.com


//Incluí algunas cosas nuevas para que descubrais tambien otras sintaxis.

echo "Nuestro numero sera 1337" . "<br>" ; //br es simplemente para cambiar de linea (etiqueta html)
//declaramos la variable con nuestro numero
$numeroInicial = $numeroTrabajado = 1337;  //Declaramos dos variables con el mismo valor

//sumamos 5
$numeroTrabajado+=5;   // esta es una manera de sumar,restar, dividir, etc con la que podreis ahorrar algo de tiempo. Es igual que realizar $numero = $numero +5;
echo "Sumamos 5: " . $numeroTrabajado . "<br>";

//Multiplicamos por 2 y restamos 4 .
$numeroTrabajado*=2;
$numeroTrabajado-=4;

echo "Multiplicamos por 2 y restamos 4: " . $numeroTrabajado . "<br>";

//Dividimos entre 2 y le restamos nuestro numero
$numeroTrabajado/=2;
$numeroTrabajado-=$numeroInicial;
echo "Dividimos entre 2 y le restamos nuestro numero: " . $numeroTrabajado;

?>