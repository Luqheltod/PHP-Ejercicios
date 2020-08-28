<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<!-- 3- Realiza un formulario con dos campos en los que introducir numeros. Incluye un boton select para decidir si esos numeros se suman,
 restan, multiplican , o dividen. Muestra el resultado en la misma pagina.   -->


<form action="" method="POST">  

Numero 1 
<input type="text" name="numero1"> 
Numero 2 
<input type="text" name="numero2"> 

<select name="operacion"> 
<option value="suma">Sumar</option> 
<option value="resta">Restar</option> 
<option value="multiplica">Multiplicar</option> 
<option value="divide">Dividir</option> 

</select>
<input type="submit" name="enviar" value = "Enviar">

</form>

<?php 
//si hemos pulsado el boton de enviar, sumamos y mostramos los numeros, utilizando en este caso un switch, que depende del select.
if(isset($_POST["enviar"])){
    
    switch ($_POST["operacion"]){
        
        case "suma":
        
            echo ($_POST["numero1"] + $_POST["numero2"]);
            break;
        
        case "resta":
            
            echo ($_POST["numero1"] - $_POST["numero2"]);
            break;
            
        case "multiplica": 
            
            echo ($_POST["numero1"] * $_POST["numero2"]);
            break;
            
        case "divide": 
            
            echo ($_POST["numero1"] / $_POST["numero2"]);
            break;
    }
    
   
}

?>

</body>

</html>