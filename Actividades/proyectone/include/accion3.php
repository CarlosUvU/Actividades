<?php
include "conexion.php";
if(isset($_POST['btn'])){
    $NomLugar=$conecta->real_scape_string($_POST['NomLugar']);
    $DescripcionL=$conecta->real_scape_string($_POST['DescripcionL']);
    $TelefonoL=$conecta->real_scape_string($_POST['TelefonoL']);
    $Email=$conecta->real_scape_string($_POST['Email']);
    $Facebook=$conecta->real_scape_string($_POST['Facebook']);
    $Id_Horario=$conecta->real_scape_string($_POST['Id_Horario']);

    if($NombreL==" " || $DescripcionL==" " || $TelefonoL==" " || $Email==" " || $Facebook==" " || $Horario==" "){
        $Alerta='Alguno de los datos esta vacio';
    } else {
        $Lugar="INSERT INTO usuario(NombreL, DescripcionL, Direccion, TelefonoL, Email, Facebook, Id_Horario)VALUES('$NomLugar', '$DescripcionL', '$TelefonoL', '$Email', '$Facebook', '$Id_Horario');"

        $Lugar= $conecta->query($lugares);

    if($Registro>0){
        echo"Registro exitoso"
    } else {
        echo"Error al registrar"
    }
}
}
?>