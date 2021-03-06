<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>GdlWebCamp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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
                <img src="img/logo.svg" alt="logo gdlwebcam">
            </div>
            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navegacion-principal clearfix">
                <a href="conferencia.html">Conferencia</a>
                <a href="#">Calendario</a>
                <a href="#">Invitados</a>
                <a href="registro.html">Reservaciones</a>
            </nav>
        </div>
        <!--sierre contenedor-->
    </div>
    <!--sierre de barra navegasion-->
    <section class="seccion contenedor">
        <h2>La mejor conferencia de diseño web en español</h2>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel autem odio velit. Quas nemo eum earum
            laboriosam
            reiciendis, alias nesciunt hic repudiandae sint, rem, officiis dolores officia sapiente libero molestias
            possimus
            voluptatum nihil facere assumenda. Autem porro perspiciatis.
        </p>
    </section>
    <!--fin section-->

    <section class="programa">
        <div class="contenedor-video">
            <video autoplay loop poster="img/bg-talleres.jpg">
                <source src="video/video.mp4" type="video/mp4">
                <source src="video/video.webm" type="video/webm">
                <source src="video/video.ogv">
            </video>
        </div>
        <!--video fondo-->
        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>Programa del Evento</h2>
                    <nav class="menu-programa">
                        <a href="talleres"><i class="fa fa-code"></i> Talleres</a>
                        <a href="conferencias"><i class="fa fa-comment"></i> Conferencias</a>
                        <a href="seminarios"><i class="fa fa-university"></i> Seminarios</a>
                    </nav>
                    <div id="talleres" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>HTML5, CSS3, y JavaScript</h3>
                            <p><i class="fa fa-clock"></i> 16:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fa fa-user"></i> Juan Pablo De la torre Valvez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Responsive web design</h3>
                            <p><i class="fa fa-clock"></i> 20:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fa fa-user"></i> Juan Pablo De la torre Valvez</p>
                        </div>
                        <a href="#" class="button float-right">ver todos</a>
                    </div>
                    <!--talleres-->
                    <div id="conferencias" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Como ser freelancer</h3>
                            <p><i class="fa fa-clock"></i> 10:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fa fa-user"></i> Gregorio Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Tecnologias del futuro</h3>
                            <p><i class="fa fa-clock"></i> 17:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 10 de Dic</p>
                            <p><i class="fa fa-user"></i> Susan Sanchez</p>
                        </div>
                        <a href="#" class="button float-right">ver todos</a>
                    </div>
                    <!--talleres-->
                    <div id="seminarios" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Diseño UI/UX para moviles</h3>
                            <p><i class="fa fa-clock"></i> 17:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fa fa-user"></i> Harol Garcia</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Aprende a programar en una mañana</h3>
                            <p><i class="fa fa-clock"></i> 10:00 hrs</p>
                            <p><i class="fa fa-calendar"></i> 11 de Dic</p>
                            <p><i class="fa fa-user"></i> Susana Rivera</p>
                        </div>
                        <a href="#" class="button float-right">ver todos</a>
                    </div>
                    <!--talleres-->
                </div>
                <!--Programa-evento-->
            </div>
            <!--Contenedor-->
        </div>
        <!--contenido-programa-->
    </section>
    <!--Programa-->
    <section class="invitados contenedor seccion">
        <h2>Nuestros Invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <img src="img/invitado1.jpg" alt="Rafael Bautista">
                    <p>Rafael Bautista</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado2.jpg" alt="Shari Herrera">
                    <p>Shari Herrera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado3.jpg" alt="Gregorio Sanchez">
                    <p>Gregorio Sanchez</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado4.jpg" alt="Susana Rivera">
                    <p>Susana Rivera</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado5.jpg" alt="Harold Garcia">
                    <p>Harold Garcia</p>
                </div>
            </li>
            <li>
                <div class="invitado">
                    <img src="img/invitado6.jpg" alt="Susana Sanchez">
                    <p>Susana Sanchez</p>
                </div>
            </li>
        </ul>
    </section>
    <!--sierre sect-fotos-->
    <div class="contador paralax">
        <div class="contador">
            <ul class="resumen-evento clearfix">
                <li>
                    <p class="numero">6</p>Invitados
                </li>
                <li>
                    <p class="numero">15</p>Talleres
                </li>
                <li>
                    <p class="numero">3</p>Dias
                </li>
                <li>
                    <p class="numero">9</p>Conferencias
                </li>
            </ul>
        </div>
    </div>
    <!--siere paralax-->
    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por dia</h3>
                        <p class="numero">$30</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase todos los dias</h3>
                        <p class="numero">$50</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button">Comprar</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>Pase por 2 dias</h3>
                        <p class="numero">$45</p>
                        <ul>
                            <li>Bocadillos Gratis</li>
                            <li>Todas las conferencias</li>
                            <li>Todos los talleres</li>
                        </ul>
                        <a href="#" class="button hollow">Comprar</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--sierre de Tiket y pases-->
    <div id="mapa" class="mapa">

    </div>
    <!--sierre Mapa-->
    <section class="seccio">
        <h2>Testimoniales</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                        accumsan lacus
                        vel facilisis. </p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="img testimonial">
                        <cite>Oswaldo Aponte Escovedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div> <!-- (1)Testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                        accumsan lacus
                        vel facilisis. </p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="img testimonial">
                        <cite>Oswaldo Aponte Escovedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--(2)Testimonial-->
            <div class="testimonial">
                <blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas
                        accumsan lacus
                        vel facilisis. </p>
                    <footer class="info-testimonial clearfix">
                        <img src="img/testimonial.jpg" alt="img testimonial">
                        <cite>Oswaldo Aponte Escovedo <span>Diseñador en @prisma</span></cite>
                    </footer>
                </blockquote>
            </div>
            <!--(3)Testimonial-->
        </div>
    </section>
    <!--sierreTestimonial-->
    <div class="newsletter paralax">
        <div class="contenido contenedor">
            <p>Registrate al newsletter</p>
            <h3>GdlWebCamp</h3>
            <a href="#" class="button transparente">Registro</a>
        </div><!-- sierre contenido -->
    </div>
    <!--sierre Newsleter-->
    <section class="seccion">
        <h2>Faltan</h2>
        <div class="cuenta-regreciva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero"></p>Dias
                </li>
                <li>
                    <p id="horas" class="numero"></p>Horas
                </li>
                <li>
                    <p id="minutos" class="numero"></p>Minutos
                </li>
                <li>
                    <p id="segundos" class="numero"></p>Segundos
                </li>
            </ul>
        </div>
    </section>

    <footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>gdlwebcamp</span></h3>
                <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et.
                    Ut
                    bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue
                    orci.
                    Maecenas luctus mi at ex
                    blandit vehicula. Morbi porttitor tempus euismod.</p>
            </div>
            <div class="ultimos-tweets">
                <h3>Últimos <span>tweets</span></h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere minus cum fugiat eos! Totam magni
                    quidem
                    doloribus, aut quia exercitationem sunt iure sed. Beatae adipisci quia, omnis fugiat porro iusto
                    consequuntur
                    rerum exercitationem!</p>

            </div>
            <div class="menu">
                <h3>Redes <span>sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </nav>
            </div>
        </div>

        <p class="copyright">
            Todos los derechos Reservados GDLWEBCAMP 2016.
        </p>
    </footer>


    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="js/leaflet.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')
    </script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="jquery.countdown-2.2.0/jquery.countdown.min.js"></script>
    <script src="waypoints/lib/jquery.waypoints.js"></script>
    <script src="js/plugins.js"></script>
    <script src="Lettering.js/jquery.lettering.js"></script>
    <script src="js/main.js"></script>




    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
    window.ga = function() {
        ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>

</body>

</html>