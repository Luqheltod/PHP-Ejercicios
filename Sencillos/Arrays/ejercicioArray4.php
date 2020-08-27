<?php
//gsprogramacion.com


//4-Crea un array con los 5 primeros objetos que veas a tu alrededor.
//Muestra mediante un bucle for o foreach solo las palabras del array que contengan la letra “e”.


//Creamos el array

$arrayObjetos = array("Botella","Despertador","Cascos","Sombrero","Libro");


//Para mostrar las palabras que lleven solo la e usaremos un bucle foreach y la funcion strpos dentro de un if.
/* ¿Como funciona?
 * Recorremos el array uno a uno . Si strpos lanza "algo", es decir, si encuentra la letra e, mostramos el resultado
 * De lo contrario lanzará FALSE y no entrará en ese IF, por lo tanto no escribirá nada
 *
 */
foreach ($arrayObjetos as $valor) {
    
    if( strpos( $valor, "e")){
        
        echo $valor . "<br>";
    }
    
}




?>