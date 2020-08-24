<?php 


//3 - Escribe la tabla de multiplicar de un numero aleatorio del 1 al 9 y ejecuta este codigo 5 veces.  



$variable = mt_rand(1,9);




echo "En esta ocasion vamos a escribir la tabla del " . $variable . " cinco veces <br>";

for ($j = 0; $j < 5; $j++) {
    


for ($i = 1; $i <= 10; $i++) {
    
    echo $variable . " * " . $i . " = " . $variable*$i . "<br>";
    
    
}
echo "<br> <br>";
}
?>