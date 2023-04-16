<?php
if(isset($_POST['Enviar'])){
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Fecha = $_POST['Fecha'];
$Email = $_POST['Email'];
if($Nombre == ""){
echo "Falta asignar un Nombre";
}
elseif($Apellidos == ""){
echo "Falta asignar Apellidos";
}
elseif($Fecha == ""){
echo "Falta asignar una Fecha";
}
elseif($Email == ""){
echo "Falta asignar un Email";
}
else{
    echo "Tu nombre es: ".$Nombre."<br> Tus apellidos son: ".$Apellidos."<br> Tu Fecha de Nacimiento: ".$Fecha."<br> Tu Email es: ".$Email;
}
}
else{
    echo "No le diste click al boton";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperación de datos desde el formulario</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="text" name="Nombre" placeholder="Nombre Completo"/><br>
    <input type="text" name="Apellidos" placeholder="Apellidos"/><br>
    <label for="FechaN">Selecciona tu fecha de Nacimiento</label><input type="date" name="Fecha"/><br>
    <input type="email" name="Email" placeholder="ejemplo@yo.com"/><br>
    <input type="submit" value="Enviar" name="Enviar" >
    </form>
</body>
</html>