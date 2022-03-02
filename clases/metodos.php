<?php 

    class metodos{
        function mostrarDatos($sql){
            $c=new Conexion();
            $conexion=$c->conectar();
            $resultado=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
        }
        function insertarDatos($datos){
            $c=new Conexion();
            $conexion=$c->conectar();
            $sql="INSERT INTO t_persona (nombre,apellido)
                  VALUES ('$datos[0]','$datos[1]')";
            return $resultado=mysqli_query($conexion,$sql);
        }
        function actualizarDatos($datos){
            $c=new Conexion();
            $conexion=$c->conectar();
            echo $sql="UPDATE t_persona SET nombre='$datos[0]',
                                        apellido='$datos[1]'
                                        WHERE id='$datos[2]'";
            return $resultado=mysqli_query($conexion,$sql);
        }
        function eliminarDatos($id){
            $c=new Conexion();
            $conexion=$c->conectar();
            $sql="DELETE FROM t_persona WHERE id='$id'";
            return $resultado=mysqli_query($conexion,$sql);
        }
    }

?>