<?php
include "conexion.php";
include "query.php";
if(isset($_POST['btn'])){
    $Nombre = $conecta->real_escape_string($_POST['nombre']);
    $Apellidos = $conecta->real_escape_string($_POST['apellidos']);
    $Direccion = $conecta->real_escape_string($_POST['direccion']);
    $Telefono = $conecta->real_escape_string($_POST['telefono']);
    $FechaR = $conecta->real_escape_string($_POST['fechaR']);
    $Email = $conecta->real_escape_string($_POST['email']);

    if($Nombre==" " || $Apellidos==" " || $Direccion==" " || $Telefono==" " || $FechaR==" " || $Email==" "){
        $Alerta='Alguno de los datos esta vacio';
    } else {
        $registro = "INSERT INTO usuario(Nombre, Apellidos, Direccion, Telefono, FechaR, Email)VALUES('$Nombre', '$Apellidos', '$Direccion', '$Telefono', '$FechaR', '$Email')";
        $Registro1 = $conecta->query($registro); 
    }               
    if($registro>0){                                   
        echo"Registro exitoso";
    } else {
        echo"Error al registrar";
}
}


?>