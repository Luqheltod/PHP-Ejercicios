<?php
//gsprogramacion.com


//2- Declara un array con los sistemas del planeta solar, sustituye Jupiter y Saturno por 2 planetas inventados y muestra el resultado .




//declaramos el array con los planetas

$arrayPlanetas = array("Mercurio","Venus","Tierra","Marte","Jupiter","Saturno","Urano","Neptuno");

//en lugar de hacerlo con la cuenta de la vieja, empleamos la funcion array_search
$claveJupiter = array_search("Jupiter",$arrayPlanetas);
$claveSaturno = array_search("Saturno",$arrayPlanetas);


//ahora sustituimos los valores por nuevos valores inventados

$arrayPlanetas[$claveJupiter] = "PlanetaMega";
$arrayPlanetas[$claveSaturno] = "PlanetaArrakis";

//lo mostramos con un var_dump

var_dump($arrayPlanetas);


?>