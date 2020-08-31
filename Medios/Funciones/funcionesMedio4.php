<?php

//gsprogramacion.com

//Una ciudad quiere saber cuanto tardaria en alcanzar determinada poblacion. Conoce la poblacion inicial, el porcentaje que aumenta
//al año  y el aumento extra de habitantes que vienen libremente
//Realiza una funcion con 4 argumentos. Poblacion inicial, porcentaje de aumento, aumento libre, poblacion final.
//la funcion debe ser capaz de devolver cuantos años serian necesarios para que se alcanze la poblacion final.


function cuantosAnios($pinicial, $porcentaje, $aumento, $pfinal) {
    
    
    $numeroPorcentaje = $porcentaje/100;
    $contador= 0;
    
    while($pinicial<$pfinal){
        
        //mientras que la poblacion inicial sea menor a la pobacion que se desea alcanzar, se suman los aumentos
        // y se cuenta un año mas. Cuando se alcanze la poblacion deseada, el while se detendrá y se devolverá el contador
        $pinicial+= ($pinicial *$numeroPorcentaje) +$aumento;
        $contador++;
        
    }
    
    
    return $contador;
    
}





echo cuantosAnios(1500, 5, 100, 5000);