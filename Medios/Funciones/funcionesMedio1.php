<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> No title yet </title>
</head>
<body>

<?php 
//Haz una página web que muestre la fecha actual en castellano, incluyendo el día de la semana,
//con un formato similar al siguiente: "Miércoles, 13 de Abril de 2011".



$numeroDia =date("d");



function darDia(){
    
  $dia =  date("D");
  
  switch ($dia){
      
      case "Mon":
          
          return "Lunes";
          break;
      
      case "Tue":
          
          return "Martes";
          break;
      
      case "Wed":
          
          return "Miercoles";
          break;
      
      case "Thu":
          
          return "Jueves";
          break;
      
      case "Fri":
          
          return "Viernes";
          break;
      
      case "Sat":
          
          return "Sabado";
          break;
      
      case "Sun":
          
          return "Domingo";
          break;
          
          
      
  }
    
}

function darMes(){
    
    $mes =  date("n");
    
    switch ($mes){
        
        case 1:
            
            return "Enero";
            break;
            
        case 2:
            
            return "Febrero";
            break;
            
        case 3:
            
            return "Marzo";
            break;
            
        case 4:
            
            return "Abril";
            break;
            
        case 5:
            
            return "Mayo";
            break;
            
        case 6:
            
            return "Junio";
            break;
            
        case 7:
            
            return "Julio";
            break;
            
        case 8:
            
            return "Agosto";
            break;
            
        case 9:
            
            return "Septiembre";
            break;
         
            
        case 10:
            
            return "Octubre";
            break;
            
        case 11:
            
            return "Noviembre";
            break;
            
        case 12:
            
            return "Diciembre";
            break;
    }
    
}

function darFecha(){
$dia = darDia();
$mes = darMes();
$anio = date("Y");
$diaNum = date("j");
echo $dia . ", " . $diaNum ." de " .$mes . " de " . $anio;
}



 darFecha();


?>

</body>

</html>