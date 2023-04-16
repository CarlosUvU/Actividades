<?php
    /*bucle para recorrer objetos
    foreach(expresion as $variable){
    acciones que se tendran dentro del ciclo
    }
  */
    $Arreglo = ["abcdefghijk", 54, 'e', 14.5, true];
    echo "<pre>\n";
    var_dump($Arreglo);
    echo "</pre>\n";
    foreach($Arreglo as $Recorrido){
    echo "<p>$Recorrido</p>\n";
    }
    echo "Termina el ciclo";

?>