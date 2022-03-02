<?php 

    require_once "../clases/conexion.php";
    require_once "../clases/metodos.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $id = $_POST['id'];

    $datos=array(
        $nombre,
        $apellido,
        $id
    );
    $objeto = new metodos();

    // var_dump ($objeto->actualizarDatos($datos)==1);

    if($objeto->actualizarDatos($datos)==1){
        header("location: ../index.php");
    }else{
        echo "no se actualizo correctamente";
    }
    // echo $objeto->insertarDatos($datos);

?>