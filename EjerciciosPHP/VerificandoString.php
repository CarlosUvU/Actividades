<?php
  //Verificar si la salida de datos es true el valor es tipo string y false de lo contrario
  $Valores = array(false, true, null, 'aeiou', '23,', 23, '23.5', '', '', '0', 0);
  foreach($Valores as $Valor){
    echo "Es un string(";
    var_export($Valor);
    echo ") =";
    var_dump(is_string($Valor));
    echo "<br><br>";
  }
  
  $Mensaje = "Esto es una cadena de caracteres";
  if(is_string($Mensaje)){
    echo $Mensaje."<br>";
    var_dump($Mensaje);
  }
  else{
    echo "El valor de Mensaje no es un string: ".$Mensaje;
  }
?>