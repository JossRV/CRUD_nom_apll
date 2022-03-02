<?php 
    require_once "clases/conexion.php";
    require_once "clases/metodos.php";
    $objeto=new metodos();
    $sql="SELECT id,nombre,apellido FROM t_persona";
    $datos=$objeto->mostrarDatos($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <?php require "app/dependencias.php"; ?>
</head>

<body>
    <div class="container text-center mt-5">
        <div class="row">
            <h1>CRUD</h1>
            <div class="col-5 mt-5">
                <form action="procesos/insertar.php" method="post">
                    <div class="input-group">
                        <label class="input-group-text" for=""><i class="fas fa-address-card"></i></label>
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        <label class="input-group-text" for=""><i class="fas fa-address-card"></i></label>
                        <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                    </div>
                    <button class="btn btn-outline-dark container-fluid mt-4">Agregar</button>
                </form>
            </div>
            <div class="col-2"></div>
            <div class="col-5">
                <table border="4" class="table table-bordered border-dark">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </thead>
                    <tbody>
                        <?php foreach($datos as $key): ?>
                            <tr>
                                <td><?php echo $key['nombre']; ?></td>
                                <td><?php echo $key['apellido']; ?></td>
                                <td>
                                    <a href="view/vista_actualizar.php?id=<?php echo $key['id']; ?>"><i class="fas fa-edit"></i></a>
                                </td>
                                <td>
                                    <a href="procesos/eliminar.php?id=<?php echo $key['id']; ?>"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>