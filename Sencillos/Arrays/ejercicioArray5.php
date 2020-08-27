<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>


<!-- Haz una página PHP que utilice foreach para mostrar todos los valores del array
 $_SERVER en una tabla con dos columnas. La primera columna debe contener el nombre de la variable, y la segunda su valor.

 -->
 
 
 <table>
 <tbody>
 <tr>
 <th> Variable </th>
 <th> Valor </th>
 </tr>
 
 
 
 
<?php 

foreach ($_SERVER as $clave =>$valor) {
   
    echo "<tr>";
    echo "<td>$clave</td>";
    echo "<td>$valor</td>";
    echo "</tr>";
    
    
}

?> 



</tbody>
 
 
 
 </table>
</body>

</html>