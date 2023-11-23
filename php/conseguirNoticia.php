<?php
    function conseguirNoticia($conexion){
        $sql="SELECT * FROM noticia ORDER BY date_register DESC LIMIT 7";
        $result=mysqli_query($conexion,$sql);
        $cont=0;
        while($noticia=mysqli_fetch_assoc($result)){
            $noticias[$cont]['id']=$noticia['id_Noticia'];
            $noticias[$cont]['titulo']=$noticia['Titular'];
            $noticias[$cont]['imagen']=$noticia['Imagen'];
            $noticias[$cont]['cuerpo']=$noticia['Cuerpo'];
            $noticias[$cont]['subtitulo']=$noticia['Subtitulo'];
            $cont++;
        }
        return $noticias;
    }
?>