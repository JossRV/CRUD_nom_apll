<?php 

    require_once "../clases/conexion.php";
    require_once "../clases/metodos.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    $datos=array(
        $nombre,
        $apellido
    );
    $objeto = new metodos();

    if($objeto->insertarDatos($datos)==1){
        header("location: ../index.php");
    }else{
        echo "no se agrego correctamente";
    }
    // echo $objeto->insertarDatos($datos);

?>