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
</style>
<body>

<h3>1) Multipos de 7</h3>
<p class="enunciado">  Escribir un programa PHP que muestre en pantalla números aleatorios entre 1 y 500 hasta que aparezca un múltiplo de 7. </p>

<?php 

do{

   
    
$numero= rand(1,500);

echo $numero;

if($numero%7==0){
    echo " Es multiplo de 7, el script finaliza." ;
}else{
    
    echo "<br>";
}

}   while($numero%7!=0) ;
    
    
    



?>


</body>
</html>