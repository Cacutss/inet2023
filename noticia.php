<?php
    include('php/conexion.php');
    include('php/crearNoticia.php');
    $result=crearNoticia(getConexion(),$_GET['id']);
    $noticia=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/noticia.css">
    <title>Noticia</title>
</head>
<body>
    <header class="header">
        <nav>
            <ul class="nav_ul">
                <li class="nav_li"><a href="#">Institucional</a></li>
                <li class="nav_li"><a href="#">Tipo de Oferta</a></li>
                <li class="nav_li"><a href="#">Planeamiento</a></li>
                <li class="inet"><a href="index.html">inet</a></li>
                <li class="inet_info"><a href="index.html">Instituto nacional de educacion tecnologica</a></li>
                <li class="nav_li"><a href="#">Biblioteca</a></li>
                <li class="nav_li"><a href="#">Noticias</a></li>
                <li class="nav_li"><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <aside>
            <?php
            echo "<img class='noticia' src='imagenes/".$noticia['Imagen']."' alt='noticia'>";
            ?>
        </aside>
        <div class="info_noticia">
            <?php
            echo "<h2>".$noticia['Titular']."</h2>";
            echo "<p>".$noticia['Cuerpo']."</p>";
            ?>
        </div>
    </main>
    <footer class="footer">
        <div class="footer_contain"> 
            <p class="footer_inet">inet</p>
            <div class="contain_span">
                <span class="footer_span">Saavedra 789 -</span>
                <span class="footer_span">C1229ACE</span>
                <span class="footer_span">Tel. (+54) 11 4129-2000</span>
            </div>
            <img class="footer_image" src="imagenes/footer_image.png" alt="imagen del footer">
        </div>
    </footer>
</body>
</html>