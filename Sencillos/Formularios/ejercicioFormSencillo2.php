<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<!--  2- Pide dos numeros mediante un formulario, muestra la suma de ellos al pulsar el boton enviar.  -->


<form action="" method="POST">  

Numero 1 
<input type="text" name="numero1"> 
Numero 2 
<input type="text" name="numero2"> 

<input type="submit" name="enviar" value = "Enviar">

</form>

<?php 
//si hemos pulsado el boton de enviar, sumamos y mostramos los numeros
if(isset($_POST["enviar"])){
    
    echo ($_POST["numero1"] + $_POST["numero2"]);
}

?>

</body>

</html>