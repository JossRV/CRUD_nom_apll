<?php 

    class Conexion{

        public function conectar(){
            $servidor="localhost";
            $usuario="root";
            $password="";
            // $port="3306";
            $bd="crud";
            $conexion = new mysqli(
                $servidor,
                $usuario,
                $password,
                $bd
                // $port
            );
            return $conexion;
        }
    }
    // $objeto=new Conexion();

    // if($objeto->conectar()){
    //     echo "conectado2";
    // }else{
    //     echo "fallo";
    // }

?>