<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<?php 


$numero = $_POST["numeropar"];




echo "Sumamos ";

if($numero%2 == 0 ){
     //es par 
    
    $resultado= $numero - 2;
        
     
    for ($i=$resultado; $i >= 0; $i-=2) {
        
        
        echo $i ." ";
        
        $resultado+=$i;
    }
    
   echo "= " . ($resultado - ($numero-2));  
    
    
    
}  else{
    
  //es impar

    $resultado= $numero - 1;

for ($i=$resultado; $i >= 0; $i-=2) {
    
    
    echo $i ." ";
    
    $resultado+=$i;
}

echo "= " . ($resultado - ($numero-1));



}  



?>


<form action = "SumaNumerosPares.php" method ="post"> 


<input type = "hidden" name = "numeraco" value="<?php echo $numero ;?> " > 

<input type= "submit"  value = "Volver al formulario" > 




</form>

</body>







</html>