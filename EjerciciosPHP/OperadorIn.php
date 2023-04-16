<?php
  $Valor1 = 75;
  $Valor2 = 90;
  $Valor3 = 60;
  $Persona = "Hombre";
  $Letra = "a";
  //Sentencia If, operadores relacionales u operadores logicos
  
  /*if(Condición){
    codigo o acción a realizar, si se cumple la condición 
  }
  else{
   Si la acción es contraria al if, aquí se ejecutara otra acción     
  }
  //Este if ocupará operadores relacionales
  if($Valor1 > $Valor2){
    echo "El valor 1 es menor al valor 2, el cual es: ".$Valor1;
    return true;
  }
  else{
    echo "La deaclaración de que el valor 1 es menor que el valor 2 es falsa";
  }

 if($Persona == 'Hombre'){
    echo "Como el género de la variable Persona es hombre, entonces se llamará Luis <br>";
 }
 else{
    echo "Como no se cumple el If, entonces el genero de la variable Persona no es hombre, por lo tanto no puede darle nombre";
 }
 
 if($Valor1 > $Valor2 && $Valor1 > $Valor3){
    echo "El valor de: ".$Valor1."es menor a ".$Valor2."y al: ".$Valor3;
 }
 else if($Valor2 > $Valor1 && $Valor2 > $Valor3){
    echo "El valor de: ".$Valor2." es mayor a: ".$Valor1." y al: ".$Valor3;
 }
 else if($Valor3 > $Valor1 && $Valor3 > $Valor2){
    echo "El valor de: ".$Valor3."es mayorr al: ".$Valor1."y al: ".$Valor2;
 }
 else{
    echo "No se cumple con ninguna de las condiciones";
 }
 */

 if($Letra == 'a' || $Letra == 'e' || $Letra == 'i' || $Letra == 'o' || $Letra == 'u'){
    echo "El valor de la variable letra es".$Letra."una vocal";
 }
 else{
    echo "El valor de la variable letra es una consonante";
 }
?>