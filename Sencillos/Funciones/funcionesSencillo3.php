<?php

//gsprogramacion.com

//Realiza una funcion que recibira dos strings como argumento, devolverá true si el primer string termina con el segundo string, y falso si no lo hace.
// Por ejemplo si le pasamos , "ninja" y "ja" , devolvera true, tambien si le pasamos "mando" y "ando" .







function finalString ($string , $string2){
    
    $numeroLetras = mb_strlen($string2);
    
    $letrasComparar = substr($string, -($numeroLetras));
    
    $numeroCom = strcmp($letrasComparar, $string2);
    
    if ( $numeroCom ==0){
        return true;
    } else{
        return false;
    }
}


echo finalString("ninja","ja");
?>