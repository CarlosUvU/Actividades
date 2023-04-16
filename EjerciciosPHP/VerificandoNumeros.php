<?php
  //Una práctica que calcule el promedio de 5 notas o calificaciones verificando que los valores sean numericos posteriormente indicar si esta aprovado o reprobado según el valor asignado por el promedio
  $Calificación1 = 8;
  $Calificación2 = 9;
  $Calificación3 = 8;
  $Calificación4 = 7;
  $Calificación5 = 10;
  $Minimo = 7;
  /*
  if(is_numeric($Calificación1) && is_numeric($Calificación2) && is_numeric($Calificación3) && is_numeric($Calificación4) && is_numeric($Calificación5)){
    $Promedio = ($Calificación1+$Calificación2+$Calificación3+$Calificación4+$Calificación5)/5;
    if($Promedio >= $Minimo){
        echo "<br><br> Tu promedio es de: ".$Promedio.", por lo tanto estas aprobado :D";
    }
    else{
        echo "<br><br> Tu promedio es de: ".$Promedio.", por lo tanto no estas aprobado:(";
    }
  }
  else{
    $Mensaje = "Alguno de los valores no corresponde a un valor numerico";
    echo $Mensaje;
  }

if(is_numeric($Calificación1)){
    $Calificación1 = $Calificación1;
}
else{
    echo "El valor de la Calificación 1 no es numerico";
}
if(is_numeric($Calificación2)){
    $Calificación2 = $Calificación2;
}
else{
    echo "El valor de la Calificación 2 no es numerico";
}
if(is_numeric($Calificación3)){
    $Calificación3 = $Calificación3;
}
else{
    echo "El valor de la Calificación 3 no es numerico";
}
if(is_numeric($Calificación4)){
    $Calificación4 = $Calificación4;
}
else{
    echo "El valor de la Calificación 4 no es numerico";
}
if(is_numeric($Calificación5)){
    $Calificación5 = $Calificación5;
}
else{
    echo "El valor de la Calificación 5 no es numerico";
}
$Promedio = ($Calificación1+$Calificación2+$Calificación3+$Calificación4+$Calificación5)/5;
if($Promedio >= $Minimo){
    echo "Aprobaste";
}
else{
    echo "Reprobaste";
}
*/
if(!is_numeric($Calificación1)){
    echo "El valor de la Calificación 1 es: ".$Calificación1.", no es numerico";
}
else if(!is_numeric($Calificación2)){
    echo "El valor de la Calificación 2 es: ".$Calificación2.", no es numerico";
}
else if(!is_numeric($Calificación3)){
    echo "El valor de la Calificación 3 es: ".$Calificación3.", no es numerico";
}
else if(!is_numeric($Calificación4)){
    echo "El valor de la Calificación 4 es: ".$Calificación4.", no es numerico";
}
else if(!is_numeric($Calificación5)){
    echo "El valor de la Calificación 5 es: ".$Calificación5.", no es numerico";
}
else{
    $Promedio = ($Calificación1+$Calificación2+$Calificación3+$Calificación4+$Calificación5)/5;
    if($Promedio >= $Minimo){
        echo "El promedio obtenido es de: ".$Promedio.", por lo tanto estas aproabado";
    }
    else{
        echo "El promedio obtenido es de: ".$Promedio.", por lo tanto estas no aproabado";
    }
}

?>