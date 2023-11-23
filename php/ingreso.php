<?php
include_once('conexion.php');
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $epigrafe=mysqli_real_escape_string(getConexion(),trim($_POST['epigrafe']));
    $imagen=$_FILES['imagen'];
    $titular=mysqli_real_escape_string(getConexion(),trim($_POST['titular']));
    $subtitulo=mysqli_real_escape_string(getConexion(),trim($_POST['subtitulo']));
    $cuerpo=mysqli_real_escape_string(getConexion(),trim($_POST['cuerpo']));
    $cierre=mysqli_real_escape_string(getConexion(),trim($_POST['cierre']));
    $path=$imagen['name'];
    if($imagen['error'] === 0){
        if($imagen['size'] > 16000000){
            echo "<script>window.alert('ERROR IMAGEN MUY GRANDE, NO PUEDE SUPERAR 16 MEGABYTES'); window.location='../formulario/formulario.html';</script>";
        }else{
            $extension_archivo= pathinfo($imagen['name'], PATHINFO_EXTENSION);
            $extension_minuscula = strtolower($extension_archivo);

            $extensiones_posibles= array("jpg","jpeg","png","webp");

            if(in_array($extension_minuscula,$extensiones_posibles)){
                $nuevo_nombre_img = uniqid("IMG-", true).'.'.$extension_minuscula;
                $upload_path = '../imagenes/'.$nuevo_nombre_img;
                move_uploaded_file($imagen['tmp_name'], $upload_path);
                $sql="INSERT INTO noticia (Epigrafe,Imagen,Titular,Subtitulo,Cuerpo,Cierre) VALUES ('".$epigrafe."','".$nuevo_nombre_img."','".$titular."','".$subtitulo."','".$cuerpo."','".$cierre."')";
                $result=mysqli_query(getConexion(),$sql);
                header("Location: ../index.html");
            }else{
                echo "<script>window.alert('UTILIZE FORMATO DE IMAGEN ADMITIDO'); window.location='../formulario/formulario.html';</script>";
            }
        }   
    }else{
        echo "<script>window.alert('ERROR AL SUBIR LA IMAGEN'); window.location='../formulario/formulario.html';</script>";
    }
    mysqli_close(getConexion());
}

?>"