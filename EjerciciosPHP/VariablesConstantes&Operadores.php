<?php
//Declarar una variabñe $ + identificador + asignación del tipo de dato o valor

$Variable = 45;
$Mensaje = "El valor de la vaiable es: ";
$Numero1 = 31; $Numero2 = 42; $Numero3 = 83;
$Suma = $Numero1 + $Numero2 + $Numero3;
$Resta = $Numero1 - $Numero2 - $Numero3;
$Multiplicación = $Numero1 * $Numero2 * $Numero3;
$División = $Numero1 / $Numero2 / $Numero3; 
$Radio = 2;
define('Pi', '3.1416');
$Decremento = 10;
$Incremento = 10;

echo "La suma de".$Numero1." + ".$Numero2." + ".$Numero3."es: ".$Suma."<br>";
echo "La resta de".$Numero1." - ".$Numero2." - ".$Numero3."es: ".$Resta."<br>";
echo "La multiplicación de".$Numero1." * ".$Numero2." * ".$Numero3."es: ".$Multiplicación."<br>";
echo "La división de".$Numero1." / ".$Numero2." / ".$Numero3."es: ".$División."<br>";
/*Hay dos maneras de imprimir una constante
echo hora;
echo constant('hora');
*/
//echo var_dump(constant{'hora'})."<br>";
// echo $Mensaje, $Variable;
//Area de un círculo

$Ejemplo = Pi * $Radio * $Radio;
$Mensaje2 = "El área del círculo con el radio de: ".$Radio."por el valor de Pi que es".Pï.", el resultado es: ".$Ejemplo;
echo $Mensaje2;
echo "El valor de Decremento es: ".--$Decremento."<br>";
echo "El valor de Incremento es: ".++$Incremento."<br>";

?>