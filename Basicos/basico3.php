<?php

//gsprogramacion.com


$cadena = "Me sube la bilirrubina";

$cad1 = str_replace("r","b",$cadena);

echo $cad1;

echo "<br>";

$cad2 = substr($cadena,5);

echo $cad2;

echo "<br>";



$cad3 = ucwords($cadena);

$cad3 = strtolower(substr($cad3,0,1)) . substr($cad3,1);


echo $cad3;
?>