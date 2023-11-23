<?php
    function crearNoticia($conexion,$id){
        $sql="SELECT * FROM noticia WHERE id_noticia = '".$id."'";
        $result=mysqli_query($conexion,$sql);
        return $result;
    }
?>