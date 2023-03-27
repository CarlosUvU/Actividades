<?php
include "conexion.php";
if(isset($_POST['btn'])){
    $Nombre=$conecta->real_scape_string($_POST['Nombre']);
    $Apellidos=$conecta->real_scape_string($_POST['Apellidos']);
    $Direccion=$conecta->real_scape_string($_POST['Direccion']);
    $Telefono=$conecta->real_scape_string($_POST['Telefono']);
    $FechaR=$conecta->real_scape_string($_POST['FechaR']);
    $Email=$conecta->real_scape_string($_POST['Email']);

    if($Nombre==" " || $Apellidos==" " || $Direccion==" " || $Telefono==" " || $FechaR==" " || $Email==" "){
        $Alerta='Alguno de los datos esta vacio';
    } else {
        $Registro="INSERT INTO usuario(Nombre, Apellidos, Direccion, Telefono, FechaR, Email)VALUES('$Nombre', '$Apellidos', '$Direccion', '$Telefono', '$FechaR', '$Email');"

        $Registro=$conecta->query($registro);
    if($Registro>0){
        echo"Registro exitoso"
    } else {
        echo"Error al registrar"
    }
}
}


?>