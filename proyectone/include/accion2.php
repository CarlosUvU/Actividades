<?php
include "conexion.php";
if(isset($_POST['btn'])){
    $NombreP=$conecta->real_scape_string($_POST['NombreP$NombreP']);
    $ClaveP=$conecta->real_scape_string($_POST['ClaveP']);
    $Direccion=$conecta->real_scape_string($_POST['Direccion']);
    $Telefono=$conecta->real_scape_string($_POST['Telefono']);
    $Responsable=$conecta->real_scape_string($_POST['Responsable']);

    if($NombreP==" " || $ClaveP==" " || $Direccion==" " || $Telefono==" " ||$Responsable==" "){
        $Alerta='Alguno de los datos esta vacio';
    } else {
        $Plantel="INSERT INTO plantel(NombreP, ClaveP, Direccion, Telefono, Responsable)VALUES('$NombreP', '$ClaveP', '$Direccion', '$Telefono', '$Responsable');"

        $Plantel= $conecta->query($plantel);

    if($Plantel>0){
        echo"Registro exitoso"
    } else {
        echo"Error al registrar"
    }
}
}
?>