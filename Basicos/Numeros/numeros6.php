<?php

//gsprogramacion.com



$numeroInicial = mt_rand(1,999999);

echo "Nuestro numero sera " . $numeroInicial . "<br>" ; //br es simplemente para cambiar de linea (etiqueta html)

$numeroTrabajado = $numeroInicial;

//sumamos 5
$numeroTrabajado+=5;  
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