<?php
include "include/conexion.php";
include "include/query.php";
include "consulta.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <table>
    <thead>
        <th>Id_Usuario</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Direccion</th>
        <th>Telefono</th>
        <th>Email</th>
        <th>Fechanac</th>
    </thead>
    <tbody>
        <?php while($row=$ejecutar->fetch_array()){?> 
    <tr>
            <td><?php echo $row['Id_registro']; ?></td>
            <td><?php echo $row['Nombre']; ?></td>
            <td><?php echo $row['Apellidos']; ?></td>
            <td><?php echo $row['Direccion']; ?></td>
            <td><?php echo $row['Telefono']; ?></td>
            <td><?php echo $row['FechaR']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            
            <?php }?>
        </tr>
    </tbody>
        
 



 </table>    

</body>
</html>