<?php  session_start();?>
<!DOCTYPE html>
<html>
<body>


<?php

if($_SESSION["contador"] >0){
    
    $stringVez = "veces";
}else {
    
    $stringVez = "vez";
}

$_SESSION["contador"] +=1;

echo "ola " . $_POST['nombre'] . " has visitado la pagina " . $_SESSION['contador'] . " " . $stringVez;

$_SESSION["nombre"] = $_POST["nombre"];

?>

<a href="sesiones1sencillo.php">Volver </a>


</body>