<?php


//gsprogramacion.com



//creamos las 5 variables.
$num1 = mt_rand(1,1000);

$num2 = mt_rand(1,1000);

$num3 = mt_rand(1,1000);

$num4 = mt_rand(1,1000);

$num5 = mt_rand(1,1000);

//mostramos en pantalla los numeros que han salido de forma aleatoria.
echo "Numeros que han salido" . "<br>";
echo $num1 ."<br>";
echo $num2 ."<br>";
echo $num3 ."<br>";
echo $num4 ."<br>";
echo $num5 ."<br>";


$resultado =  max($num1,$num2,$num3,$num4,$num5); //averiguamos cual es el mas alto de ellos

echo "Numero mas alto = " . $resultado;



?>