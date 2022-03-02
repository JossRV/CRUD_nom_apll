<?php 

    require_once "../clases/conexion.php";
    require_once "../clases/metodos.php";

    $id=$_GET['id'];

    $objeto=new metodos();
    if($objeto->eliminarDatos($id)==1){
        header("location: ../index.php");
    }else{
        echo "eliminacion fallida";
    }

?>