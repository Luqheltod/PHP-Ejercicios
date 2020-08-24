<?php

//4 - Determine una variable aleatoria entre el 0 y el 30. Muestre en pantalla si es mayor , menor de 18 o igual a 18.


$numero = mt_rand(0,30);

echo "Su numero aleatorio es $numero " . "<br>";

if($numero > 18){
    
    echo "Ergo es mayor a 18" ;
    
} else if ($numero == 18 ){
    
    echo "Ergo es igual a 18";
} else{
    
    echo "Ergo es menor a 18";
}


?>