<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<!-- Solicitar que se ingrese por teclado el nombre de una persona y disponer tres controles de tipo radio que nos permitan 
seleccionar si la persona: 1-Habla solo Español , 2-Habla solo Ingles y 3- Habla Español e Ingles.
En la misma pagina indicar el nombre  y su seleccion, si no ha indicado nombre, llamarlo anonimo. -->


<form action="" method="post">
Nombre: 
<input type="text" name = "nombre">
<br>

Estudios : 

<br> 
<label for = "noestudios" >Sin estudios </label>
<input type="radio" id="noestudios" name="estudios" value="Sin estudios" checked>
<label for = "primarios" >Estudios primarios </label>
<input type="radio" id="primarios" name="estudios" value="Estudios primarios" >
<label for = "secundarios" >Estudios secundarios </label>
<input type="radio" id="secundarios" name="estudios" value="Estudios secundarios" >
<br>
<input type="submit" name="enviando" value="Enviar"> 
</form>

<?php 

if ( isset($_POST["enviando"])){
    
    $estudios = $_POST["estudios"];
    if(!empty( $_POST["nombre"])){
    echo $_POST["nombre"] . "<br>";
    } else{
        echo "Anonimo <br>";
    }
    echo "Estudios:  $estudios";
}

?>

</body>

</html>