<?php
    include('php/conexion.php');
    include('php/conseguirNoticia.php');
    $result=conseguirNoticia(getConexion());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Noticias</title>
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
        <aside class="aside_1">
            <h2 class="aside_1_h2">Noticias</h2>
            <?php
                echo "<img class='noticia_central' src='imagenes/".$result[0]['imagen']."' alt='noticia central'>";
            ?>
        </aside>

        <aside class="aside_2">
            <h2 class="aside_2_h2">Noticias Recientes</h2>

            <div class="contain_noticias">
                <?php
                foreach($result as $key => $value){
                if($key>0){
                    echo"<div class='noticias'>";
                        echo "<a href='noticia.php?id=".$result[$key]['id']."'><img src='imagenes/".$result[$key]['imagen']."' alt='noticia_".$key."'></a>";
                        echo "<div class='content_noticia'>";
                            echo "<h2 class='title_noticia'>".$result[$key]['titulo']."</h2>";
                    echo "</div>";
                }
            }
                ?>
            </div>
        </aside>
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