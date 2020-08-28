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
</style>
<body>

<h3> Suma numeros pares</h3>

<p class="enunciado" > 
• Crea un formulario que pida al usuario un número. <br>
• Después en otra página se recoge ese número y se muestra la suma total de todos los números pares anteriores a él. <br>
• Mejorar el resultado para que la página que muestra la suma, después muestre un enlace con el que regresar al formulario de modo que al hacer clic en él el cuadrado de entrada del número muestre el último número introducido.<br> </p>


<?php   
 

$numeroAnterior="";
if(isset($_POST["numeraco"])){


 $numeroAnterior= $_POST["numeraco"];
}
?>

<form action="ejercicio1.php" method="post"> 


<input type="text" name ="numeropar"  value= " <?php echo $numeroAnterior;?>"> 
<input type="submit" name="comprobar" value="comprobar"> 


</form>


</body>
</html>