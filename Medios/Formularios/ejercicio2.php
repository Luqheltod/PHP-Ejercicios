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

form{

border:solid;
background-color: yellow;
}





</style>
<body>

<h3> Arrays y formulario. Precio de productos</h3>

<p class="enunciado" > 
• Crea una página PHP que permita elegir una serie de artículos, inventados por ti, de una tienda online mediante checkbox. <br>
• Cada checkbox permite seleccionar un artículo, en el que se indica su precio. <br>
• Al pulsar el botón “Enviar” del formulario, se indicará el detalle de la compra, así como el total de lo que hemos comprado. <br> </p>



<form action="<?php echo $_SERVER['PHP_SELF']?>"   method="post">   

<h3>  Catalogo de productos</h3>

<label for="balon"> Balón de Rugby 25$ </label>
<input type="checkbox"  name="balon"  value=25>

<label for="vela"> Vela Aromatica 15$ </label>
<input type="checkbox"  name="vela"  value=15>

<label for="camion"> Camión 55$ </label>
<input type="checkbox"  name="camion"  value=55>

<br>
<br>

<label for="balonplaya"> Balón de playa 55$ </label>
<input type="checkbox"  name="balonplaya"  value=55>

<label for="ventana"> Ventana 252$ </label>
<input type="checkbox"  name="ventana"  value=252>

<label for="caracol"> Caracol Robótico 125$ </label>
<input type="checkbox"  name="caracol"  value=125>

<br> 
<br> 

<input type= "submit" name ="Submit" value= "Comprobar">


</form>


<?php    


if(isset($_POST["Submit"])){
    
    $valorTotal = 0;
    $seleccion = array();
    
    if(isset($_POST["balon"])){     //vamos comprobando si se han pulsado los checks y añadimos el precio, y tambien la seleccion al array
        
        $valorTotal+=$_POST["balon"];
        
        $seleccion["Balón de Rugby"] = $_POST["balon"] ;
    }
    
    
    if(isset($_POST["vela"])){
        
        $valorTotal+=$_POST["vela"];
        
        $seleccion["Vela Aromática"] = $_POST["vela"] ;
    }
    
    
    if(isset($_POST["camion"])){
        
        $valorTotal+=$_POST["camion"];
        
        $seleccion["Camión"] = $_POST["camion"] ;
    }
    if(isset($_POST["balonplaya"])){
        
        $valorTotal+=$_POST["balonplaya"];
        
        $seleccion["Balón de Playa"] = $_POST["balonplaya"] ;
    }
    if(isset($_POST["ventana"])){
        
        $valorTotal+=$_POST["ventana"];
        
        $seleccion["Ventana"] = $_POST["ventana"] ;
    }
    if(isset($_POST["caracol"])){
        
        $valorTotal+=$_POST["caracol"];
        
        $seleccion["Caracol Robotico"] = $_POST["caracol"] ;
    }
    
    
    echo "<ul>" ;
    foreach ($seleccion as $clave=>$valor) {
       
        echo "<li> $clave  - $valor $ </li>";
        
        
    }
    echo "</ul>" ;
    
    
    echo "El precio total de su compra es  $valorTotal";

}

?>

</body>
</html>
