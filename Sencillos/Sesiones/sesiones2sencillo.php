<?php
session_start();

?>
<!DOCTYPE html>
<html>
<body>


<form method="post" action=" <?php echo $_SERVER['PHP_SELF']?>" >

Nombre :  

<input type = "text" name = nombre> 
<br> 
Apellido : 

<input type= "text" name = apellido> 
<br> 
<input type="submit" name="submit" value="Submit">
<br> 




</form>




<?php 

//si damos el boton de enviar, guardamos en las variables nombre y apellido lo introducido. 
if(isset($_POST["submit"])){
    
    $nombre=  $_POST["nombre"];
    $apellido=  $_POST["apellido"];
    
}

//ahora, si la sesion no esta iniciada. La creamos.
if(!isset($_SESSION["todos"])){
    
    $_SESSION["todos"] = array ();
    
} else{     //si por el contrario ya esta creada, rellenamos como un array con nombre y apellido .
    
    $_SESSION["todos"][$nombre] = $apellido;
}




foreach ($_SESSION["todos"] as $clave=>$valor) {  //queda simplemente recorrer el array y mostrar nombre y apellido. 
    
    echo "$clave <br>";
    echo "$valor <br>";
}


/* ¿Como funciona? 
 * La clave está en que crea el array en la sesion la primera vez que se carga la pagina, ya que no esta dentro del IF del submit :)
 * 
 */
?>

</body>
</html>