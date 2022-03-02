<?php 

    require_once "../clases/conexion.php";

    $objeto = new Conexion();
    $conexion = $objeto->conectar();
    $id=$_GET['id'];
    // echo $id;
    $sql = "SELECT nombre,apellido FROM t_persona WHERE id='$id'";
    $resultado = mysqli_query($conexion,$sql);
    $ver = mysqli_fetch_row($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <?php require "../app/dependencias2.php" ?>
</head>

<body>
    <div class="container text-center mt-5">
        <div class="row">
            <h1>CRUD</h1>
            <div class="col-3"></div>
            <div class="col-6 mt-5">
                <form action="../procesos/actualizar.php" method="post">
                <input type="text" hidden value="<?php echo $id ?>" name="id">
                    <div class="input-group">
                        <label class="input-group-text" for=""><i class="fas fa-address-card"></i></label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?=$ver[0]?>">
                        <label class="input-group-text" for=""><i class="fas fa-address-card"></i></label>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido" value="<?=$ver[1]?>">
                    </div>
                    <button class="btn btn-outline-dark container-fluid mt-4">Actualizar</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>