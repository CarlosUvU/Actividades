<?php
  /*
  for(expresion1; expresion2; expresion3){
  Sentencia o instrucciones
  for(iniciar el ciclo: condición; incremento o decremento){
    Sentencias o instrucciones que se ejecutaran si se cumple la condición 
  }
  echo "La lista de numeros pares es: ";
  for($i=2; $i <= 26; $i = $i + 2){
    echo "<br>";
    echo $i;
    echo "<br>";
  }
  for($x = 1; $x <= 20; $x = $x + 1){
    echo "Ejecutando el ciclo: ".$x."<br>";
  }
  echo "Termina el ciclo";
  */
  for($j = 1; $j <= 15; $j = $j + 1):
    echo $j."<br>";
  endfor;
  echo "Aquí termina el ciclo for, ya que se repite: ".$j;

?>