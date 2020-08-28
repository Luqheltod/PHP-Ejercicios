<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Sencillo Form </title>
</head>
<body>


<!-- Mediante un formulario pide el nombre y la edad, despues de pulsar el boton enviar, 
debe aparecer un mensaje diciendo “Te llamas (nombre) y eres mayor/menor de edad -->

<form action="" method="post">

Nombre: 
<input type="text" name="nombre" >
Edad: 
<input type="text" name="edad" >

<input type="submit" name="enviando" value = "Submitea">


</form>

<br>

<?php 

if(isset($_POST["enviando"])){
    
    $edad = $_POST["edad"];
    
    
    if(!empty($edad)){
    if($edad > 18){
        
        echo "Eres mayor de edad";
    }else {
        echo "Eres menor de edad";
    }
}   

else{
    echo "Escribe una edad";
}}
?>

</body>

</html>