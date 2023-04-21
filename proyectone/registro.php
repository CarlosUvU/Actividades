<?php include "include/conexion.php";
include "include/accion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/bootstrap.css.min">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container m-0 content-justify-center py-2">
        <div class="row text-center">
            <h1 class="text-subccess">Registro</h1>
        </div>
        <form id="Registro" action="<?php echo $_SERVER['PHP_SELF'];?>" Method="POST">
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" required>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="direccion" class="form-control" placeholder="Direccion" required>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="text" name="telefono" class="form-control" placeholder="Telefono" required>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="date" name="fechaR" class="form-control" required>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="Email" name="email" class="form-control" placeholder="Email" required>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <input type="submit" value="Registrar" name="btn" class="btn-light-subccess">
        </div>
    </div>
    <div>
        <div>
        <select name="Plantel" id="">
          <?php while($row = $PlantelE->fech_array()){ ?>
          <option value="<?php echo $row['Id_plantel']; ?>"><?php echo $row ['NombreP'];?></option> 
          <?php } ?>
        </select>
    </div>
    <div>
        <div>
        <select name="Estado" id="">
          <?php while($row1 = $EstadoE->fech_array()) { ?>
          <option value="<?php echo $row['Id_Estado']; ?>"><?php echo $row1 ['NomEstado'];?></option>
          <?php } ?>
        </select>
    </div>
    </div>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>