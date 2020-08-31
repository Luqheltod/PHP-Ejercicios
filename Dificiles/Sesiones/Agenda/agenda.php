<!doctype html>
<html>
<head>
<?php  session_start();?>
<meta charset="utf-8">
<title>Agendilla</title>

<style>
h1 {
	text-align: center;
}

table {
	background-color: #FFC;
	padding: 5px;
	border: #666 5px solid;
}

.no_validado {
	font-size: 18px;
	color: #F00;
	font-weight: bold;
}

.validado {
	font-size: 18px;
	color: #0C3;
	font-weight: bold;
}
</style>
</head>
<body>


	<h1>AGENDA DE CONTACTOS</h1>

	<em>Si el nombre ya  existe , se actualizara el contacto con el nuevo
		telefono. Si quieres borrar un contacto, introduce su nombre y deja el
		telefono en blanco </em>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"
		method="post">
		<table width="15%" align="center">
			<tr>
				<td>Nombre:</td>
				<td><label for="nombre"></label> <input type="text" name="nombre"
					id="nombre"></td>
			</tr>
			<tr>
				<td>Telefono:</td>
				<td><label for="telefono"></label> <input type="text"
					name="telefono" id="telefono"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="enviar"
					value="Añadir o Modificar"></td>
				<td colspan="2" align="center"><input type="submit" name="reiniciar"
					value="Reiniciar Agenda"></td>
			</tr>
		</table>
	</form>

<?php

if (! isset($_SESSION["agenda"])) { // si el sesion agenda no esta creado lo creamos por primera vez

    $_SESSION["agenda"] = array(); // en este caso estamos indicando a php que será un array
}

if (isset($_POST["enviar"])) {

    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];

    if (empty($_POST["nombre"])) {

        echo " <p style='color:red'; > El nombre no puede estar vacio </p> ";
    } 
    else if (empty($_POST["telefono"])) 
    {

        unset($_SESSION["agenda"][$nombre]);
    } else {

        if (! in_array($nombre, $_SESSION["agenda"]) && ! empty($telefono)) {

            $_SESSION["agenda"][$nombre] = $telefono;
        }
    }
}
echo "<ul>";

foreach ($_SESSION["agenda"] as $clave => $valor) {

    echo "<li> Nombre:  $clave  </li>";
    echo "<li> Telefono:  $valor  </li> <br>";
}
echo "</ul>";

if (isset($_POST["reiniciar"])) {

    session_destroy();
}

?>

</body>

</html>