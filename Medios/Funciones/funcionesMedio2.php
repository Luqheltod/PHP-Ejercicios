<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>


<!--   Implementar un formulario que solicite la carga de dos enteros, uno en cada text.
Disponer dos controles de tipo radio que nos permitan seleccionar si queremos sumar o restar los dos valores ingresados: -->



<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">

Numero 1: 
<input type="text" name="numero1" >
Numero 2: 
<input type="text" name="numero2" >
<br>
<label for="sumar">Sumar</label>
<input type="radio" id="sumar" name="operacion" value="sumar" checked>
<label for="Restar">Restar</label>
<input type="radio" id="restar" name="operacion" value="restar">
<input type="submit" name="enviando" value = "Muestra el resultado">

<!--vemos que los dos input type=radio llevan el mismo name, pero distinto value -->
</form>

<br>


<?php 
$numero1 = $numero2 = "";

if(isset($_POST["enviando"])){
    
    
    
    $numero1= $_POST["numero1"];
    $numero2= $_POST["numero2"];
    
    
    $operacion = $_POST["operacion"];
    
    function operasion($operacion){
        
       global $numero1;
       global $numero2;
       $resultado = 0; 
       if ($operacion =="sumar"){
           
           $resultado = $numero1 + $numero2;
       }else{
           $resultado = $numero1 - $numero2;
       }
       
       return $resultado;
    }
    
    if(is_numeric($numero1) && is_numeric($numero2) ){
  echo  operasion($operacion);
    
    }else{
        echo " Escribe dos numeros pajarraco";
    }

}

?>

</body>

</html>