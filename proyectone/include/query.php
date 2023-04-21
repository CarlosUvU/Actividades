<?php
include "conexion.php";

$usuarios="SELECT * FROM registro";
$ejecutar=$conecta->query($usuarios);

$Plantel = "SELECT NombreP * FROM plantel ORDER BY NombreP plantel ASC";
$PlantelE = $conecta->query($Plantel);
$Estado = "SELECT NomEstado * FROM estado ORDER BY NomEstado estado ASC";
$EstadoE = $conecta->query($Estado);


?>