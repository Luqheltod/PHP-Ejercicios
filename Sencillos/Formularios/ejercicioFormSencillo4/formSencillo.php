<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>



</head>
<body>

<!-- Simula un Login con un formulario . Solo permite entrar si se introduce como login y contraseña root-root. Si se introduce un login incorrecto, muestra un mensaje de error en pantalla, de lo contrario, 
   redirige a otra web en la que se muestre el mensaje “Bienvenido señor root” .  -->

<!-- Normalmente utilizariamos sesiones para el ejercicio, pero aun no las conocemos -->
<h1> Introduce tus datos</h1>


<?php  




$error = "";

if(isset($_POST["enviar"])){
    
    if($_POST["login"]!="root" || $_POST["password"]!="root"){
        
        $error = "Contraseña o nombre de usuario incorrecto";
    } else{
        
        header("Location:loginCorrecto.php");
    }
    
}



?>

<form action="" method="post" >

 
Login: <input type="text" name ="login" required> 

Password: <input type="password" name="password" required> 

<input type="submit" name="enviar" value="Login">
<?php  

echo $error;

?>
</form>





</body>

</html>