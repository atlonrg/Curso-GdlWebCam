<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>GdlWebCamp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina == 'index'){
      echo '<link rel="stylesheet" href="css/colorbox.css">';
    }else if($pagina == 'conferencia') {
        echo '<link rel="stylesheet" href="css/lightbox.css">';
    }
    ?>
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
                <div class="informacion-evento">
                    <div class="clearfix">
                        <p class="fecha"><i class="far fa-calendar-alt"></i> 10/12/Dic</p>
                        <p class="ciudad"><i class="fas fa-map-marker-alt"></i> Las Palmas</p>
                    </div>
                    <!--info evento-->
                    <h1 class="nombre-sitio">GdlWebCamp</h1>
                    <p class="eslogan">La mejr conferencia de <span>diseño web</span></p>
                </div>
            </div>
        </div>
        <!--hero-->
    </header>
    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
               <a href="index.php">
                <img src="img/logo.svg" alt="logo gdlwebcam">
                </a>
            </div>
            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal clearfix">
                <a href="conferencia.php">Conferencia</a>
                <a href="calendario.php">Calendario</a>
                <a href="invitados.php">Invitados</a>
                <a href="registro.php">Reservaciones</a>
            </nav>
        </div>
        <!--sierre contenedor-->
    </div>    <!--sierre de barra navegasion-->