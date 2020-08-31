<!DOCTYPE html>
<html>
<body>


<?php

session_start();

if(!isset($_SESSION["contador"])){
    
    $_SESSION["contador"] = 0;
}

if(!isset($_SESSION["nombre"])){
    
    $_SESSION["nombre"] =" " ;
}
/*
 * Realiza un formulario sencillo en el que se pida el nombre. Una vez pulsado el boton enviar redirigirá al
 * usuario a una pagina distinta donde se le indicará cuantas veces ha visitado esa pagina y tendra un enlace para volver
 * al formulario anterior. El formulario anterior mantendrá el nombre escrito que se le indicó anteriormente y si pulsa de nuevo
 * el boton enviar , el contador se actualizará de nuevo. (La primera vez mostrará que ha visitado esa pagina 1 vez, la segunda 2,
 * y asi sucesivamente.
 */
?>

	<form method="post" action="sesiones1sencilloVis.php">

		Nombre : <input type="text" name=nombre value=<?php echo $_SESSION["nombre"] ?>> <br> <input type="submit"
			name="submit" value="Submit"> <br>

    </form>
    
    
    