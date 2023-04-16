<?php
  //Utilizar las sentencias if y else en su metodo alternativo
  //Tambien utilizaremos constantes, variables, operadores aritmeticos y lógicos y de relación
  //El ejercicio: calcular la edad con años, meses, días, horas, utilizando el año de nacimiento
  define('Tope', 2023);
  define('Meses', 12);
  define('días', 365);
  define('Horas', 24);
  $Nac = "2002";
  $Mayor = 18;
  $Edad = Tope - $Nac;
  $Meses = $Edad * Meses;
  $Dias = $Edad * días;
  $Horas = días * Horas * $Edad;
  
  if(is_numeric($Nac) && is_numeric($Mayor) && is_numeric($Edad) && is_numeric($Meses) && is_numeric($Dias) && is_numeric(Horas)):
    if($Edad >= $Mayor):
        echo "Eres mayor de edad porque";
        echo "Tienes: ".$Edad." años de vida<br>";
        echo "Son: ".$Meses." meses de vida<br>";
        echo "Son: ".$Dias." dias de vida<br>";
        echo "Son: ".$Horas." horas de vida<br>";
    else:
        echo "Eres menor de edad porque";
        echo "Tienes: ".$Edad." años de vida<br>";
        echo "Son: ".$Meses." meses de vida<br>";
        echo "Son: ".$Dias." dias de vida<br>";
        echo "Son: ".$Horas." horas de vida<br>";
    endif;
else:
    echo "Alguno de los valores asignados en las variables no son valores numericos";

  endif;
?>