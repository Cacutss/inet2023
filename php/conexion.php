<?php
    function getConexion(){  
        try{
            $conexion=mysqli_connect('localhost','root','','noticias');
            return $conexion;
        }catch(Exception $th){
            echo $th;
        }
    }
?>
