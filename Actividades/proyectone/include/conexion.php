<?php 
$Servidor = "localhost";
$Usuario = "root";
$Password = "";
$BD = "proyectone";
$conecta = mysqli_connect($Servidor, $Usuario, $Password, $BD);
if($conecta->connect_error){
    die("Error al conectar la base de datos".$conecta->connect_error);
}
?>