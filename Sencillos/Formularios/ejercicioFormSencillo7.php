<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select </title>
</head>
<body>



<!--  Confeccionar un formulario que solicite el ingreso del nombre de una persona y un control select (en este último permitir
 la selección de los ingresos mensuales de la persona: 1-1000,1001-3000,>3000)
En la página que procesa el formulario mostrar un mensaje si debe pagar impuestos a las ganancias (si supera 3000)
 -->
 
     
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "  method="post">

Nombre: <input type="text" name="nombre"> <br>

Ingresos: <br> 

<select name="ingresos">
<option value=1> 1-1000$ </option>
<option value=2> 2-2000$ </option>
<option value=3> Mas de 3000 </option>
</select>

<input type="submit" name="enviar" value="Comprueba"> 


</form>

<?php 

if(isset($_POST["enviar"])){
    
    $impuestos="";
    if($_POST["ingresos"] ==3){
        
        $impuestos= "SI";
        
    }else{
        $impuestos= "NO";
    }
    
    // aqui estamos haciendo una pequeña validacion como anticipo del siguiente apartado
    if(!empty($_POST["nombre"])){
        
     $nombre=    $_POST["nombre"];
     
     echo "Don $nombre , usted $impuestos debe pagar impuestos";
    } else{
        echo "<p style= 'color:red;'>  introduzca un nombre </p>" ;
    }
}

?>

</body>

</html>