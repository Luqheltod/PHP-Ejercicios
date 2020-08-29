<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>


<style> 

.enunciado{color:blue;
}

.error{color:red;
}

form{

border:solid;
background-color: yellow;
}





</style>
<body>

<h3> Texto Y Array</h3>

<p class="enunciado" > 
• Escribe un programa PHP que permita al usuario introducir un texto mediante una caja de texto. El programa informará al usuario si en dicho texto se incluyen palabras que comience por mayúscula, tenga entre 8 y 10 letras, contenga 4 vocales y termine en “ero”.<br>
• El programa devolverá un listado con las palabras que cumplan dichas condiciones. Dichas palabras aparecerán en mayúsculas y separadas por un ‘-‘ y sin repetirse.<br>
• Se listarán ordenadas de mayor a menor longitud y si hay palabras de igual longitud se ordenarán en orden alfabético. Podemos asumir que las palabras pueden estar separadas por blancos, carácter de nueva línea, tabuladores, puntos, comas, dos puntos y punto y coma.<br> </p>



<form action="<?php echo $_SERVER['PHP_SELF']?>"  method ="post">  


INTRODUCE UN TEXTO <br>  <textarea name="frase" rows="5" cols="40"></textarea> <br>

<input type="submit" name="Submit" value="Comprobar">
</form>




<?php    





$arrayValores = array( " ", ".",";",":" ,"\n","\t");



if(isset($_POST["Submit"])){
    
    $mayusculas = array();
    $mayores8 = array();
    $vocales4= array();
    $acabadasEro = array();
    
   $frase= $_POST["frase"];
    
   $frase = str_replace($arrayValores, ",", $frase);
   
   $palabras = preg_split("/[\s,]+/", $frase);
   
   
   
   
   foreach ($palabras as $value) {   //Metemos en arrays si se cumplen las condiciones;
       
       
       
       
   
       if( ctype_upper( substr($value, 0,1))){  //si la primera es mayuscula
           
           $mayusculas[] = $value;
       }
           if ( (strlen($value) >= 8) &&  (strlen($value) <= 10)){ //si la longitud esta entre 8 y 10
               
               $mayores8[] = $value;
           }
           
           //si tiene 4 vocales
           $vocales = array();
           preg_match_all('/[aeiou]/i',$value,$vocales);
           
           if(count($vocales[0]) == 4){
               $vocales4[] = $value;
               
           }
           
           //si acaba en ero 
           
           if ( substr( strtolower($value), -3) == "ero"){
               
               $acabadasEro[] = $value;
           }
   }
       
      
       
   
   
   
   
//Las palabras que empiezan por mayusculas, las ordenamos y las metemos en una cadena. Despues las mostramos y sucesivamente con todos los parametros que se cumplen.   
   
 echo "Palabras que empiezan por mayuscula:  <br>";
   
$cadenaMayus="";


usort($mayusculas, function($a, $b) {
    return strlen($b) <=> strlen($a);
});
   
$mayusculas = array_unique($mayusculas);
   
   foreach ($mayusculas as $value) {
       
       $cadenaMayus .= $value . "-";
    
   }
   
   
   $cadenaMayus = trim($cadenaMayus, '-');
   $cadenaMayus = mb_strtoupper($cadenaMayus);
   echo $cadenaMayus;

echo "<br>";


//las palabras de 8 y 10 

echo "Palabras entre 8 y 10 caracteres:   <br>";

$cadena8="";

$mayores8= array_unique($mayores8);

usort($mayores8, function($a, $b) {
    return strlen($b) <=> strlen($a);
});
    
    
    foreach ($mayores8 as $value) {
        
        $cadena8 .= $value . "-";
        
    }
    
    $cadena8 = trim($cadena8, '-');
    $cadena8 = mb_strtoupper($cadena8);
    echo $cadena8;

    echo "<br>";


echo "Palabras con 4 vocales: <br> ";

$cadenavocales = "";

$vocales4=array_unique($vocales4);
usort($vocales4, function($a, $b) {
    return strlen($b) <=> strlen($a);
});

foreach ($vocales4 as $value) {
    $cadenavocales .= $value . "-";
}

$cadenavocales = trim($cadenavocales, '-');
$cadenavocales = mb_strtoupper($cadenavocales);
echo $cadenavocales;
echo "<br>";


echo "Palabras acabadas en -ero <br> ";

$cadenaEro = "";

$acabadasEro = array_unique($acabadasEro);

usort($acabadasEro, function($a, $b) {
    return strlen($b) <=> strlen($a);
});
    
    foreach ($acabadasEro as $value) {
        $cadenaEro .= $value . "-";
    }
    
    $cadenaEro = trim($cadenaEro, '-');
    $cadenaEro = mb_strtoupper($cadenaEro);
    echo $cadenaEro;
    echo "<br>";
}
?>

</body>
</html>